<?php

    $conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM","concept_BCIsignup") or die ("Couldn't connect");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully!";
    $connmessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $name     = trim($_POST['name']);
        $country  = trim($_POST['country']);
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);
    
        // Check if email already exists
        $stmt = $conn->prepare("SELECT Email FROM users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $signupmessage = "<div class='signupmessage'>
                            <p>This email is already in use, please use a different one!</p>
                        </div><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        } else {
            // Insert user into database
            $stmt = $conn->prepare("INSERT INTO users (Username, Name, Country, Email, Password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $name, $country, $email, $password);
            
            if ($stmt->execute()) {
                $signupmessage = "<div class='signupmessage'>
                                <p>Sign Up Successful!</p>
                            </div><br>
                            <a href='https://conceptography.org/communitylogin.php'><button class='btn'>Log In</button>";
            } else {
                $signupmessage = "Error: " . $stmt->error;
            }
        }
        $stmt->close();
    }    
?>