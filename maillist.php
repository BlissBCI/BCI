<?php
// Database connection
$conn=mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM","concept_BCImaillist") or die ("Couldn't connect");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])) {
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);

    // Check if the email already exists
    $stmt=$conn->prepare("SELECT Email FROM mail WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<div class='maillistmessage'>
                <p>This email is already in use, please use a different one!</p>
              </div><br>
              <a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
    } else {
        // Insert data into database
        $stmt = $conn->prepare("INSERT INTO mail (Name, Email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);

        if ($stmt->execute()) {
            // Redirect on success
            header("Location: https://conceptography.org/maillistadd.html");
            exit();
        } else {
            echo "<div class='signupmessage'>
                    <p>Error: " . $stmt->error . "</p>
                </div>";
        }
    }
}
    
?>