

<doctype html>


<html>
<title>Patient</title>
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

<table   border="1" align="center"  style="background-color:white";>


  <form action="patient.php" method="post">
 <tr>
 <td>
<th>
<h1>  <br>Patient Details </h1>
</th>
</td>
</tr>

<tr>
  <td>
    <label for="p_id">Patient id:</label>
</td>

 <td>
  <input type="text" name="p_id"maxlength="50" size="30" required> </br>
</td>
</tr>


<tr>
  <td>
<label for="p_name"> Patient Name:</label>

</td>
<td>
<input type="text" name="p_name"maxlength="50" size="30" required></br>
</td>
</tr>


<tr>
<td>
<label for="p_gender"> Gender</label>
</td>
<td>
<input type="radio" name="p_gender" value="male">Male
<input type="radio" name="p_gender" value="Female">FeMale
</td>
</tr>


<tr>
  <td>
    <label for="p_address"> Patient Address:</label>
</td>
<td>

<input type="text"  name="p_address"maxlength="50" size="30" required></br>
</td>
</tr>


<tr>
  <td>
<label for="p_weight">Patient weight:</label>
  </td>
  <td>

  <input type="text" name="p_weight"maxlength="50" size="30" required></br>
</td>
</tr>

<tr>
<td>
  <label for="p_bg">Patient BloodGroup</label>

  </td>
<td>
 :<input type="text" name="p_bg"maxlength="50" size="30" required>
</td>  
</tr>

<tr>
  <td>
    <label for="p_dob">Patient Date of Birth:</label>
 </td>
 <td>
  <input type="text" name="p_dob"maxlength="50" size="30" required>
</td>
</tr>


<tr>
  <td>
    <label for="p_email">Patient Email:</label>
  </td>
  <td>
  <input type="email" name="p_email"maxlength="50" size="30"required>
</td>
</tr>

<tr>
  <td>
    <label for="p_contact">Patient Contact no.</label>
  </td>
  <td>
  <input type="text" name="p_contact"maxlength="50" size="30"required>
</td>  
</tr>

<tr>
  <td>
<label for="p_desease">Patient Deseases:</label>
  </td>
  <td>
  <input type="text" name="p_desease"maxlength="50" size="30" required>
  </td>
</tr>
  
<tr>
  <td>
<label for="r_no">Patient Room No</label>
  </td>
  <td>
  <input type="text" name="r_no"maxlength="50" size="30"required>
  </td>
</tr>

<tr>
  <td>
<label for="r_type">Patient Room Type</label>
  </td>
  <td>
  <input type="text" name="r_type"maxlength="50" size="30"required>
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
  
</td>   
</tr>
</div>
</form>
</table>





</body>


</html>
<?php

$con=new mysqli('localhost','root','','hospitaldb');
/*$patient_id1=;
$patient_name1=;
$patient_gender1=;
$patient_address1=;
$patient_weight1=;
$patient_bg1=;
$patient_dob1=;
$patient_email1=;
$patient_contact1=;
$patient_desease1=;
*/

if(isset($_POST["sub1"]))
{
$sql="INSERT INTO patient (patient_id,patient_name,patient_gender,patient_address,patient_weight,patient_bg,patient_dob,patient_email,patient_contact,patient_desease,r_no,r_type) VALUES('$_POST[p_id]','$_POST[p_name]','$_POST[p_gender]','$_POST[p_address]','$_POST[p_weight]','$_POST[p_bg]','$_POST[p_dob]','$_POST[p_email]','$_POST[p_contact]','$_POST[p_desease]','$_POST[r_no]','$_POST[r_type]')";
mysqli_query($con,$sql);


}


if(isset($_POST["sub2"]))
{

mysqli_query($con,"delete from patient where patient_id='$_POST[p_id]'");
echo "Data Deleted";
}


if(isset($_POST['sub3']))

