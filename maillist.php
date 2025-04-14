<?php
$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCImaillist");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html?alert=invalid_email");
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT Email FROM mail WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header("Location: index.html?alert=email_exists");
        exit;
    }

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO mail (Name, Email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    if ($stmt->execute()) {
        header("Location: index.html?alert=success");
    } else {
        header("Location: index.html?alert=error");
    }

    $stmt->close();
    $conn->close();
}
?>
