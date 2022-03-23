<h1>address list</h1>
<ul>
    @foreach($addresses as $address)
        <li> {{ $address->first_name }} {{$address->last_name}} ({{$address->email}})</li>
    @endforeach
</ul>

<div>
    <a href="/address/add">新規追加</a>
</div>
