<?php
$servername="localhost"; // Host name
$patient_email="root"; // Mysql username
$password=""; // Mysql password
$dbName="dentalclinic"; // Database name

$conn = new mysqli($servername, $email, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username=$_POST['patient_email'];
$password=$_POST['patient_pass'];

$sql = "SELECT * FROM information WHERE email ='$email' and
mypassword='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    header("location:adminMenu.php");
}
else
{
    echo "<p>Wrong Username or Password. Please try again.</p>";
}
$conn->close();
?>