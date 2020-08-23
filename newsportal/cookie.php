<!DOCTYPE html>
<html>
<head>
	<title> set the cookie</title>
</head>
<body>
<?php 
		$cookie_name ='username';
		$cookie_value='xyz';

		setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
		if (!isset($_COOKIE[$cookie_name])) 
		{
			# code...
			echo "cookieName"".$cookie_name." "is not set!";
		}
		else
		{
				echo "cookieName"".$cookie_name." "is set!<br>";
				echo "Value is:".$_COOKIE[$cookie_name];
		}

 ?>
</body>
</html>