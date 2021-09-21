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
    <h1>新規論文投稿</h1>
    <form action="/articles" method="post">
        @csrf
        <p>論文タイトル</p>
        <p>
            <label for="title"><input type="text" name="title" value="{{ old('title') }}"></label>
        </p>
        <p>本文</p>
        <p>
            <label for="body"><textarea name="body" value="{{ old('body') }}"></textarea></label>
        </p>
        <input type="submit" value="投稿">
    </form>
</body>

</html>
