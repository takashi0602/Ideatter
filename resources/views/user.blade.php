<div>
  @foreach($user as $u)
    <div class="ml-5 text-center">
      <img src="{{ $u->thumbnail }}" class="mb-3" style="border-radius: 50%">
      <div class="" style="font-size: 20px">{{ $u->name }}</div>
    </div>
  @endforeach
</div>
