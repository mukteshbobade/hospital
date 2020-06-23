 <?php
$user='root';
$host='localhost';
$pass='';
$db='hospitaldb';





$con= new mysqli($host,$user,$pass,$db);


 
$bd = mysqli_connect($host,$user, $pass) or die("Could not connect database");
mysqli_select_db($bd, $db) or die("Could not select database");


?>
