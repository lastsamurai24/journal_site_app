<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>

    
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button onclick='location.href="{{ route("articles.index") }}"'>一覧へ戻る</button>
    <button onclick='location.href="{{ route("articles.edit", $article) }}"'>編集する</button>

</body>

</html>
