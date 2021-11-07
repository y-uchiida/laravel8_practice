<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validation_sample</title>
    <style type="text/css">
        span.error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>validation_sample</h1>
    <p>{{ $msg }}</p>
    @if (count($errors) > 0)
        <div class="error_list">
            <ul>
                {{-- エラー内容を配列として取得し、foreachで列挙する --}}
                @foreach ($errors->all() as $error)
                    <li> <span class="error">{{ $error }}</span>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="POST">
        @csrf
        <div class="input_item">
            <label for="name">
                <span>お名前</span>
                {{-- @if ($errors->has('項目名')) でエラーがあるかを判定 --}}
                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @endif
                <div>
                    <input id="name" name="name" value="{{ old('name') }}">
                </div>
            </label>
        </div>

        <div class="input_item">
            <label for="mail">
                <span>メールアドレス</span>
                {{-- @if ($errors->has('項目名')) でエラーがあるかを判定 --}}
                @if ($errors->has('mail'))
                    <span class="error">{{ $errors->first('mail') }}</span>
                @endif
                <div>
                    <input id="mail" name="mail" value="{{ old('mail') }}">
                </div>
            </label>
        </div>

        <div class="input_item">
            <label for="age">
                <span>年齢</span>
                {{--
                    @error ディレクティブでは、
                    エラーがあった時に$messsageでその内容を
                    $message で取得できる
                --}}
                @error('age')
                    <span class="error">{{ $message }}</span>
                @enderror
                <div>
                    <input id="age" name="age" value="{{ old('age') }}">
                </div>
            </label>
        </div>
        <input type="submit" value="send">
    </form>
</body>
</html>
