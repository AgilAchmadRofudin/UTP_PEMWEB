<?php session_start();
if (isset($_POST['login'])){
	include ("koneksi.php");
	$username=htmlentities((trim($_POST['username'])));
	$password=htmlentities(trim($_POST['password']));
	
	$login=mysql_qurey("SELECT * FROM login WHERE username='$username' and password='$password'");
	$cek_login=mysql_num_rows($login);
	if (empty($cek_login)){
		echo"<script> document.location.href='index.php?status=LOGIN GAGAL'; </script>";
	} else {
	
		while ($row=mysql_fetch_array($login))
		{
			$id_admin=$row['id_admin'];
			$_SESSION['id_admin']=$id_admin;
			$_SESSION['username']=$username;
		}
		echo "<script>document.location.href='index.php';</script>";
		
	}
} else {
	unset($_POST['login']);
}
?>

<html>
	<head><title>LOGIN</title></head>
	<body>
		<form action="index.php" name="postform" method="POST">
		<table border="1">
			<tr bgcolor="#00bfff">
				<td colspan="2"><b><font color="" size="5"><center><i class="icon-login"></i>LOGIN</font></td>
			</tr>
			<tr bgcolor="#D3D3D3">
				<td width="120"><b>Username</td>
				<td><input name="username" type="text" size="40" style="margin:1px;"></td>
			</tr>
			<tr bgcolor="#D3D3D3">
				<td width="120"><b>Password</td>
				<td><input name="password" type="password" size="40" style="margin:1px;"></td>
			</tr>
			<tr>
				<td colspan="2" bgcolor="#00bfff"><center>
					<button type="submit" name="login" class="btn blue">Login</button>
					<button type="reset" name="reset" class="btn blue">Batal
					</button></td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#00bfff"><?php if (isset($_GET['status'])) {echo $_GET['status']; }?> </td>
					</tr>
			</table></form>
	
	
	</body>
</html>