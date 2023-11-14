<?php

include('db.php');

$query = "select * from students";
$row = mysqli_query($con, $query);
$totalrow = mysqli_num_rows($row);

if ($totalrow = 1) {
    ?>


    <table border="1" style="text-align:center; " width="50%">


        <tr>
            <th>Username</th>
            <th>password</th>
            



        </tr>

        <?php


        while ($data = mysqli_fetch_assoc($row))

            echo "<tr>
		<td>" . $data['fname'] . "</td>
		<td>" . $data['lname'] . "</td>
	
		
		</tr>";

} else {
    echo "No Records Found";
}



?>
</table>