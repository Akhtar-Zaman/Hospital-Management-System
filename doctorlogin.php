<?php
$connect= mysqli_connect("localhost","root","","hospital")
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital | Doctor Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- main tag start from here -->
	<main>
		<section class="top_header_area">
			<div class="opening_time">
				<p>
					<span> Opening Hours </span>:	8am to 11pm 
				</p>
			</div>
		</section>
	</main>
	<!-- main tag end here -->




	<!-- main start from here -->
	<form method="post">
	<section class="login_section">
		<main>
			<div class="login_area">
				<p>
					Login
				</p>
				<input type="email" id="email" name="email" placeholder="Username">
				<input type="password" name="password" id="password" placeholder="Password">
				<button>
					<a href="#" id="submit" name="submit">login</a>
				</button>
			</div>
		</main>
	</section>
	
	</form>
	<!-- main end here -->

	<section class="copyright_area">
		<main>
			<p>&copy; Copyright Hospital</p>
		</main>
	</section>
	
	<?php
	if(isset($_POST['submit'])){
						 if ($_POST["email"] == 'cse' && $_POST['Password'] == 456)
						{
                            header('location:hospital.php');
                        }
						else 
						{ // this 'else' using for both students and faculties invalid login 
                            echo '<script type="text/javascript"> alert("Usrname and Password did not match aaaaaaaaaaaaaaaaaaaaa") </script>';
                        }
	}
	?>

</body>
</html>