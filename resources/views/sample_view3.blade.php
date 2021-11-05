<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sample_view3</title>
</head>
<body>
	<h1>sample_view3.blade.php</h1>
	<p>Hello view template!!</p>
	<p>This is called from SampleViewController.</p>
	<p><?php echo $id ?></p>
	<p><?php echo $name ?></p>


	<div>
		<form method='GET'>
			<label><p>id</p><input type='text' name='id' value='<?php echo($id); ?>'></label>
			<label><p>name</p><input type='text' name='name' value='<?php echo($name); ?>'></label>
			<div><input type='submit' value='Send'></div>
		</form>
	</div>
</body>
</html>
