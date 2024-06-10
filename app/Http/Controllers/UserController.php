<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|integer',
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'User role updated successfully.');
    }
}
