<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        $users = User::search($query)->get();

        return response()->json($users);
    }
}
