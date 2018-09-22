<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $tweets = Tweet::all();

    return view('timeline', [
      'tweets' => $tweets
    ]);
  }
}
