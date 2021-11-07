<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie_sample1</title>
</head>
<body>
    <h1>cookie_sample1</h1>
    <p>保存されたCookieの値: {{ $cookie_string }}</p>
    <form action="" method="POST">
        @csrf
        <div>
            <input name="cookie_string" value="{{ $cookie_string }}">
            <button type="submit" name="send" value="send">送信</button>
        </div>
        <button type="submit" name="delete" value="delete">削除</button>
    </form>
</body>
</html>
