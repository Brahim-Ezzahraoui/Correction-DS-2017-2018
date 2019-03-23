<!DOCTYPE html>
<html>
<head>
	<title>Question---5---</title>
</head>
<body>
<?php
echo "<table border><tr><th>Nom</th><th>Prénom</th></tr>";
$conn=mysqli_connect('localhost','root','','DS2018');
$req="select Nom,Prenom from Etudiant";
$rslt=mysqli_query($conn, $req);
	while ($row=mysqli_fetch_assoc($rslt)) {
	echo"<tr><td>".$row['Nom']."</td><td>".$row['Prenom']."</td>";
}
	echo "</tr></table";	

?>
</body>
</html>