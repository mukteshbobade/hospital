<doctype html>


<html>
<title>Bill</title>
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
<form name="bill.php" method="post">

 <tr>
  	<td>
 
  <th><h1><br>Bill Details </h1>
  </th>
</td>
</tr>
<tr>
	<th>
		<label for="Sr No">Sr No</label>
	</th>
	<td>
 
  <input type="text" name="b_no" >
</td>
</tr>


<tr>
	<th>
		<label for="Patient_Name">Patient_Name:</label>
	</th>
	<td>
 
  <input type="text" name="b_name" >
</td>
</tr>

<tr>
	<td>
		<label for="Room Type">Room Type</label>
		</td>
		<td>
 <input type="text" name="b_room" >
</td>
</tr>

<tr>
	<td>
		<label for="Patient Test">Patient Test</label>
		</td>
		<td>
 <input type="text" name="b_test" >
</td>
</tr>

<tr>
	<td>
		<label for="b_date">Bill Date</label>
	</td>
	<td>
  <input type="text" name="b_date">
</td>
</tr>


<tr>
	<td>
		<label for="b_amount">Bill Amout:</label>
	</td>
	<td>
  <input type="number" name="b_amount" >
</td>
</tr>

 	
  
  </th>
  
  
	<td colspan="2" style="text-align: center;">
  
  <div align="center">
  
  <br><input type="submit" name="sub1" value="Genrate Bill" >
	<input type="submit" name="sub2" value="View Bills">
  
  </div>
  
</td>  
</td>

</tr>
</form>
</table>





</body>


</html>
<?php




session_start();
 
include('con1.php');
 

if(isset($_POST["sub1"]))
{

mysqli_query($con,"insert into bill(b_no,b_name,b_room,b_test,b_date,b_amount)values('$_POST[b_no]','$_POST[b_name]','$_POST[b_room]','$_POST[b_test]','$_POST[b_date]','$_POST[b_amount]')");
}


else if(isset($_POST["sub2"]))
{

	$result=mysqli_query($con,"select * from  bill");
	echo "<center>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<table border=1>";
	
	echo "<tr>";
		echo "<th>";  echo "SR.NO";   echo "</th>";
		echo "<th>";  echo "NAME";   echo "</th>";
		echo "<th>";  echo "ROOM TYPE";   echo "</th>";
		echo "<th>";  echo "TEST";   echo "</th>";
		echo "<th>";  echo "DATE";   echo "</th>";
		echo "<th>";  echo "AMOUNT";   echo "</th>";
		


		echo "</tr>";
	while($group=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>";  echo $group["b_no"];   echo "</td>";
		echo "<td>";  echo $group["b_name"];   echo "</td>";
		echo "<td>";  echo $group["b_room"];   echo "</td>";
	echo "<td>";  echo $group["b_test"];   echo "</td>";
	echo "<td>";  echo $group["b_date"];   echo "</td>";
	echo "<td>";  echo $group["b_amount"];   echo "</td>";
	

		echo "</tr>";
	}
echo "</table>";
echo "</center>";
		}	





?>