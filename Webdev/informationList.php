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

$sql = "SELECT * FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
    echo '<tr><td align="center"><b>No</b></td>
    <td align="center"><b>Name</b></td>
    <td align="center"><b>Contact</b></td>
    <td align="center"><b>Email</b></td>
    <td align="center"><b>IC</b></td>
    <td align="center"><b>Address</b></td></tr>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["Bil"].'</td>';
        echo '<td align="center">'.$row["patient_name"].'</td>';
        echo '<td align="center">'.$row["patient_contact"].'</td>';
        echo '<td align="center">'.$row["patient_email"].'</td>';
        echo '<td align="center">'.$row["patient_ic"].'</td>';
        echo '<td align="center">'.$row["patient_address"].'</td>';
        echo'</tr>';
    }
}
else{
    echo "0 results";
}

$conn->close();
echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';








?>
</body>
</html>