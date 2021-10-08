<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProfileHistory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileHistoryStoreRequest;
use App\Http\Requests\ProfileHistoryUpdateRequest;
use App\Models\Profile;

class ProfileHistoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {

        // dd($user->id);


        $this->authorize('view-any', ProfileHistory::class);

        $search = $request->get('search', '');
        // $user = $request->get('profile_id');

        // $profile = Profile::search($search)->where('user_id', $user->id)->with('profileHistories')->get();
        $profile = Profile::where('user_id', $user->id)->with('profileHistories')->first();


        // $profileHistories = ProfileHistory::search($search)
        //     ->latest()
        //     ->paginate(5);

        // $profileHistories = ProfileHistory::search($search)
        //     ->where('profile_id', $profile_id)
        //     ->latest()
        //     ->paginate(5);

        // $profiles = Profile::with('profileHistories')->get();



        return view(
            'app.profile_histories.index',
            compact('search', 'profile')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ProfileHistory::class);

        return view('app.profile_histories.create');
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

        return redirect()
            ->route('profile-histories.edit', $profileHistory)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileHistory $profileHistory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProfileHistory $profileHistory)
    {
        $this->authorize('view', $profileHistory);

        return view('app.profile_histories.show', compact('profileHistory'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileHistory $profileHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProfileHistory $profileHistory)
    {
        $this->authorize('update', $profileHistory);

        return view('app.profile_histories.edit', compact('profileHistory'));
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

        return redirect()
            ->route('profile-histories.edit', $profileHistory)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('profile-histories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
