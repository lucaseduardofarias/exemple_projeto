<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAPIController extends Controller
{
    public function index()
    {
        return new UserCollection(User::paginate());
    }
 
    public function show(User $user)
    {
        return new UserResource($user->load([]));
    }

    public function store(Request $request)
    {
        return new UserResource(User::create($request->all()));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return response()->noContent();
    }
}
