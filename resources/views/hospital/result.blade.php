<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>search</title>
    <meta name="description" content="ペットと病院を繋ぐアプリ">

    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="bg">
    <header class="page-header">
      <nav class="nav-all">
        <ul class="nav-menu">
            <li><a href="{{ url('/search') }}">検索</a></li>
            <li><a href="message.html">メッセージ</a></li>
            <li><a href="request.html">診療申請</a></li>
            <li><a href="bookmark.html">ブックマーク</a></li>
            <li><a href="community.html">コミュニティ</a></li>   
        </ul>

        <ul class="nav-information">
            <li><a href="profile.html">プロフィール</a></li>
            <li><a href="{{ url('/login') }}">ログイン</a></li> 
        </ul>
      </nav>
    </header>
    
    <div class="searchResult">
        <h2>検索結果</h2>
        @foreach ($hospitals as $hospital)
            <p>{{ $hospital->name }}</p>
            <p>{{ $hospital->address }}</p>
            <p>{{ $hospital->phone_number }}</p>
            <p>{{ $hospital->field }}</p>
            <hr>
        @endforeach
    </div>
  </body>
</html>