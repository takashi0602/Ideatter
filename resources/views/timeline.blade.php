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
    <button type="button" class="btn btn-outline-secondary" style= "font-size: 40px;  padding: 0 100px;">投稿</button>

    <!-- タイムラインの表示 -->
        <!-- 投稿者のサムネイルと名前 -->
        <div class="timeline_user" >
	        <div class="col-xs-6 col-md-3" >
		        <a href="http://bootstrap3.cyberlab.info/img/sample-256x256.png" class="thumbnail">
			    <img src="http://bootstrap3.cyberlab.info/img/sample-256x256.png" style="width: 110px; height: 110px;">
		        </a>
	        </div>
	        <div style =" margin-left: 20px; width: 110px; height 80px; text-align: justify;">
            ユーザ名
            </div>
        </div>



        <!-- 展開するためのボタン部 -->
        <!-- todo ここに投稿タイトルを埋める -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            投稿タイトルhogefuga
        </button>

        <!-- 展開する本体部 -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">//todo ここも投稿タイトル埋める</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- todo ここに本文を埋める -->
            <div class="modal-body">
                投稿本文hogefuga
                 <!-- todo ここに返信先実装する -->
                <button type="button" class="btn btn-primary">返信</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
            <div class="modal-body">
                投稿本文hogefuga
            </div>
            <div class="modal-footer" style="justify-content: flex-start">
                
                
               
 
            </div>
            </div>
        </div>
        </div>    


  </body>
</html>