<!doctype html>
<html lang="ja">
<head>
  <title>Index</title>
  <link href="{{mix('css/app.css') }}"
  rel="stylesheet" type="text/css">
  <meta name="csrf-token" content="{{ csrf_token()  }}">
</head>

<body style="padding:10px;">
<div>
  <form action="/search" method="GET">
    <input type="text" name="keyword" >
    <input type="submit" value="検索" >

  </form>
</div>
  <h1>Hello/Index</h1>


  <table class="table table-striped table-dark mt-5">
    <tr>
      <th>タイトル</th>
      <th>いいね数</th>
      <th>コメント数</th>
      <th>作成日</th>
    </tr>
    @foreach($data as $item)
      <tr>
        <td>{{$item['title']}}</td>
        <td>{{$item['likes_count']}}</td>
        <td>{{$item['comments_count']}}</td>
        <td>{{$item['created_at']}}</td>
      </tr>
    @endforeach
  </table>
 {{$headers['Link'][0]}}
</body>
</html>
