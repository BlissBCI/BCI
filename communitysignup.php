<?php

    $conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM","concept_BCIsignup") or die ("Couldn't connect");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully!";
    
?>