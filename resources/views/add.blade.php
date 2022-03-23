<h1>add new address</h1>

@php

@endphp

@if($errors)
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                <span style="color: red;">{{$error}}</span>
            </li>
        @endforeach
    </ul>
@endif

<form action="" method="POST">
    @csrf
    <div>
        <input type="text" name="first_name" placeholder="first_name" value="{{ old('first_name') }}">
    </div>
    <div>
        <input type="text" name="last_name" placeholder="last_name" value="{{ old('last_name') }}">
    </div>
    <div>
        <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
    </div>
    <input type="submit" value="送信">
</form>
