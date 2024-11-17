<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Find the specified resource.
     */
    public function search(Request $request): JsonResponse
    {
        $query = $request->input('query');

        $users = User::where('name', 'like', "%{$query}%")
            ->where('id', '!=', Auth::id())
            ->get();

        return response()->json($users);
    }
}
