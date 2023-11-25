<? php dd($areas) ?>
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
        <form class="form "action="">
            <div class="form-area">
                @dump($areas)
                <div class="form-prefectures">
                    <p>エリア</p>
                    <select name="prefecture" class="area">
                        <option hidden>都道府県</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}" class="select" data-pre-id={{ $area->id }}>
                                    {{ $area->name }}
                                </option>
                            @endforeach
                    </select>    
                </div>
            </div>
            
            {{-- Add this debug code --}}
            <!--@dump($city_town_villages)-->
            <!--<div class="form-municipalities">-->
            <!--    <p>市町村</p>-->
            <!--    <select class="city-area none"name="municipality">-->
            <!--        <option hidden>市町村</option>-->
            <!--        @foreach($city_town_villages as $city_town_village)-->
            <!--            <option class="none city" value="{{ $city_town_village->area_id }}" data-city-id={{ $city_town_village->city }}>-->
            <!--                {{ $city_town_village->name }}-->
            <!--            </option>-->
            <!--        @endforeach-->
            <!--    </select>-->
            <!--</div>-->
                
                
            
            <div class="key-botton">
                <input type="text" class="form-key" name="keyword" placeholder="検索キーワードを入力">
                <input type="submit" class="search-botton" value="検索">
            </div>
        </form>
    </div>
    
    <script>
    const area = document.querySelector('.area');
    const allCity = [...document.querySelectorAll('.city')];

    area.addEventListener('change', (e) => {
        const cityArea = document.querySelector('.city-area');
        console.log(cityArea);
        cityArea.classList.add('block');
        cityArea.classList.remove('none');

        const selectedPreId = e.target.value;

        for (let i = 0; i < allCity.length; i++) {
            if (selectedPreId === allCity[i].value) {
                allCity[i].classList.remove('none');
                allCity[i].classList.add('block');
            } else {
                allCity[i].classList.add('none');
                allCity[i].classList.remove('block');
            }
        }
    });
    </script>

  </body>
</html>