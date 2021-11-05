<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blade_sample3</title>
</head>
<body>
    @php
        /* @php でphpの処理を記述できます */
        $num=0;
        $langs = ["PHP", "Python", "Java", "JavaScript", "C lang"];
    @endphp
	<h1>blade_sample3.blade.php</h1>
	<h2>＠for directive</h2>
    @for ($i=0; $i<5; $i++)
        <p>$i = {{ $i }}</p>
    @endfor
    <h2>＠forelse</h2>
    <ol>
    @forelse ($langs as $lang)
        <li>{{ $lang }}</li>
    @empty
        <p>no items</p>
    @endforelse
    </ol>
    <h2>＠while</h2>
    @while ($num++ < 100)
        @if ($num % 2 === 0)
            @continue
        @endif
        {{ $num }}
        @if ($num >= 20)
            @break
        @endif
    @endwhile
</body>
</html>
