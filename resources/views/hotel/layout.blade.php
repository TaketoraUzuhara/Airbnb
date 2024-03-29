<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hotels</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler btn btn-default" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="navbarNav1">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">旅行</a> <!-- 予約履歴とこれまでの履歴 -->
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">チャット</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">お気に入り</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">招待</a> <!-- 他のユーザーの招待 -->
            </li>
          </div>
        </div>

        <div claa="input-group">
        <form class="form-inline">
          <input class="form-control" type="serch" placeholder="「横浜」などエリアを入力" aria-label="「横浜」などエリアを入力">
           <span class="input">
            <button type="submit" class="btn-outlinepsuccess">Serch</button>
          </span>
        </form>
      </nav>
    </header>
    <body>
      <img src="#">/* hotels_imagesからurlを取得 */
      <h1 class="name">/* hotelsからnameを取得 */</h1>
      <div class="host">/* host_idに紐づくhostを取得　*/</div>
      <div class="place">/* hotelsからplaceを取得 */</div>
      /* 地図を表示する */
      <div class="reviews">/* host_idに紐づくreviewを取得　*/</div>
    </body>
    <header>

    </header>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
