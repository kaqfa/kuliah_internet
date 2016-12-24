<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Display</title>
</head>
<body>
	<h1>whatever you display in admin page</h1>
	<h2><?php echo "current user:".$user['username']; ?></h2>
	<ul>
		<li><a href="admin.php?page=input_mhs">Input Mahasiswa</a></li>
		<li><a href="process.php?action=logout">Logout</a></li>
	</ul>
</body>
</html>