<h1>/middleware_sample</h1>
<h2>middleware call relay</h2>
<ol>
{{-- コントローラから渡された$call_relayを列挙する --}}

@foreach($call_relay as $str)
    <li>{{$str}}
@endforeach
