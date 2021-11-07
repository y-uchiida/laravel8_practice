<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form_request_sample</title>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>/form_request_sample</h1>
    <h2>お問い合わせ</h2>
    <p>以下フォームからご連絡ください。</p>
    <form action="" method="POST">
        @csrf
        <div>
            <p>お名前</p>
            @error('name')
                <ul>
                @foreach($errors->get('name') as $msg)
                    <li class="error">{{ $msg }}</li>
                @endforeach
                </ul>
            @enderror
            <input name='name' value="{{ old('name') }}" >

            <p>ご連絡先(メールアドレス)</p>
            @error('email')
                <ul>
                @foreach($errors->get('email') as $msg)
                    <li class="error">{{ $msg }}</li>
                @endforeach
                </ul>
            @enderror
            <input name='email' value="{{ old('email') }}" >

            <p>お問い合わせ内容</p>
            @error('content')
                <ul>
                @foreach($errors->get('content') as $msg)
                    <li class="error">{{ $msg }}</li>
                @endforeach
                </ul>
            @enderror
            <textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        <input type="submit" value="send">
    </form>
</body>
</html>
