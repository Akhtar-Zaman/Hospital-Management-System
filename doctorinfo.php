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
                        <th width="10%">Tooo</th>
                        <th width="20%">Organization</th>
                    </tr>

                    <?php
                   
                    $query = "SELECT * FROM doctor_info ";
                    $result = mysqli_query($connect, $query);

                    while ($row = mysqli_fetch_array($result)) 
					{
                        ?>  

                        <tr>
                            <td><?php echo $row["DoctorId"]; ?></td>
                            <td><?php echo $row["FName"]; ?></td>
                            <td><?php echo $row["MName"]; ?></td>	
							<td><?php echo $row["LName"]; ?></td>
                            <td><?php echo $row["Dob"]; ?></td>
                            <td><?php echo $row["Doa"]; ?></td>
							<td><?php echo $row["Degree"]; ?></td>
                            <td><?php echo $row["Board"]; ?></td>
                            <td><?php echo $row["Year"]; ?></td>
						    <td><?php echo $row["Division"]; ?></td>
                            <td><?php echo $row["Position"]; ?></td>
                            <td><?php echo $row["Job"]; ?></td>
						    <td><?php echo $row["Frm"]; ?></td>
                            <td><?php echo $row["Tooo"]; ?></td>
                            <td><?php echo $row["Organization"]; ?></td>
							
                        </tr>

                        <?php
                    }
                    ?>	
                </table>
    </body>
</html> 