<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
    <!-- 投稿ボタン -->
    <a href="{{ url('/tweet') }}" class="btn btn-outline-secondary mb-3" style= "font-size: 40px;  padding: 0 100px;">投稿</a>
    @foreach($tweets as $tweet)
      <div class="mb-3 border">
        <div class="timeline_user" >
          @for($i = 0; $i < $user_count; $i++)
            @if ($tweet->user_id == $users[$i]->id)
              <img src="{{ $users[$i]->thumbnail }}" style="width: 50px; height: 50px; border-radius: 50%">
              <div class="d-inline-block">{{ $users[$i]->name }}</div>
            @endif
          @endfor
        </div>
        <p style="word-wrap: break-word;"><a class="btn border-0 w-100 text-left d-block" style="background-color: #f8fafc; height: 100px;" data-toggle="modal" data-target="#exampleModalCenter_{{$tweet->id}}">{{ $tweet->title }}</a></p>
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
                    <div class="mb-5">{{ $tweet->description }}</div>
                    <small>Replying to {{ $users[$i]->name }}</small>
                    @endif
                  @endfor
                  <form action="{{ url('timeline/reply') }}" method="POST">
                    {{ csrf_field() }}
                    <div>
                      <textarea class="form-control mb-2" name="reply_description" rows="5"></textarea>
                      <input type="hidden" name="reply_id" value="{{ $tweet->id }}">
                    </div>
                    <button type="submit" class="btn btn-primary">返信</button>
                  </form>
                  {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>--}}
                </div>
                <!-- todo ここに返信先実装する -->
                @for($i = 0; $i < $reply_count; $i++)
                  @if($tweet->id == $replies[$i]->tweet_id)
                    <div class="modal-body">
                      <img src="{{ $users[$replies[$i]->user_id - 1]->thumbnail }}" class="mb-3" style="width: 50px; height: 50px; border-radius: 50%">
                      <div class="d-inline-block">{{ $users[$replies[$i]->user_id - 1]->name }}</div>
                      <div class="border mx-4" style="height: 100px; overflow: scroll;">{{ $replies[$i]->description }}</div>
                    </div>
                  @endif
                @endfor
              </div>
          </div>
        </div>
      @endforeach
  </body>
</html>