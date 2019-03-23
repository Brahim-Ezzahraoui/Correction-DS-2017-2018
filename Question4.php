<!DOCTYPE html>
<html>
<head>
	<title>Question---4---</title>
</head>
<body>
<form method="post" action="">
	<table>
	<th>Login : </th>
			<td><input type="text" name="l" required></td>
		</tr>
		<tr>
			<th>Mot de Passe : </th>
			<td><input type="password" name="pss" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="sb" value="Enregister"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['sb'])) {
$conn=mysqli_connect('localhost','root','','DS2018');
$req="select * from Etudiant where Login='".$_POST['l']."' and Password = '".$_POST['pss']."'";
$rslt=mysqli_query($conn, $req);
$row=mysqli_fetch_array($rslt);
if ($row[3] == $_POST['l'] && $row[4] == $_POST['pss']){
	$ann=$row[5];
	header("location:annee".$ann.".php");
	}else{
		echo "Error 404";
	}
}
?>
</body>
</html>