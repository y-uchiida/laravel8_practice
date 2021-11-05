<!-- blogpost_layout.blade.php -->
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
        <h2>@yield('article_title')</h2>
        @yield('post_date')
        <article>
            @yield('content')
        </article>
    </section>
</body>
</html>
