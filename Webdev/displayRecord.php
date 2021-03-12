<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dentalclinic";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
  //escape special characters in a string
  $advisor = mysqli_real_escape_string($conn, $_POST['patient_name']);

  //create and execute query
  $sql = "SELECT * FROM information WHERE patient_name LIKE '%$patient_name%'";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result-> num_rows > 0) {

     //create a table to display the record
     echo 'Selected record as the following: <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr><td align="center"><b>No</b></td>
     <td align="center"><b>Name</b></td>
     <td align="center"><b>Contact</b></td>
     <td align="center"><b>Email</b></td>
     <td align="center"><b>IC</b></td>
     <td align="center"><b>Address</b></td>
     <td align="center">&nbsp&nbsp</td>
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["id"].'</td>';
        echo '<td align="center">'.$row["patient_name"].'</td>';
        echo '<td align="center">'.$row["patient_contact"].'</td>';
        echo '<td align="center">'.$row["patient_email"].'</td>';
        echo '<td align="center">'.$row["patient_ic"].'</td>';
        echo '<td align="center">'.$row["patient_address"].'</td>';   
        ?>
        <td><a href="editRecord.php?id=<?php echo $row["id"]; ?>">UPDATE</a></td></tr>
        <?php
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

?>

