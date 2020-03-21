<?php
$connect= mysqli_connect("localhost","root","","hospital")
?>

<!DOCTYPE html>
<html>


    <body>

<center> <h3> Doctors Information  </h3> </center>

            <div id="tab">
                <table class="table table-bordered" id="table1" border="1">
                    <tr align="center">
                        <th width="20%">DoctorId</th>
                        <th width="10%">FName</th>
                        <th width="20%">MName</th>
						   <th width="20%">LastName</th>
                        <th width="10%">Dob</th>
                        <th width="20%">Doa</th>
						   <th width="20%">Degree</th>
                        <th width="10%">Board</th>
                        <th width="20%">Year</th>
						   <th width="20%">Division</th>
                        <th width="10%">Position</th>
                        <th width="20%">Job</th>
						   <th width="20%">Frm</th>

                    </tr>

                    <?php
                   
                    $query = "SELECT * FROM patientform ";
                    $result = mysqli_query($connect, $query);

                    while ($row = mysqli_fetch_array($result)) 
					{
                        ?>  

                        <tr>
                            <td><?php echo $row["Adate"]; ?></td>
                            <td><?php echo $row["Fname"]; ?></td>
                            <td><?php echo $row["Mname"]; ?></td>	
							<td><?php echo $row["Lname"]; ?></td>
                            <td><?php echo $row["Dob"]; ?></td>
                            <td><?php echo $row["Mbl1"]; ?></td>
							<td><?php echo $row["Mbl2"]; ?></td>
                            <td><?php echo $row["Village"]; ?></td>
                            <td><?php echo $row["Stname"]; ?></td>
						    <td><?php echo $row["Area"]; ?></td>
                            <td><?php echo $row["Thana"]; ?></td>
                            <td><?php echo $row["District"]; ?></td>
						    <td><?php echo $row["Adeposited"]; ?></td>
      
							
                        </tr>

                        <?php
                    }
                    ?>	
                </table>
    </body>
</html> 