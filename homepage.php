<?php
session_start();
?>

<!doctype html>
	<html>
	<head >
		<meta charset="utf-8">
		<title>home page</title>

	</head>
	<body>
		<h1>Welcome,<?php echo isset($_SESSION['uname']) ? $_SESSION['uname']: "asif" ?></h1>
		<p><a href="logout.php">Logout</a></p>
	
	</body>
</html>