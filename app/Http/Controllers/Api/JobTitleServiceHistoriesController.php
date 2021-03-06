<?php

namespace App\Http\Controllers\Api;

use App\Models\JobTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceHistoryResource;
use App\Http\Resources\ServiceHistoryCollection;

class JobTitleServiceHistoriesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobTitle $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, JobTitle $jobTitle)
    {
        $this->authorize('view', $jobTitle);

        $search = $request->get('search', '');

        $serviceHistories = $jobTitle
            ->serviceHistories()
            ->search($search)
            ->latest()
            ->paginate();

        return new ServiceHistoryCollection($serviceHistories);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobTitle $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, JobTitle $jobTitle)
    {
        $this->authorize('create', ServiceHistory::class);

        $validated = $request->validate([
            'emp_no' => ['required', 'max:255', 'string'],
            'emoloyee_name' => ['required', 'max:255', 'string'],
            'band_position_id' => ['required', 'exists:band_positions,id'],
            'start_date' => ['required', 'date'],
            'company_home_id' => ['required', 'exists:company_homes,id'],
            'company_host_id' => ['required', 'exists:company_hosts,id'],
            'type' => ['required', 'max:255', 'string'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $serviceHistory = $jobTitle->serviceHistories()->create($validated);

        return new ServiceHistoryResource($serviceHistory);
    }
}
