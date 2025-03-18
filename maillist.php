<?php
    $maillist=$_POST['maillist'];

    //Database connection
    $conn=new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die ('Connection Failed: '.$conn->conect_error);
    } else {
        $stmt=$conn->prepare("insert into regristration(email) values (?)");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        echo "Email successfully added to the mailing list!";
        $stmt->close();
        $conn->close();
    }
    
?>