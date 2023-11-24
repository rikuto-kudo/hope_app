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
            <li><a href="login.html">ログイン</a></li> 
        </ul>
      </nav>
    </header>

    <div class="search-bg">
        <h1 class="hosname">病院検索</h1>
        <form class="form" action="{{ route('hospital.submit') }}" method="get">
            <div class="form-area">
                <div class="form-prefectures">
                    <p>都道府県</p>
                    <select name="prefectures">
                        <!--<option value="none">指定しない</option>
                        <option value="gunma_ken">群馬県</option>
                        <option value="saitama_ken">埼玉県</option>
                        <option value="kanagawa_ken">神奈川県</option>
                        <option value="tokyo_to">東京都</option>-->
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-municipalities">
                    <p>市町村</p>
                    <select name="municipalities">
                        <option value="none">指定しない</option>
                        <option value="isesaki_shi">伊勢崎市</option>
                        <option value="kawaguchi_shi">川口市</option>
                        <option value="sagamihara_shi">相模原市</option>
                        <option value="kawaguchi_ku">北区</option>
                    </select>
                </div>
            </div>

            <div class="key-botton">
                <input type="text" class="form-key" name="keyword" placeholder="検索キーワードを入力">
                <input type="submit" class="search-botton" value="検索">
            </div>
        </form>
        
        <h2>検索結果</h2>
        @foreach($hospitals as $hospital)
            {{ $hospital->name }}
        @endforeach
    </div>
  </body>
</html>