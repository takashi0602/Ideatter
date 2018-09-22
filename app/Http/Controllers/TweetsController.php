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
    dd($tweets);
    return view('timeline', [
      'tweets' => $tweets
    ]);
  }

  public function tweet()
  {
    return view('tweet');
  }

  public function create(Request $request)
  {
    Tweet::create([
      'user_id' => Auth::user()->id,
      'title' => $request->tweet_title,
      'description' => $request->tweet_description
    ]);

    return redirect('/timeline');
  }
}
