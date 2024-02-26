<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function index()
    {
        $users = User::all();

        return view('admin.users', [
            'users' => $users,
        ]);
    }

    public function update(Request $request, User $user)
    {
        if ($request->ajax()) {
            $validatedData = $request->validate([
                'is_active' => 'bool',
                'role' => 'exists:Spatie\Permission\Models\Role,name',
            ]);

            $user->update($validatedData);
            $user->syncRoles($validatedData['role']);

            return response()->json([
                'user_id' => $user->id,
                'is_active' => $user->is_active ? 'Enabled' : 'Disabled',
            ]);
        }
    }
}
