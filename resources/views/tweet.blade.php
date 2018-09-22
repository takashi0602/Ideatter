@extends('layouts.app')

@section('content')
<form action="{{ url('tweet/create') }}" method="POST">
  {{ csrf_field() }}
  <label class="title">タイトル</label><br>
  <input class="waku form-control mb-5" type="text" name="tweet_title" maxlength="30" value="" placeholder="30字以内で入力">
  <label class="title">内容</label>
  <textarea class="waku form-control mb-5" name="tweet_description" rows="10"></textarea>
  <div class="text-right">
    <button class="btn btn-primary px-4" style="border-radius: 10px" type="submit">Tweet</button>
  </div>
</form>
@endsection

