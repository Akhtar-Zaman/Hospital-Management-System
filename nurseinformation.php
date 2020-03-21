<?php
$connect= mysqli_connect("localhost","root","","hospital")
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor Information</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		tr td input{
			border: 0px;
			outline: 0px;
		}
	</style>
</head>
<body>
	<main>
		<p class="center">Doctor Information Form</p>
		<form id="form1" name="form1" method="post" action="">
			  <!--<label> <span class="style1">PATIENT ADMISSION FORM</span>	<br />-->
			  <br /> 
			 <p>
			   <label>Doctor Id:
			   <input name="DoctorId" type="text" id="firstname" />
			   </label> <br>
			 </p>
			  <p>
			   <label>First Name:
			   <input name="FName" type="text" id="firstname" />
			   </label> <br><br>
			   <label>Middle Name:
			   <input name="MName" type="text" id="middlename" />
			   </label><br><br>
			   <label>Last Name:
			   <input name="LName" type="text" id="lastname" />
	  			</label><br><br>
			</p>
			 <p>
			  	<label>
			  Date of Birth :
			  <input name="Dob" type="text" id="Admission date" />
			  </label>
			 (DD/MM/YYYY)<br><br>
			 
			 Date of Appointment :
			  <input name="Doa" type="text" id="Admission date" />
			  </label>
			 (DD/MM/YYYY)  
			  </p><br><br>
			  
		
			  
			  				
				
			   <label>Degree:
			   <input name="Degree" type="text" id="Degree" />
	  			</label><br><br>
			   <label>Board/Institute:
			   <input name="Institute" type="text" id="Board/Institute" />
	  			</label><br><br>
			   <label>Year:
			   <input name="Year" type="text" id="Year" />
	  			</label><br><br>
			   <label>Division:
			   <input name="Division" type="text" id="Division/CGPA" />
	  			</label><br><br>
			   <label>Position:
			   <input name="Position" type="text" id="Position" />
			   </label><br><br>
			   <label>Job Title:
			   <input name="Job" type="text" id="Position" />
			   	  			</label>	 <br>	 <br>
			   <label>From:
			   <input name="Frm" type="text" id="From" />
			   	  			</label><br><br>
			   <label>To:
			   <input name="Tooo" type="text" id="To" />
			   	  			</label><br><br>
			   <label>Organization:
			   <input name="Organization" type="text" id="Organization" /> <br><br> 
			   
			   <input type="submit" name="submit">
			</form>




	  <?php
if (isset($_POST['submit']))
{
	$DoctorId = $_POST['DoctorId'];
	$FName = $_POST['FName'];
	$MName =$_POST['MName'];
	$LName = $_POST['LName'];
	$Dob = $_POST['Dob'];
	$Doa = $_POST['Doa'];
	$Degree = $_POST['Degree'];
	$Institute = $_POST['Institute'];
	$Year = $_POST['Year'];
	$Division = $_POST['Division'];
	$Position = $_POST['Position'];
	$Job = $_POST['Job'];
	$Frm = $_POST['Frm'];
	$Tooo = $_POST['Tooo'];
	$Organization= $_POST['Organization'];

	

	
	$query="INSERT INTO Nurse_info VALUES ('$DoctorId','$FName','$MName','$LName','$Dob','$Doa','$Degree','$Institute','$Year','$Division','$Position','$Job','$Frm','$Tooo','$Organization')";
	$result= mysqli_query($connect,$query);
    //$row = mysqli_fetch_array($result);
		
		if($result)
			echo '<script type= "text/javascript"> alert ("Information Saved Succesfully") </script>';
		else
			echo '<script type= "text/javascript"> alert ("Something is wrong") </script>';
}

?>

		
	</main>	
</body>
</html>