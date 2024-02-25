<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id, $name)
    {
        return view('user')
            ->with('user_id', $id)
            ->with('name', $name);
    }
}
