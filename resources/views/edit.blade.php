<h1>edit address</h1>

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

<form action="/address/update/{{ old('id', $address->id) }}" method="POST">
    @csrf
    <div>
        {{-- 値は、oldがあればそれを表示、なければDBに登録されている内容を表示 --}}
        <input type="text" name="first_name" placeholder="first_name" value="{{ old('first_name', $address->first_name) }}">
    </div>
    <div>
        <input type="text" name="last_name" placeholder="last_name" value="{{ old('last_name', $address->last_name) }}">
    </div>
    <div>
        <input type="text" name="email" placeholder="email" value="{{ old('email', $address->email) }}">
    </div>
    <input type="submit" value="更新する">
    <input type="hidden" name="id" value=" {{ old('id', $address->id) }} ">
</form>