{

  $res=mysqli_query($con,"select * from patient");
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
    echo "<th>";  echo "WEIGHT";   echo "</th>";
      echo "<th>";  echo "Blood Group";   echo "</th>";
    echo "<th>";  echo "Date of Birth";   echo "</th>";
    echo "<th>";  echo "EMAIL";   echo "</th>";
    echo "<th>";  echo "CONTACT";   echo "</th>";
    echo "<th>";  echo "DESEASES";   echo "</th>";
    echo "<th>";  echo "Room No";   echo "</th>";
    echo "<th>";  echo "Room Type";   echo "</th>";
    
while($show=mysqli_fetch_array($res))
{
echo "<tr>";
    echo "<td>";  echo $show["patient_id"];   echo "</td>";
     echo "<td>";  echo $show["patient_name"];   echo "</td>";
    echo "<td>";  echo $show["patient_gender"];   echo "</td>";
    echo "<td>";  echo $show["patient_address"];   echo "</td>";
    echo "<td>";  echo $show["patient_weight"];   echo "</td>";
    echo "<td>";  echo $show["patient_bg"];   echo "</td>";
    echo "<td>";  echo $show["patient_dob"];   echo "</td>";
    echo "<td>";  echo $show["patient_email"];   echo "</td>";
    echo "<td>";  echo $show["patient_contact"];   echo "</td>";
   echo "<td>";  echo $show["patient_desease"];   echo "</td>";
   echo "<td>";  echo $show["r_no"];   echo "</td>";
   echo "<td>";  echo $show["r_type"];   echo "</td>";
   
echo "</tr>";

  }
echo "</table>";
echo "</center>";
    } 




if(isset($_POST['sub4']))
{

$res=mysqli_query($con,"select * from patient where patient_id='$_POST[p_id]'");
echo "<center>";

  echo "<table border=1>";
  
  echo "<tr>";
  echo "<th>";  echo "ID";   echo "</th>";
  echo "<th>";  echo "NAME";   echo "</th>";
    echo "<th>";  echo "GENDER";   echo "</th>";
    echo "<th>";  echo "ADDRESS";   echo "</th>";
    echo "<th>";  echo "WEIGHT";   echo "</th>";
      echo "<th>";  echo "Blood Group";   echo "</th>";
    echo "<th>";  echo "Date of Birth";   echo "</th>";
    echo "<th>";  echo "EMAIL";   echo "</th>";
    echo "<th>";  echo "CONTACT";   echo "</th>";
    echo "<th>";  echo "DESEASES";   echo "</th>";
     echo "<th>";  echo "Room No";   echo "</th>";
    echo "<th>";  echo "Room Type";   echo "</th>";
    
while($show=mysqli_fetch_array($res))
{
echo "<tr>";
    echo "<td>";  echo $show["patient_id"];   echo "</td>";
     echo "<td>";  echo $show["patient_name"];   echo "</td>";
    echo "<td>";  echo $show["patient_gender"];   echo "</td>";
    echo "<td>";  echo $show["patient_address"];   echo "</td>";
    echo "<td>";  echo $show["patient_weight"];   echo "</td>";
    echo "<td>";  echo $show["patient_bg"];   echo "</td>";
    echo "<td>";  echo $show["patient_dob"];   echo "</td>";
    echo "<td>";  echo $show["patient_email"];   echo "</td>";
    echo "<td>";  echo $show["patient_contact"];   echo "</td>";
   echo "<td>";  echo $show["patient_desease"];   echo "</td>";
   echo "<td>";  echo $show["r_no"];   echo "</td>";
   echo "<td>";  echo $show["r_type"];   echo "</td>";
   
echo "</tr>";

  }
echo "</table>";
echo "</center>";
    } 

if(isset($_POST["sub5"]))
{

$sql="update patient set patient_name='$_POST[p_name]',patient_address='$_POST[p_address]',patient_weight='$_POST[p_weight]',patient_bg='$_POST[p_bg]',patient_dob='$_POST[p_dob]',patient_email='$_POST[p_email]',patient_contact='$_POST[p_contact]',patient_desease='$_POST[p_desease]' where patient_id='$_POST[p_id]'";
if(mysqli_query($con,$sql))
{
header("refresh:100; url=patient.php");

}
else
echo "NOT UPDATE";

}
/*header("refresh:2; url=patient.html");
*/







?>