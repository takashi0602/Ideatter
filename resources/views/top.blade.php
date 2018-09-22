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
      <div class="text-center" style="position: relative; top: 150px;">
        <div class = "bigtitle" style ="font-size: 200px;">
          Ideatter
          <img src="{{ asset('images/froglogo.png') }}" style="width: 150px; border-radius: 50%;">
        </div>
        <div>
          <a href="{{ url('/register') }}" class="btn btn-secondary btn-lg mr-5">
            Sign Up
          </a>
          <a href="{{ url('/login') }}" class="btn btn-primary btn-lg">
            Sign In
          </a>
        </div>
      </div>
    </body>
</html>