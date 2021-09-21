<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文詳細</h1>
    <p>{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <div class="button">
        <!-- 一覧へ戻る -->
        <input type="button" onclick="location.href='/articles'" value="一覧へ戻る">

        <!-- 論文のidを元に編集ページへ遷移する -->
        <input type="button" value="編集" onclick="location.href='/articles/{{ $article->id }}/edit'">

        <!-- 削除ボタン -->
        <form action="/articles/{{ $article->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('{{ $article->title }}を本当に削除しますか？')){return false}">
        </form>
    </div>
</body>

</html>
