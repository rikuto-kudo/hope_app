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

    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script src="{{ asset('js/areaCities.js') }}"></script>
    <script src="{{ asset('js/results.js') }}"></script>
  </head>
  <body class="bg">
    <header class="page-header">
        
      <nav class="nav-all">
        <ul class="nav-menu">
            <li><a href="{{ url('/getAreas') }}">検索</a></li>
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

    <div class="search-bg">
        <h1 class="hospital-name">病院検索</h1>
        <form id="searchForm" action="{{ route('resultHospitals') }}" method="get">
            @csrf
            <div class="form-areas-municipalities">
                <div class="form-areas">
                    <label class="label-name" for="area">エリア</label>
                    <select id="areas" name="area">
                        <option id = Kanto-region value="">未選択</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>
   
                <div class="form-municipalities">
                    <label class="label-name" for="city_town_village">市町村</label>
                    <select id="city_town_village" name="city_town_village"></select>
                </div>
            </div>
            
            <div class="btn ">
                <button type="button" id="search-btn">検索</button>
            </div>
        </form>
    </div>

    <div id="searchResult">
            
    </div>

   
  </body>
</html>