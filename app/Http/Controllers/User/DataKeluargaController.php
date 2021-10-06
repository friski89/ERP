<?php

namespace App\Http\Controllers\User;

use App\Models\Edu;
use App\Models\User;
use App\Models\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FamilyStoreRequest;
use App\Http\Requests\FamilyUpdateRequest;

class DataKeluargaController extends Controller
{
    public function index()
    {
        $edus = Edu::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('users.data_keluarga.create', compact('edus', 'users'));
    }

    public function store(FamilyStoreRequest $request)
    {
        $this->authorize('create', Family::class);

        $validated = $request->validated();

        $family = Family::create($validated);

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.created'));
    }


    public function edit(Request $request, Family $family)
    {
        $this->authorize('update', $family);

        $edus = Edu::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('users.data_keluarga.edit', compact('family', 'edus', 'users'));
    }

    public function update(FamilyUpdateRequest $request, Family $family)
    {
        $this->authorize('update', $family);

        $validated = $request->validated();

        $family->update($validated);

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Family $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Family $family)
    {
        $this->authorize('delete', $family);

        $family->delete();

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.removed'));
    }
}
