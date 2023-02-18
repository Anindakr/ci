<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>
<form method="post"> 
	Enter email: <input type="email" name="email"><br>
	Enter Password: <input type="password" name="password"><br>
	<input type="submit" name="submit" value="submit">
	<a href="<?php echo base_url().'index.php/Hello/savedata'?>">NEW USER?</a>
</form>
</body>
</html>