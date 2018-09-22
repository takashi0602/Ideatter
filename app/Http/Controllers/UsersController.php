<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
    $user = User::where('id', Auth::user()->id)->get();

    return view('user', [
      'user' => $user,
    ]);
  }
}
