<?php
$connect= mysqli_connect("localhost","root","","hospital")
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<p class="center">Patient Adimission Form</p>
		<form id="form1" name="form1" method="post" action="">
		  <!--<label> <span class="style1">PATIENT ADMISSION FORM</span>	<br />-->
		  <br />
		  <p>
		  	<label>
		  Admission Date
		  <input name="Adate" type="text" id="Admission date" />
		  </label>
		 (DD/MM/YYYY) <br><br>
		  </p> 
		 <p>
		   <label>First Name:
		   <input name="Fname" type="text" id="firstname" />
		   </label><br><br>
		   <label>Middle Name:
		   <input name="Mname" type="text" id="middlename" />
		   </label><br><br>
		   <label>Last Name:
		   <input name="Lname" type="text" id="lastname" />
		   </label><br><br>
		 </p>
		 <label>Date Of Birth:
		 <input name="Dob" type="text" id="dateofbirth" />
		 </label>
		 (DD/MM/YYYY)<br><br>  
		 <p>
		   <label>Mobile (1):
		   <input name="Mbl1" type="text" id="mobile1" />
		   </label><br><br>
		   <label>Mobile (2):
		   <input name="Mbl2" type="text" id="mobile2" />
		   </label><br><br>
		 </p>
		 <p>Present Address:</p>
		 <p>
		   <label>Street No./Village:
		   <input name="Village" type="text" id="streetno./village" /></label><br><br>
		   <label>Street Name:
		   <input name="Stname" type="text" id="streetname" />
		   </label><br><br>
		 </p>
		 <p>
		   <label>Area:
		   <input name="Area" type="text" id="area" /><br><br>
		   Thana:
		    <input name="Thana" type="text" id="thana" />
		    </label><br><br>
		    <label>District:
		    <input name="District" type="text" id="district" />
		    </label><br><br>
		 </p>

		 <p>Profession:</p>
		 <p>1) Government job, 2) Private Job, 3) Business, 4) Farmer, 5) Retired 6) Others.</p>
		 <p>
		   <label>Amount Deposited:
		   <input name="Adeposited" type="text" id="amountdeposited" />
		   </label>
		 </p>
		 <p>Choice&nbsp; Cabin / Ward.</p>
		 <p>&nbsp;</p>
		 <p>Signature with date:</p>
		 <p><br />
		   Name:</p>
		 <p><br />
		   Relation with the Patient:</p>
			<br />

		  
		   <input name="submit" type="submit" id="submit" placeholder="Submit"/>
		  
		</form>
			  <?php
if (isset($_POST['submit']))
{
	$Adate = $_POST['Adate'];
	$Fname = $_POST['Fname'];
	$Mname =$_POST['Mname'];
	$Lname = $_POST['Lname'];
	$Dob = $_POST['Dob'];
	$Mbl1 = $_POST['Mbl1'];
	$Mbl2 = $_POST['Mbl2'];
	$Village = $_POST['Village'];
	$Stname = $_POST['Stname'];
	$Area = $_POST['Area'];
	$Thana = $_POST['Thana'];
	$District = $_POST['District'];
	$Adeposited = $_POST['Adeposited'];


	

	
	$query="INSERT INTO patientform VALUES ('$Adate','$Fname','$Mname','$Lname','$Dob','$Mbl1','$Mbl2','$Village','$Stname','$Area','$Thana','$District','$Adeposited')";
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