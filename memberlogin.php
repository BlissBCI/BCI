<?php
// Start the session
session_start();

// Database connection
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCIsignup");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form input
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $_SESSION['alert_message'] = 'Please enter both username and password.';
        $_SESSION['alert_class'] = 'alert-danger';
        header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
        exit();
    }

    // Prepare SQL statement
    $query = "SELECT Password FROM users WHERE Username = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Fetch password
            $stmt->bind_result($passwordFromDatabase);
            $stmt->fetch();

            // ✅ Correct way to compare hashed password
            if (password_verify($password, $passwordFromDatabase)) {
                // Login success
                header("Location: https://conceptography.org/tmbcicommunitylogout.php");
                exit();
            } else {
                // Wrong password
                $_SESSION['alert_message'] = 'Incorrect username or password. Please try again.';
                $_SESSION['alert_class'] = 'alert-danger';
                header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
                exit();
            }
        } else {
            // Username not found
            $_SESSION['alert_message'] = 'User not found. Please sign up first.';
            $_SESSION['alert_class'] = 'alert-danger';
            header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
            exit();
        }

        $stmt->close();
    } else {
        // SQL error
        $_SESSION['alert_message'] = 'Something went wrong. Please try again.';
        $_SESSION['alert_class'] = 'alert-danger';
        header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
        exit();
    }
}
?>