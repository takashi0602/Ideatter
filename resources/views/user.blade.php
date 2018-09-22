<div>
  @foreach($user as $u)
    <img src="{{ $u->thumbnail }}">
    <div class = "d-inline-block">{{ $u->name }}</div>
  @endforeach
</div>
