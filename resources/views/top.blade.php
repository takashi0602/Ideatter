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

        <div class = "signbutton">
            <button type="button" class="btn btn-secondary btn-lg" style= "float: right; width: 300px; height:150px;">
                <div style = "font-size: 60px"> Sign Up</div>
            </button>
            <button type="button" class="btn btn-primary btn-lg" style= "float: right; width: 300px; height:150px;">
                <div style = "font-size: 60px"> Sign In</div>
            </button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class = "logo">
            <div class = "bigtitle" style ="font-size: 336px; text-align: center;">
                 Ideatter
            </div>
            <div class = "search" style = " text-align: center;">
                <li>
                    <input class="kensaku" type="search" name="search" style ="font-size: 60px; mergin: 0 0 0 10;"placeholder="タグ検索">
                    <input class="botan" type="submit" style ="font-size: 60px; mergin: 0 0 0 10;"name="search" value="検索">
                </li>
            </div>
            <div class = "frog" style = "float: right">
                <img src="{{ asset('images/froglogo.png') }}" style="width: 500px; height: 500px;">
            </div>
        </div>


        
    </body>
</html>