<?php
session_start();

// DB connection
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCIsignup");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $_SESSION['alert_message'] = 'Please enter both username and password.';
        $_SESSION['alert_class'] = 'alert-danger';
        header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
        exit();
    }

    $query = "SELECT Password FROM users WHERE Username = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($passwordFromDatabase);
        $stmt->fetch();
        $stmt->close();

        if (!empty($passwordFromDatabase)) {
            if ($password === $passwordFromDatabase) {
                header("Location: https://conceptography.org/tmbcicommunitylogout.php");
                exit();
            } else {
                $_SESSION['alert_message'] = 'Incorrect username or password.';
                $_SESSION['alert_class'] = 'alert-danger';
                header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
                exit();
            }
        } else {
            $_SESSION['alert_message'] = 'User not found.';
            $_SESSION['alert_class'] = 'alert-danger';
            header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
            exit();
        }
    } else {
        $_SESSION['alert_message'] = 'Something went wrong. Please try again.';
        $_SESSION['alert_class'] = 'alert-danger';
        header("Location: https://conceptography.org/tmbcicommunityloginerror.php");
        exit();
    }
}
?>
