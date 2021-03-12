<html>
<head>
<title>S Dental</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
</head>

<body>
    <?php

    $date = date("d-m-Y");

    extract ($_POST);

    ?>
    <div class="w3-display-container w3-content w3-wide">
     <p>Date: <b><?php print($date) ?></b></p>
    <h3>2020</h3>
    <table style="border: 1px;">

    <tr><td>Name</td>
        <td>:</td>
        <td><b><?php print($adName)?></b></td>
    </tr>

    <tr><td>Contact</td>
        <td>:</td>
        <td><b><?php print($adContact)?></b></td>
    </tr>

    <tr><td>Email</td>
        <td>:</td>
        <td><b><?php print($adEmail)?></b></td>
    </tr>

    <tr><td>IC</td>
        <td>:</td>
        <td><b><?php print($adIc)?></b></td>
    </tr>

    <tr><td>Address</td>
        <td>:</td>
        <td><b><?php print($adAddress)?></b></td>
    </tr>

    </table>
    </div>



    <div class="w3-display-container w3-content">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dentalclinic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); }

        $sql = "INSERT INTO information(patient_name, patient_contact, patient_email, patient_ic,patient_address)
         VALUES ('$adName','$adContact','$adEmail','$adIc','$adAddress')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</div>
<br>

<div class="w3-display-container w3-content w3-wide">
<form>
    <input type="button" name="printButton" onclick="window.print()" value="Print">
</form>
</div>

</body>
</html>