<?php
    // Database connection
    $conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM","concept_BCIadmin") or die ("Couldn't connect");
  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        if ($stmt->execute()) {
            // Redirect on success
            header("Location: https://conceptography.org/tmbciadminlogout.php");
            exit();
        } else {
            echo "<div class='adminmessage'>
                    <p>Error: " . $stmt->error . "</p>
                </div>";
        }
        $stmt->close();
?>