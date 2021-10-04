<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\StatusEmployee;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;

class StatusEmployeeUsersController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StatusEmployee $statusEmployee
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, StatusEmployee $statusEmployee)
    {
        $this->authorize('view', $statusEmployee);

        $search = $request->get('search', '');

        $users = $statusEmployee
            ->users()
            ->search($search)
            ->latest()
            ->paginate();

        return new UserCollection($users);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StatusEmployee $statusEmployee
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StatusEmployee $statusEmployee)
    {
        $this->authorize('create', User::class);

        $validated = $request->validate([
            'avatar' => ['nullable', 'file'],
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'unique:users,email', 'email'],
            'nik_telkom' => [
                'nullable',
                'unique:users,nik_telkom',
                'max:255',
                'string',
            ],
            'nik_company' => [
                'required',
                'unique:users,nik_company',
                'max:255',
                'string',
            ],
            'date_in' => ['required', 'date'],
            'company_host_id' => ['nullable', 'exists:company_hosts,id'],
            'company_home_id' => ['required', 'exists:company_homes,id'],
            'band_position_id' => ['required', 'exists:band_positions,id'],
            'job_grade_id' => ['nullable', 'exists:job_grades,id'],
            'job_family_id' => ['nullable', 'exists:job_families,id'],
            'job_function_id' => ['nullable', 'exists:job_functions,id'],
            'division_id' => ['required', 'exists:divisions,id'],
            'unit_id' => ['required', 'exists:units,id'],
            'job_title_id' => ['required', 'exists:job_titles,id'],
            'date_sk' => ['nullable', 'date'],
            'sub_status_id' => ['nullable', 'exists:sub_statuses,id'],
            'edu_id' => ['required', 'exists:edus,id'],
            'place_of_birth' => ['required', 'max:150', 'string'],
            'date_of_birth' => ['required', 'date'],
            'age' => ['required', 'numeric'],
            'work_location_id' => ['required', 'exists:work_locations,id'],
            'city_recuite_id' => ['required', 'exists:city_recuites,id'],
            'password' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('public');
        }

        $user = $statusEmployee->users()->create($validated);

        $user->syncRoles($request->roles);

        return new UserResource($user);
    }
}
