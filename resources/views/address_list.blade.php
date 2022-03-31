<h1>address list</h1>

{{-- 検索用のフォーム --}}
<form action="" method="get">
    <div>
        <label for="email">メールアドレス</label>
        <input id="email" type="text" name="email" value="{{$request->input('email')}}">
    </div>
    <input type="submit" value="検索">
</form>

<ul>
    @foreach($addresses as $address)
        <li>
            {{ $address->first_name }} {{$address->last_name}} ({{$address->email}})
            <a href="/address/edit/{{$address->id}}"> 編集 </a>
            <form style="display: inline" action="/address/delete/{{$address->id}}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit">削除する</button>
                <input type="hidden" name="id" value="{{$address->id}}">
            </form>
        </li>
    @endforeach
</ul>

<div>
    <a href="/address/add">新規追加</a>
</div>
