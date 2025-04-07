<?php 
// Database connection
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCIadmin") or die("Couldn't connect");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query
    $stmt = $conn->prepare("SELECT Password FROM admin WHERE Username = ?");
    $stmt->bind_param("s", $username);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row['Password'])) {
                // Redirect on success
                header("Location: https://conceptography.org/tmbciadminlogout.php");
                exit();
            } else {
                echo "<div class='adminmessage'><p>Incorrect password</p></div>";
            }
        } else {
            echo "<div class='adminmessage'><p>Username not found</p></div>";
        }
    } else {
        echo "<div class='adminmessage'><p>Error: " . $stmt->error . "</p></div>";
    }

    $stmt->close();
}

$conn->close();
?>
