<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <style>
        table {
            border: 1px solid black;
        }

        tr, td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
 <?php

 $date = date("d-m-Y");
 //get input values from form
 extract($_POST);
 ?>
 <fieldset>
     <legend>Appoiment Details:</legend>
    <table style="width:100%">
        <tr><td>Name</td>
            <td>:</td>
            <td><b><?php print($fname) ?></b></td>
        </tr>

        <tr><td>Contact</td>
            <td>:</td>
            <td><b><?php print($contact) ?></b></td>
        </tr>

        <tr><td>Email</td>
            <td>:</td>
            <td><b><?php print($email) ?></b></td>
        </tr>

        <tr><td>Service</td>
            <td>:</td>
            <td><b><?php print($List) ?></b></td>
        </tr>

        <tr><td>Booking date</td>
            <td>:</td>
            <td><b><?php print($booking) ?></b></td>
        </tr>

        <tr><td>Message</td>
            <td>:</td>
            <td><b><?php print($message) ?></b></td>
        </tr>
 
    </table>

<br>

    <form>
        <input type="button" style="border-radius: 8px;" style="color: cornflowerblue;"   name="printButton" onClick="window.print()" value="Print">
    </form>

</fieldset> 
</body>
</html>

