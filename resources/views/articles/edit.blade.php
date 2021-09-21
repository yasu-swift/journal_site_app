<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>投稿論文編集</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>論文タイトル</p>
        <p>
            <label for="title"><input type="text" name="title" value="{{ $article->title }}"></label>
        </p>
        <p>本文</p>
        <p>
            <textarea name="body" id="" cols="30" rows="10">{{ $article->body }}</textarea>
        </p>
        <input type="submit" value="編集">
    </form>

</body>

</html>
