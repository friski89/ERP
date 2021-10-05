<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MyProfileUpdateRequest;

class MyProfileController extends Controller
{
    public function index()
    {
        return view('users/profile/index');
    }

    public function update(MyProfileUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $profile = [];
        $validated = $request->validated();
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'avatar' => 'nullable|file',
        ]);
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }

            $profile['avatar'] = $request->file('avatar')->store('/', 'avatars');
        }
        $profile['email'] = $request->email;
        $user->profile()->update($validated);
        $user->update($profile);
        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.saved'));
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()
            ->route('profile')
            ->withSuccess(__('crud.common.saved'));
    }
}
