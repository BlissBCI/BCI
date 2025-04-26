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
                // Redirect with alert class for incorrect password
                header("Location: https://conceptography.org/tmbciadminloginerror.php?error=incorrect-password&alert_class=alert-danger");
                exit();
            }
        } else {
            // Redirect with alert class for missing credentials or user not found
            header("Location: https://conceptography.org/tmbciadminloginerror.php?error=user-not-found&alert_class=alert-danger");
            exit();
        }
    } else {
        // Redirect with alert class for database query failure
        header("Location: https://conceptography.org/tmbciadminloginerror.php?error=db-query-failed&alert_class=alert-danger");
        exit();
    }
}
?>
