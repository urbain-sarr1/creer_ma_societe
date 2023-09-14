<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;

class ProfileUsersController extends Controller
{
    public function index(Request $request, Profile $profile): UserCollection
    {
        $this->authorize('view', $profile);

        $search = $request->get('search', '');

        $users = $profile
            ->users()
            ->search($search)
            ->latest()
            ->paginate();

        return new UserCollection($users);
    }

    public function store(Request $request, Profile $profile): UserResource
    {
        $this->authorize('create', User::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = $profile->users()->create($validated);

        $user->syncRoles($request->roles);

        return new UserResource($user);
    }
}
