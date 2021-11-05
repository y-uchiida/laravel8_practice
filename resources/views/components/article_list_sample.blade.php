{{-- article_list.blade.php --}}
{{-- 記事一覧の繰り返し部分をコンポーネントとして切り出し --}}
{{-- @each() で記事の件数分だけ繰り返し読込する --}}
<li>
    <a href='./{{ $article['id'] }}' title='{{ $article['title'] }}'>
        {{ $article['title'] }}
    </a>
    ({{ $article['date'] }})
</li>
