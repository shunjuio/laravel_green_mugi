<!doctype html>
<html lang="ja">
<head>
  <title>Index</title>
  <link href="{{mix('css/app.css') }}"
        rel="stylesheet" type="text/css">
  <meta name="csrf-token" content="{{ csrf_token()  }}">
</head>
<body style="padding:10px;">
<h1>Hello/Search</h1>
<div>
  <form action="qiita/search" method="GET">
    <input type="text" name="q" >
    <input type="submit" value="検索" >

  </form>
</div>

<h2>検索ワード：{{$query}}</h2>
<h3>{{$headers['Total-Count'][0]}} 件</h3>

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
</body>
</html>
