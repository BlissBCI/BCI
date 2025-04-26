<?php 
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
                // Incorrect password alert message
                $_SESSION['alert_message'] = 'Incorrect username or password. Please try again.';
                $_SESSION['alert_class'] = 'alert-danger';
                header("Location: https://conceptography.org/tmbciadminloginerror.php");
                exit();
            }
        } else {
            // Missing credentials or user not found alert message
            $_SESSION['alert_message'] = 'Missing credentials or user not found.';
            $_SESSION['alert_class'] = 'alert-danger';
            header("Location: https://conceptography.org/tmbciadminloginerror.php");
            exit();
        }
    } else {
        // Database query failed alert message
        $_SESSION['alert_message'] = 'Something went wrong. Please try again.';
        $_SESSION['alert_class'] = 'alert-danger';
        header("Location: https://conceptography.org/tmbciadminloginerror.php");
        exit();
    }
}
?>
