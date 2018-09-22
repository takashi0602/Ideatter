<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use App\Reply;
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
    $tweets = Tweet::select('*')->orderBy('id', 'desc')->get();
    $replies = Reply::select('*')->orderBy('id', 'desc')->get();
    $users = User::select('id', 'name', 'thumbnail')->get();
    $user_count = User::select('id')->count();
    $reply_count = Reply::select('id')->count();

    return view('timeline', [
      'tweets' => $tweets,
      'replies' => $replies,
      'users' => $users,
      'user_count' => $user_count,
      'reply_count' => $reply_count
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

  public function reply(Request $request)
  {
    Reply::create([
      'user_id' => Auth::user()->id,
      'tweet_id' => $request->reply_id,
      'description' => $request->reply_description
    ]);

    return redirect('/timeline');
  }
}
