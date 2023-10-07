<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Usuario::all();
        return response()->json(['users' => $user]);
    }
}
