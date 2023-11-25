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

    <div class="search-bg">
        <h1 class="hosname">病院検索</h1>
        <form>
            <label for="area">エリア</label>
            <select id="area" name="area">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                @endforeach
            </select>
            
            <label for="city_town_village">市町村</label>
            <select id="city_town_village" name="city_town_village"></select>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#area').change(function () {
                var areaId = $(this).val();
    
                $.ajax({
                    url: '/getCityTownVillages',
                    type: 'GET',
                    data: { area: areaId },
                    success: function (data) {
                        var options = '<option value="">選択してください</option>';
                        for (var i = 0; i < data.city_town_villages.length; i++) {
                            options += '<option value="' + data.city_town_villages[i].id + '">' +
                                data.city_town_villages[i].name + '</option>';
                        }
                        $('#city_town_village').html(options);
                    }
                });
            });
        });
    </script>

  </body>
</html>