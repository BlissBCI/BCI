<?php 
// Database connection
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCIadmin");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form input
    $username = $_POST['username'] ?? '';
    $enteredPassword = $_POST['password'] ?? '';

    $query = "SELECT Password FROM admin WHERE Username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPasswordFromDatabase);
    $stmt->fetch();
    $stmt->close();

    if (!empty($enteredPassword) && !empty($hashedPasswordFromDatabase)) {
        if (password_verify($enteredPassword, $hashedPasswordFromDatabase)) {
            // Login success
            header("Location: https://conceptography.org/tmbciadminlogout.php");
            exit();
        } else {
            echo "<div class='adminmessage'>Incorrect password</div>";
        }
    } else {
        echo "<div class='adminmessage'>Missing credentials or user not found.</div>";
    }
}
?>
