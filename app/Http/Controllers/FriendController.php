<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Http\Controllers\Controller;

class FriendController extends Controller
{
    /**
     * Get all users.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $friends = Friend::all();

        return $friends;
    }
}