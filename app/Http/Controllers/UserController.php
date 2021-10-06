<?php

namespace App\Http\Controllers;

use App\Models\Edu;
use App\Models\Unit;
use App\Models\User;
use App\Models\Profile;
use App\Models\Division;
use App\Models\JobGrade;
use App\Models\JobTitle;
use App\Models\JobFamily;
use App\Models\SubStatus;
use App\Models\CityRecuite;
use App\Models\CompanyHome;
use App\Models\CompanyHost;
use App\Models\JobFunction;
use App\Models\BandPosition;
use App\Models\WorkLocation;
use Illuminate\Http\Request;
use App\Models\StatusEmployee;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', User::class);

        $search = $request->get('search', '');

        $users = User::search($search)
            ->latest()
            ->paginate(5);

        return view('app.users.index', compact('users', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', User::class);

        $companyHosts = CompanyHost::pluck('name', 'id');
        $companyHomes = CompanyHome::pluck('name', 'id');
        $bandPositions = BandPosition::pluck('name', 'id');
        $jobGrades = JobGrade::pluck('name', 'id');
        $jobFamilies = JobFamily::pluck('name', 'id');
        $jobFunctions = JobFunction::pluck('name', 'id');
        $divisions = Division::pluck('name', 'id');
        $units = Unit::pluck('name', 'id');
        $jobTitles = JobTitle::pluck('name', 'id');
        $statusEmployees = StatusEmployee::pluck('name', 'id');
        $subStatuses = SubStatus::pluck('name', 'id');
        $edus = Edu::pluck('name', 'id');
        $workLocations = WorkLocation::pluck('name', 'id');
        $cityRecuites = CityRecuite::pluck('name', 'id');

        $roles = Role::whereNotIn('id', [1])->get();

        return view(
            'app.users.create',
            compact(
                'companyHosts',
                'companyHomes',
                'bandPositions',
                'jobGrades',
                'jobFamilies',
                'jobFunctions',
                'divisions',
                'units',
                'jobTitles',
                'statusEmployees',
                'subStatuses',
                'edus',
                'workLocations',
                'cityRecuites',
                'roles'
            )
        );
    }

    /**
     * @param \App\Http\Requests\UserStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $this->authorize('create', User::class);

        $validated = $request->validated();

        $validated['password'] = Hash::make('admedika321');

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('/', 'avatars');
        }

        $user = User::create($validated);

        $user->syncRoles([3]);
        $profile = new Profile();
        $user->profile()->save($profile);
        $user->save();

        return redirect()
            ->route('users.edit', $user)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $this->authorize('view', $user);

        return view('app.users.show', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $companyHosts = CompanyHost::pluck('name', 'id');
        $companyHomes = CompanyHome::pluck('name', 'id');
        $bandPositions = BandPosition::pluck('name', 'id');
        $jobGrades = JobGrade::pluck('name', 'id');
        $jobFamilies = JobFamily::pluck('name', 'id');
        $jobFunctions = JobFunction::pluck('name', 'id');
        $divisions = Division::pluck('name', 'id');
        $units = Unit::pluck('name', 'id');
        $jobTitles = JobTitle::pluck('name', 'id');
        $statusEmployees = StatusEmployee::pluck('name', 'id');
        $subStatuses = SubStatus::pluck('name', 'id');
        $edus = Edu::pluck('name', 'id');
        $workLocations = WorkLocation::pluck('name', 'id');
        $cityRecuites = CityRecuite::pluck('name', 'id');

        $roles = Role::whereNotIn('id', [1])->get();

        return view(
            'app.users.edit',
            compact(
                'user',
                'companyHosts',
                'companyHomes',
                'bandPositions',
                'jobGrades',
                'jobFamilies',
                'jobFunctions',
                'divisions',
                'units',
                'jobTitles',
                'statusEmployees',
                'subStatuses',
                'edus',
                'workLocations',
                'cityRecuites',
                'roles'
            )
        );
    }

    /**
     * @param \App\Http\Requests\UserUpdateRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $validated = $request->validated();

        if (request('password')) {

            $validated['password'] = Hash::make(request('password'));
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }

            $validated['avatar'] = $request->file('avatar')->store('/', 'avatars');
        }

        $user->update($validated);

        $user->syncRoles($request->roles);

        return redirect()
            ->route('users.edit', $user)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $this->authorize('delete', $user);

        if ($user->avatar) {
            Storage::delete($user->avatar);
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
