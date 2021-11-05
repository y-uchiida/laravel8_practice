<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blade_sample2</title>
</head>
<body>
    <?php
        /* bladeテンプレートにPHPを直接書くのは、良いやり方ではないです
         * サンプルとしてわかりやすくするためにあえて記載しています
         */
        $condition_1 = true;
        $condition_2 = false;
        $empty = [];
    ?>
	<h1>blade_sample2.blade.php</h1>
	<h2>＠if directive</h2>
    @if ($condition_1)
        <p>this is true</p>
    @else
        <p>this is false</p>
    @endif
    <h2>＠empty directive</h2>
    @empty($empty)
        this is empty
    @endempty
</body>
</html>
