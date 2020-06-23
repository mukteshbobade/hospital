<?php
  if(isset($_POST['sub1'])) {
  	if($_POST['d_id']=='') {
  		echo "Enter valid ID";
  	}
  }
?>	

<!DOCTYPE Html>
<html>
<head>
<title>Doctor</title>
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


<!--<script type="text/javascript">
	
	function validateForm()
	{
		var id1=document.forms["doctor1"]["d_id"].value;
		var name1=document.forms["doctor1"]["d_name"].value;
		var dgen1=document.form["doctor1"]["d_gender"].value;
		var add1=document.forms["doctor1"]["d_address"].value;
		var type1=document.forms["doctor1"]["d_type"].value;
		var bod1=document.forms["doctor1"]["d_bod.value"].value;
		var contact1=document.forms["doctor1"]["d_contact"].value;
		var special1=document.forms["doctor1"]["d_special"].value;
		
		if((id1==null||id1=="")|| (name1==null||name=="")||(add1==null||add1=="")||(type1==null||type1=="")||(bod1==null||bod1==""))
			{
      	alert("All Field must be filled out");
      	return false;
    		}
    


		else if(isNaN(id1))
		{
			alert("Invalid ID");
			return false;
		}

		else if(name1==null||name1=="")
		{
			alert("Invalid Name");
			return false;
		}

		else if(add1==null||add1=="")
		{
			alert("Invalid Address");
		return false;
		}

		else if(type1==null||type1=="")
		{
			alert("Invalid Type");
		return false;
		}
		else if(bod1==null||bod1=="")
		{
			alert("Invalid BOD");
		return false;
		}
	    else if(isNaN(contact1))
	    {
	    	alert("Invalid Contact no");
	    return false;
	    }
	
	}


</script>-->
</head>
<body align="center">

<br><br><br><br> 

<table   border="1" align="center"  style="background-color:white";>


 
<form name="doctor1" method="post">
  <tr>
  	<td>
 
  <th><h1>Doctor Details </h1>
  </th>
</td>
</tr>

 <tr>
 <td>
  <label for="d_id">Doctor id:</label>
</td>
<td>
 <input type="text" name="d_id" maxlength="50" size="30">
</td>
</tr>

<tr>
<td>
<label for="d_name">Doctor Name:</label>
</td>
<td>
 <input type="text" name="d_name" maxlength="50" size="30">
</td>
</tr>


<tr>	
<td>
<label for="d_gender">Gender</label> 
</td>
<td>
<input type="radio" name="d_gender" value="m">Male
<input type="radio" name="d_gender" value="f">FeMale 
</td>
</tr>

<tr>
<td>
    	<label for="d_address">Doctor Add:</label>
</td>
<td>
 <input type="text"  name="d_address"maxlength="50" size="30">
</td> 
 </tr>


<tr>
 <td>
 	<label for="d_type"> Doctor type:</label>
  </td>
  <td>
   <input type="text" name="d_type" maxlength="50" size="30">
  </td>
  </tr>

<tr>
  <td>
  	<label for="d_bod">Doctor BOD:</label>
  </td>
  <td>
  <input type="text" name="d_bod" maxlength="50" size="30">
  </td>
  </tr>
  	


<tr>
  	<td>
  	<label for="d_email">Doctor Email:</label>
  	</td>
  	<td>	
 <input type="text" name="d_email" maxlength="50" size="30">
 </td>
  </tr>


  <tr>
  	<td>
  		<label for="doctor_contact">Doctor Contact_no.:</label>
 </td>
 <td>
 <input type="text" name="d_contact" maxlength="50" size="30">
 </td>
 </tr>
 	
<tr>
 	<td>
 		<label for="d_special">Doctor specialization:</label>
 	</td>
 	<td>
 <input type="text" name="d_special" maxlength="50" size="30">
</td>
</tr>

	<tr>
	<td colspan="2" style="text-align: center;">
  
  <div>
  
  <br><input type="submit" name="sub1" value="INSERT">
	<input type="submit" name="sub2" value="DELETE">
  	
  	<input type="submit" name="sub3" value="DISPLAY">
	<input type="submit" name="sub4" value="SEARCH">
<input type="submit" name="sub5" value="UPDATE">

</div>
  	
	</td>
</tr>
 </form>
 
</table>






<?php  

/*
$d_id=;
$d_name=;
$d_address=;
$d_type=;
$d_bod=;
$d_email=;
$d_contact=;
$d_special=;



*/
$d_gender=$_POST['d_gender'];

session_start();
 
include('con1.php');
 

