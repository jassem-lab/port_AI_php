<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majdoub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}

	
	$id = $_GET['ID'];
	
	$sql = "delete from portfolio where id=".$id;
	$requete = mysqli_query($conn,$sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../realisations.php"</SCRIPT>';
  
?>