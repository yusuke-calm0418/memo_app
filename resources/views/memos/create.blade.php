<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>新規登録</h1>
    <form action="{{ route('memos.store') }}" method="post">
        <p>
        @csrf
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>
