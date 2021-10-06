<?php

namespace App\Http\Controllers\User;

use App\Models\Edu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EducationalBackground;
use App\Http\Requests\EducationalBackgroundStoreRequest;
use App\Http\Requests\EducationalBackgroundUpdateRequest;

class RiwayatPendidikanController extends Controller
{
    public function index()
    {
        $this->authorize('create', EducationalBackground::class);

        $users = User::pluck('name', 'id');
        $edus = Edu::pluck('name', 'id');

        return view('users.riwayat_pendidikan.create', compact('users', 'edus'));
    }

    public function store(EducationalBackgroundStoreRequest $request)
    {
        $this->authorize('create', EducationalBackground::class);

        $validated = $request->validated();

        $educationalBackground = EducationalBackground::create($validated);

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.created'));
    }

    public function edit(
        Request $request,
        EducationalBackground $educationalBackground
    ) {
        $this->authorize('update', $educationalBackground);

        $users = User::pluck('name', 'id');
        $edus = Edu::pluck('name', 'id');

        return view(
            'users.riwayat_pendidikan.edit',
            compact('educationalBackground', 'users', 'edus')
        );
    }

    /**
     * @param \App\Http\Requests\EducationalBackgroundUpdateRequest $request
     * @param \App\Models\EducationalBackground $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function update(
        EducationalBackgroundUpdateRequest $request,
        EducationalBackground $educationalBackground
    ) {
        $this->authorize('update', $educationalBackground);

        $validated = $request->validated();

        $educationalBackground->update($validated);

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\EducationalBackground $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        EducationalBackground $educationalBackground
    ) {
        $this->authorize('delete', $educationalBackground);

        $educationalBackground->delete();

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.removed'));
    }
}
