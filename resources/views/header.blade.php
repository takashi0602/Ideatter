<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>

  <body>
  <!-- todo やる気があれば通知欄のページリンクを作成 
    <div class = "header"; style = "height: 80px; padding: 20px 0px 0px 50px; font-size: 60px;  display: inline; list-style-type: none;">
        <div style = "float: left;">
            <li>ホーム</li>
          <li><a href="http://192.168.10.10/mention">通知</a></li>
        </div>
    </div>
    -->
    <ul class="nav">
         <li class="nav-item">
            <a class="nav-link active" href="#" style ="font-size: 60px">
            <i class="fas fa-home"></i>HOME</a>
        </li>
        <li>
            <div class= "ber" style = "font-size: 60px; ">|</div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="192.168.10.10/mention"style ="font-size: 60px">
            <i class="far fa-bell"></i>Mention</a>
        </li>
        <li>
            <div class= "ber" style = "font-size: 60px;">|</div>
        </li>
        <li>
            <a class="nav-link" href="#"style ="font-size: 60px">
            <i class="far fa-envelope"></i>Messages</a>
        </li>
        
    </ul>

  </body>
</html>