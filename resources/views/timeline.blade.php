@extends('layouts.timelinelayout')

@section('centercontent')
<!-- 投稿ボタン -->
<div class="mx-4">
  <div class="text-center">
    <a href="{{ url('/tweet') }}" class="btn btn-outline-secondary mb-3" style= "font-size: 40px;  padding: 0 100px;">投稿</a>
  </div>
  @foreach($tweets as $tweet)
    <div class="mb-3">
      <div class="timeline_user mb-1">
        @for($i = 0; $i < $user_count; $i++)
          @if ($tweet->user_id == $users[$i]->id)
            <img src="{{ $users[$i]->thumbnail }}" style="width: 50px; height: 50px; border-radius: 50%">
            <div class="d-inline-block">{{ $users[$i]->name }}</div>
            <small class="">{{ date('m月d日h時i分s秒',  strtotime($tweet->created_at)) }}</small>
          @endif
        @endfor
      </div>
    <a class="btn w-100 text-left border d-block" style="background-color: #f8fafc; height: 100px;" data-toggle="modal" data-target="#exampleModalCenter_{{$tweet->id}}">{{ $tweet->title }}</a>
  </div>
    <!-- 展開する本体部 -->
  <div class="modal fade" id="exampleModalCenter_{{$tweet->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">{{ $tweet->title }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              @for($i = 0; $i < $user_count; $i++)
                @if ($tweet->user_id == $users[$i]->id)
                <div class="mb-3 border" style="height: 150px;">{{ $tweet->description }}</div>
                <small>Replying to {{ $users[$i]->name }}</small>
                @endif
              @endfor
              <form action="{{ url('timeline/reply') }}" method="POST">
                {{ csrf_field() }}
                <div>
                  <textarea class="form-control mb-2" name="reply_description" rows="4"></textarea>
                  <input type="hidden" name="tweet_id" value="{{ $tweet->id }}">
                </div>
                <button type="submit" class="btn btn-primary">返信</button>
              </form>
            </div>
            @for($i = 0; $i < $reply_count; $i++)
              @if($tweet->id == $replies[$i]->tweet_id)
                <div class="modal-body mx-4 mb-4 p-0">
                  <div class="border-left px-4 mb-3">
                    <img src="{{ $users[$replies[$i]->user_id - 1]->thumbnail }}" class="mb-3" style="width: 50px; height: 50px; border-radius: 50%">
                    <div class="d-inline-block">{{ $users[$replies[$i]->user_id - 1]->name }}</div>
                    <small class="">{{ date('m月d日h時i分s秒',  strtotime($replies[$i]->created_at)) }}</small>
                    <div class="border mb-3" style="height: 100px; overflow: scroll; ">{{ $replies[$i]->description }}</div>
                    @for($j = 0; $j < $user_count; $j++)
                      @if ($replies[$i]->user_id == $users[$j]->id)
                        <small>Replying to {{ $users[$j]->name }}</small>
                      @endif
                    @endfor
                    <form action="{{ url('timeline/replyreplies') }}" method="POST">
                      {{ csrf_field() }}
                      <textarea class="form-control mb-2" name="replyreplies_description"></textarea>
                      <input type="hidden" name="reply_id" value="{{ $replies[$i]->id }}">
                      <button type="submit" class="btn btn-primary">返信</button>
                    </form>
                  </div>
                  @foreach($replyreplies as $replyreply)
                    @if($replies[$i]->id == $replyreply->reply_id)
                      <div class="mx-4 mb-3 px-4 border-left">
                        <img src="{{ $users[$replies[$i]->user_id - 1]->thumbnail }}" class="mb-3" style="width: 50px; height: 50px; border-radius: 50%">
                        <div class="d-inline-block">{{ $users[$replies[$i]->user_id - 1]->name }}</div>
                        <small class="">{{ date('m月d日h時i分s秒',  strtotime($replyreply->created_at)) }}</small>
                        <div class="border mb-3" style="height: 100px; overflow: scroll; ">{{ $replyreply->description }}</div>
                        @for($j = 0; $j < $user_count; $j++)
                          @if ($replyreply->user_id == $users[$j]->id)
                            <small>Replying to {{ $users[$j]->name }}</small>
                          @endif
                        @endfor
                        <form action="{{ url('timeline/replyreplies') }}" method="POST">
                          {{ csrf_field() }}
                          <textarea class="form-control mb-2" name="replyreplies_description"></textarea>
                          <input type="hidden" name="reply_id" value="{{ $replies[$i]->id }}">
                          <button type="submit" class="btn btn-primary">返信</button>
                        </form>
                      </div>
                    @endif
                  @endforeach
                </div>
              @endif
            @endfor
          </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
