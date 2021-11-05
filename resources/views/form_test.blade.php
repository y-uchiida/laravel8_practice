<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form_test</title>
</head>
<body>
	<h1>form_test.blade.php</h1>
	<h2>GET method form</h2>
    <form action="" method="get">
        <input type="text" name="name" value="">
        <input type="submit" value="send">
    </form>

    <h2>POST method form</h2>
    <form action="" method="post">
        {{--
            POSTメソッドでのフォーム送信は、@csrfディレクティブで
            csrfトークンを付与しておかないとエラーになる
        --}}
        @csrf
        <input type="text" name="name" value="">
        <input type="submit" value="send">
    </form>
</body>
</html>
