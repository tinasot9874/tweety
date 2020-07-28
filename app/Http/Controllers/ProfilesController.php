<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:100', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['image', 'dimensions:min_width=150'],
            'cover' => ['required', 'file'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:6', 'max:255', 'confirmed']
        ]);
        $attributes['avatar'] = request('avatar')->store('avatars');
        $attributes['cover'] = request('cover')->store('covers');
        $user->update($attributes);
        return redirect($user->path());
    }
}
