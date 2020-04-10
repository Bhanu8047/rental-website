<?php

if(isset($_POST['submit'])){
    include "conn.php";

    $name = $_POST['apartment'];
    $owner = $_POST['owner'];
    $location = $_POST['location'];
    $cost = $_POST['cost'];
    $contact = $_POST['contact'];
    $type = $_POST['flat-type'];

    $sql = "INSERT INTO apartment (`APARTMENT_NAME`, `A_OWNER`, `A_TYPE`, `A_LOCATION`, `COST`, `MOBILE`) VALUES ('" . $name . "','" . $owner . "','" . $type . "','" . $location . "','" . $cost . "','" . $contact . "')";

    if($conn->query($sql) === true){
        echo "Successfully submitted details";
        echo '<meta http-equiv="refresh" content="2;URL=\'/projectos/\'">';
    } else {
        echo "unsuccessful";
        echo $conn->error;
        // $conn->close();
    }
}

?>