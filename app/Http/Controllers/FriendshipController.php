<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $friends = Auth::user()->friends();
        return Inertia::render('Friends/Index', compact('friends'));
    }

    public function friendRequests()
    {
        $friendRequests = Auth::user()->friendRequests();
        return Inertia::render('Friends/FriendRequests', compact('friendRequests'));
    }
}
