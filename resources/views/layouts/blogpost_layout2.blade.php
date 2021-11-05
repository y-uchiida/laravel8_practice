{{-- blogpost_layout2.blade.php --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<body>
    <h1>@yield('page_title')</h1>
    <section>
        @yield('article_header')
        <article>
            @yield('content')
        </article>
    </section>
    <section>
        <h2>article list</h2>
        @yield('article_list')
    </section>
</body>
</html>
