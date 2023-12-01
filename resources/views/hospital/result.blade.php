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
    <div class="searchResult">
        <h2>検索結果</h2>
        @if (isset($message))
          <p>{{ $message }}</p>
        @else
            <div id="resultBg">
                @foreach ($hospitals as $index => $hospital)
                  <div class="resultItem resultItem{{ $index + 1 }}">
                    <p id="mainSize">{{ $hospital->name }}</p>
                    <p class="subSize">{{ $hospital->field }}</p>
                    <div id="othersSize">
                      <p>{{ $hospital->address }}</p>
                      <p>{{ $hospital->phone_number }}</p>
                      <p><a href="{{ $hospital->url }}" target="_blank">病院のホームページ</a></p>
                    </div>
                    
                    <hr>
                  </div>
                @endforeach
            </div>
        @endif
    </div>
    
    <!--<div class="pagination">-->
    <!--  {{ $hospitals->links() }}-->
    <!--</div>-->
  </body>
</html>