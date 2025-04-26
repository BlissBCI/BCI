<?php 
$admin_message = '';
// Database connection
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCIadmin");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form input
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = "SELECT Password FROM admin WHERE Username = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($passwordFromDatabase);
        $stmt->fetch();
        $stmt->close();

        if (!empty($password) && !empty($passwordFromDatabase)) {
            if ($password === $passwordFromDatabase) {
                // Login success
                header("Location: https://conceptography.org/tmbciadminlogout.php");
                exit();
            } else {
                $admin_message = "Incorrect password"; 
            }
        } else {
            $admin_message = "Missing credentials or user not found."; 
        }
    } else {
        $admin_message = "Database query failed: " . $conn->error; 
    }
}
?>
