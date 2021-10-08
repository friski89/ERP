<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProfileHistory;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileHistoryResource;
use App\Http\Resources\ProfileHistoryCollection;
use App\Http\Requests\ProfileHistoryStoreRequest;
use App\Http\Requests\ProfileHistoryUpdateRequest;

class ProfileHistoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ProfileHistory::class);

        $search = $request->get('search', '');

        $profileHistories = ProfileHistory::search($search)
            ->latest()
            ->paginate();

        return new ProfileHistoryCollection($profileHistories);
    }

    /**
     * @param \App\Http\Requests\ProfileHistoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileHistoryStoreRequest $request)
    {
        $this->authorize('create', ProfileHistory::class);

        $validated = $request->validated();

        $profileHistory = ProfileHistory::create($validated);

        return new ProfileHistoryResource($profileHistory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileHistory $profileHistory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProfileHistory $profileHistory)
    {
        $this->authorize('view', $profileHistory);

        return new ProfileHistoryResource($profileHistory);
    }

    /**
     * @param \App\Http\Requests\ProfileHistoryUpdateRequest $request
     * @param \App\Models\ProfileHistory $profileHistory
     * @return \Illuminate\Http\Response
     */
    public function update(
        ProfileHistoryUpdateRequest $request,
        ProfileHistory $profileHistory
    ) {
        $this->authorize('update', $profileHistory);

        $validated = $request->validated();

        $profileHistory->update($validated);

        return new ProfileHistoryResource($profileHistory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileHistory $profileHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProfileHistory $profileHistory)
    {
        $this->authorize('delete', $profileHistory);

        $profileHistory->delete();

        return response()->noContent();
    }
}
