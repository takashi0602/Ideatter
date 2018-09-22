<!DOCTYPE hmtl>
<html>
    <head>
            <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
      <label class="title">タイトル</label><br>       
        <input class="waku" type="text" name="title" maxlength="30" value="" placeholder="30字以内で入力">
  
    <div><label class="title">内容</label></div>
    <div><textarea class="waku"></textarea></div>

    </body>
    <style>
    .waku{
     border-radius: 10px;
     border: solid 3px #6091d3;
     background: #FFF;
    }
    .title{
     font-weight: bold;
     font-size: 20;
    }
    </style>
</html>

