<html>
<head>
 <title>S Dental</title>
</head>
<body>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dentalclinic";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 $adName=$_POST['patient_name'];

 $sql = "DELETE FROM information WHERE patient_name='$adName'";

 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
 }
 else{
    echo "Error deleting record: " . $conn->error;
 }

 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
 ?>
</body>
</html>