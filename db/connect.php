<?php
    $db = new mysqli("localhost:3308", "root", "", "attendance");
    if ($db->connect_errno) {
        echo $db->connect_error;
    } else {
        // echo "Database Connected Succesfully !";
    }
?>