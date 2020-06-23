<doctype html>


<html>
<title>Employee</title>
<header>


	<a class="active" href="hospital.html">HOME</a>

</header>
<style>

    body
	{
	   background-image:url('h.jpeg');
	   background-repeat:no-repeat;
	   background-size:1400px 800px;
	   }

 table{
     
	  border:solid 
	 
	 }

</style>


<body    align="center">


<br><br><br><br>

<table  border="1" align="center"  style="background-color:white";>
<form name="emp.php" method="post">
 
 <tr>
 <td>
<th>
	<h1>
 <div align="center">

<br>Employee Details </h1>
</th>
</div>
</td>
</tr>

 
 <tr>
 <td>
  <label for="e_id">Employee id:</label>
</td>
<td>
  <input type="text" name="e_id" maxlength="50" size="30">
 </td>
 </tr> 

 <tr>
 <td>	
 	<label for="e_name">Employee Name:</label>
  </td>
  <td>

  <input type="text" name="e_name" maxlength="50" size="30" ></br>
  </td>
</tr>

<tr>
	<td>
		<label for="e_gender">Gender</label>
	</td>
	<td>
 <input type="radio" name="e_gender" value="male">Male
<input type="radio" name="e_gender" value="Female">FeMale

   </td>
</tr>

<tr>
	<td>
		<label>Employee Address</label>
	</td>
	<td>
		<input type="text"  name="e_address" maxlength="50" size="30">
  </td>
  </tr>		
<tr>
	<td>
		<label for="">Employee_Contact_no.:</label>
	</td>
	<td>

  <input type="text" name="e_contact" maxlength="50" size="30">
</td>
</tr>

<tr>
	<td>
		<label for="e_type">Employee_type:</label>
	</td>
	<td>
  <input type="text" name="e_type" maxlength="50" size="30">
</td>
</tr>

  <tr>
  	<td>
  		<label for="e_work">Employee work:</label>
  	</td>
  	<td>

  <input type="text" name="e_work" maxlength="50" size="30">
  </td>
</tr>
  
  <tr>
 <td colspan="2" style="text-align: center;">
  
  <div>
   <br><input type="submit" name="sub1" value="INSERT">
	<input type="submit" name="sub2" value="DELETE">
  	
  	<input type="submit" name="sub3" value="DISPLAY">
	<input type="submit" name="sub4" value="UPDATE">

  
  </div>
  
  </td>
  
  
</tr>
 
  </form>
</table>

<?php  


session_start();
 
include('con1.php');
 

if(isset($_POST["sub1"]))
{

mysqli_query($con,"insert into employee(e_id,e_name,e_gender,e_address,e_contact,e_type,e_work)values('$_POST[e_id]','$_POST[e_name]','$_POST[e_gender]','$_POST[e_address]','$_POST[e_contact]','$_POST[e_type]','$_POST[e_work]')");

}



else if(isset($_POST["sub2"]))
{
	
	$query1=mysqli_query($con,"delete from employee where e_id='$_POST[e_id]'");
	if($query1)
echo "Data Deleted";
}

else if(isset($_POST["sub3"]))
{

	$result=mysqli_query($con,"select * from  employee");
	echo "<center>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<table border=1 >";
	
	echo "<tr>";
		echo "<th>";  echo "ID";   echo "</th>";
		echo "<th>";  echo "NAME";   echo "</th>";
		echo "<th>";  echo "GENDER";   echo "</th>";
		echo "<th>";  echo "ADDRESS";   echo "</th>";
		echo "<th>";  echo "CONTACT";   echo "</th>";
		echo "<th>";  echo "TYPE";   echo "</th>";
		echo "<th>";  echo "WORK";   echo "</th>";
		


		echo "</tr>";
	while($group=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>";  echo $group["e_id"];   echo "</td>";
		echo "<td>";  echo $group["e_name"];   echo "</td>";
		echo "<td>";  echo $group["e_gender"];   echo "</td>";
	echo "<td>";  echo $group["e_address"];   echo "</td>";
	echo "<td>";  echo $group["e_contact"];   echo "</td>";
	echo "<td>";  echo $group["e_type"];   echo "</td>";
	echo "<td>";  echo $group["e_work"];   echo "</td>";
	

		echo "</tr>";
	}
echo "</table>";
echo "</center>";
		}	

if(isset($_POST["sub4"]))
{

$sql="update employee set e_name='$_POST[e_name]',e_address='$_POST[e_address]',e_contact='$_POST[e_contact]',e_type='$_POST[e_type]',e_work='$_POST[e_work]', where e_id='$_POST[e_id]'";
if(mysqli_query($con,$sql))
{

header("refresh:10; url=EMP.php");

}
else
echo "NOT UPDATE";

}


?>

</body>


</html>
