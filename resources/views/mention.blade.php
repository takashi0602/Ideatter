<!DOCTYPE html>
<html>
  <head>
   <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
  <h1 class="title">通知</h1>
  <br>
  <br>
  <hr style="size:20"; color="#6091d3"; border-width="thick">
  <img src="http://placehold.it/200" style="width: 100px; height: 100px; border-radius: 50%">
  <p class="bun d-inline-block">中村（めがね）さんからリプライがきました</p>
  <hr size="20" color="#EEEEEE">
  <div class="ripu">そのアイデアおもしろそうだと思いました。ぜひ一緒に開発しませんか？</div>
  <hr size="20" color="#111111">
  <br>
  <img src="http://placehold.it/200" style="width: 100px; height: 100px; border-radius: 50%">
  <p class="bun d-inline-block">ピノ先輩さんからリプライがきました</p>
  <hr size="20" color="#EEEEEE">
  <div class="ripu">開発をしたことがないのですが、とてもいいアイデアだと思ったので開発に参加させてほしいです。よろしくお願いします！</div>
  <hr size="20" color="#111111">
  </body>
  <style>
  .title{
      text-align:center;
      
  }
  .bun{
      font-size: 150%;
      text-align:center;
  }
  .ripu{
      font-size: 110%;
      text-align:center;
      
  }
  samune{
      wight:100%;
      hight:200px;
      background:url('http://placehold.it/200')
  }

.samune{
      zoom: 1;
}

.samune:after{
      content: "";
      display: block;
      clear: both;
}

inner{
     float: right;
}
  </style>
</html>