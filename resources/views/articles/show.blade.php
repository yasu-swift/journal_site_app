<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>
        <b>{{ $article->title }}</b>
    </p>
    <p>
        <b>{{ $article->body }}</b>
    </p>
    <!-- 新規登録画面へジャンプする -->
    <input type="button" onclick="location.href='/articles'" value="一覧へ戻る">
</body>
</html>