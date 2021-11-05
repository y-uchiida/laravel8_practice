{{-- blogpost_4.blade.php --}}
@extends('layouts.blogpost_layout2')

{{-- 継承元のyield('article_header') に、コンポーネントを組み込む --}}
@section('article_header')
    @component('components.article_header_sample')
        @slot('article_title', 'Sed ut perspiciatis unde omnis')
        @slot('post_date', '2021/01/04')
    @endcomponent
    {{-- 変数に値を入れるだけのコンポーネントなら、@includeの方がシンプル --}}
    {{--
    @include('components.article_header', [
        'article_title' => 'Sed ut perspiciatis unde omnis',
        'post_date' => '2021/01/04'
    ])
    --}}
@endsection

@section('page_title', 'blog post page')
@section('article_title', 'Sed ut perspiciatis unde omnis')
@section('post_date', '2021/01/03')
@section('content')
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
<p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
<p>et quasi architecto beatae vitae dicta sunt explicabo.</p>
@endsection

@section('article_list')
    <ul>
        @each('components.article_list_sample',
        [
            ['id' => '1', 'date' => '2021/01/01', 'title' => 'Features of Laravel Framework'],
            ['id' => '2', 'date' => '2021/01/02', 'title' => 'Quick brown fox'],
            ['id' => '3', 'date' => '2021/01/03', 'title' => 'Lorem ipsum dolor sit amet'],
            ['id' => '4', 'date' => '2021/01/04', 'title' => 'Sed ut perspiciatis unde omnis'],
        ],
        'article')
    </ul>
@endsection