if(isset($_POST["sub1"]))
{

mysqli_query($con,"insert into doctor (doctor_id,doctor_name,doctor_gender,doctor_address,doctor_type,doctor_bod,doctor_email,doctor_contact,doctor_special)values('$_POST[d_id]','$_POST[d_name]','$_POST[d_gender]','$_POST[d_address]','$_POST[d_type]','$_POST[d_bod]','$_POST[d_email]','$_POST[d_contact]','$_POST[d_special]')");



}

else if(isset($_POST["sub2"]))
{
	
	$query1=mysqli_query($con,"delete from doctor where doctor_id='$_POST[d_id]'");
	if($query1)
echo "Data Deleted";
}


else if(isset($_POST["sub3"]))
{

	$result=mysqli_query($con,"select * from doctor");
	echo "<center>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<table border=1>";
	
	echo "<tr>";
		echo "<th>";  echo "ID";   echo "</th>";
		echo "<th>";  echo "NAME";   echo "</th>";
		echo "<th>";  echo "GENDER";   echo "</th>";
		echo "<th>";  echo "ADDRESS";   echo "</th>";
		echo "<th>";  echo "TYPE";   echo "</th>";
		echo "<th>";  echo "BOD";   echo "</th>";
		echo "<th>";  echo "EMAIL";   echo "</th>";
		echo "<th>";  echo "CONTACT";   echo "</th>";
		echo "<th>";  echo "SPECIALIZATION";   echo "</th>";
		


		echo "</tr>";
	while($group=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>";  echo $group["doctor_id"];   echo "</td>";
		echo "<td>";  echo $group["doctor_name"];   echo "</td>";
		echo "<td>";  echo $group["doctor_gender"];   echo "</td>";
	echo "<td>";  echo $group["doctor_address"];   echo "</td>";
	echo "<td>";  echo $group["doctor_type"];   echo "</td>";
	echo "<td>";  echo $group["doctor_bod"];   echo "</td>";
	echo "<td>";  echo $group["doctor_email"];   echo "</td>";
	echo "<td>";  echo $group["doctor_contact"];   echo "</td>";
	echo "<td>";  echo $group["doctor_special"];   echo "</td>";



		echo "</tr>";
	}
echo "</table>";
echo "</center>";
		}	




if(isset($_POST["sub4"]))
{

	$result=mysqli_query($con,"select * from doctor where doctor_id='$_POST[d_id]'");
	echo "<center>";

	echo "<table border=1>";
	
	echo "<tr>";
		echo "<th>";  echo "ID";   echo "</th>";
		echo "<th>";  echo "NAME";   echo "</th>";
		echo "<th>";  echo "GENDER";   echo "</th>";
		echo "<th>";  echo "ADDRESS";   echo "</th>";
		echo "<th>";  echo "TYPE";   echo "</th>";
		echo "<th>";  echo "BOD";   echo "</th>";
		echo "<th>";  echo "EMAIL";   echo "</th>";
		echo "<th>";  echo "CONTACT";   echo "</th>";
		echo "<th>";  echo "SPECIALIZATION";   echo "</th>";
		


		echo "</tr>";
	while($group=mysqli_fetch_array($result))
	{
		echo "<tr>";
			echo "<td>";  echo $group["doctor_id"];   echo "</td>";
		echo "<td>";  echo $group["doctor_name"];   echo "</td>";
		echo "<td>";  echo $group["doctor_gender"];   echo "</td>";
	echo "<td>";  echo $group["doctor_address"];   echo "</td>";
	echo "<td>";  echo $group["doctor_type"];   echo "</td>";
	echo "<td>";  echo $group["doctor_bod"];   echo "</td>";
	echo "<td>";  echo $group["doctor_email"];   echo "</td>";
	echo "<td>";  echo $group["doctor_contact"];   echo "</td>";
	echo "<td>";  echo $group["doctor_special"];   echo "</td>";



		echo "</tr>";
	}
echo "</table>";
echo "</center>";

}

if(isset($_POST["sub5"]))
{

$sql="update doctor set doctor_name='$_POST[d_name]',doctor_address='$_POST[d_address]',doctor_type='$_POST[d_type]',doctor_bod='$_POST[d_bod]',doctor_email='$_POST[d_email]',doctor_contact='$_POST[d_contact]',doctor_special='$_POST[d_special]' where doctor_id='$_POST[d_id]'";
if(mysqli_query($con,$sql))
{
header("refresh:100; url=doctor.php");

}
else
echo "NOT UPDATE";



}
/*header("refresh:2; url=doctor.php");
}  */
?>


</body>



</html>
