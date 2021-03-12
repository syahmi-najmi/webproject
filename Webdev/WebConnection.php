<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "dentalclinic";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed:"
    . $conn -> error);

    return $conn;
}

function Closecon($conn)
{
    $conn-> close();
}



?>