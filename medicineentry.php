<?php
$connect= mysqli_connect("localhost","root","","hospital")
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medicine Entry</title>
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
		<p class="center">Medicine Entry Form</p>
		<form id="form1" name="form1" method="post" action="">
			  <!--<label> <span class="style1">PATIENT ADMISSION FORM</span>	<br />-->
			  <br /> 
			 <p>
			   <label>Suppiler Id:
			   <input name="SuppilerId" type="text" id="firstname" />
			   </label><br><br>
			   <label>Suppiler Name:
			   <input name="suppilerName" type="text" id="middlename" />
			   </label><br><br>
			 </p>
			 <p>
			  	<label>
			  Supply Date
			  <input name="Supplydate" type="text" id="Admission date" />
			  </label>
			 (DD/MM/YYYY)<br><br> 
			  </p>
			  
			  
			  
			  
			  			   <label>Medicine Id:
			   <input name="MedicineId" type="text" id="Medicine Id" />
			   </label><br><br>
			   			   <label>Name:
			   <input name="Name" type="text" id="Name" />
			   </label><br><br>
			   			   <label>Type:
			   <input name="Type" type="text" id="Type" />
			   </label><br><br>
			   			   <label>Unit Price:
			   <input name="UnitPrice" type="text" id="Unit Price" />
			   </label><br><br>
			   			   <label>Quantity:
			   <input name="Quantity" type="text" id="Quantity" />
			   </label><br><br>
			   			   <label>Date Of Manufacture:
			   <input name="DateOfManufacture" type="text" id="Date Of Manufacture" />
			   </label> <br> <br> 
			   			   <label>Expiry Date:
			   <input name="ExpiryDate" type="text" id="Expiry Date" />
			   </label>
			  <br> <br> 
			  
			   <input type="submit" name="submit">
			  
			</form>

				  <?php
if (isset($_POST['submit']))
{
	$SuppilerId = $_POST['SuppilerId'];
	$suppilerName = $_POST['suppilerName'];
	$Supplydate =$_POST['Supplydate'];
	$MedicineId = $_POST['MedicineId'];
	$Name = $_POST['Name'];
	$Type = $_POST['Type'];
	$UnitPrice = $_POST['UnitPrice'];
	$Quantity = $_POST['Quantity'];
	$DateOfManufacture = $_POST['DateOfManufacture'];
	$ExpiryDate = $_POST['ExpiryDate'];


	

	
	$query="INSERT INTO MedicineEntry VALUES ('$SuppilerId','$suppilerName','$Supplydate','$MedicineId','$Name','$Type','$UnitPrice','$Quantity','$DateOfManufacture','$ExpiryDate')";
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