<?php

  session_start();
  $con=mysqli_connect('localhost','root');
  
  if($con)
  {
	   echo "connection successful";
  }
	   
	   else
	   {
		    "no connection";
	   }
	   
	mysqli_select_db($con,'hospital');
   
   $aid=$_POST['alogin'];
   $apass=$_POST['apassword'];


$q= "select * from admin where alogin='$aid' && apassword='$apass' ";

   $result = mysqli_query($con,$q);
 
  $num = mysqli_num_rows($result);
  
  
  if($num==1)
  {
	  echo "duplicate data";
  }
  else{
	   $qy = "insert into admin(alogin,apassword) values('$aid','$apass')";
	   
	   mysqli_query($con,$qy);

  }


?>
<doctype html>

<html>


<style>

 table {
  
      border:solid black 1px;
	  
	  }



</style>

<body>

<br><br><br><br><br><br>

 <table style="background-color:lightyellow"; align="center">
 <td>
 <tr>
 <th>
               <h2> <a href="p_profile.php">Patient Appointment & Details<button type="button">Click Here</button></a></h2>
                  
        <h2><a href="doctor.php">Doctor Details<button type="button" >Click Here</button></a></h2>

        <h2><a href="EMP.php"> Employee Details<button type="button" >Click Here</button></a></h2>
        <

</th>
</tr>

</td>	
		</table>
</br></br></br></br></br></br>		
</body>

</html>