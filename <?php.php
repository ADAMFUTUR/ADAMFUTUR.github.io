<?php
// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform any necessary validations and database operations here
    // For example, you can validate the input, store the data in a database, etc.
    // For simplicity, we'll assume the data is valid and proceed to display the signup success page.

    // Redirect to the signup success page with the user's information
    header("Location: signup.php?username=" . urlencode($username) . "&email=" . urlencode($email));
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Success</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_GET['username']); ?>!</h1>
    <p>Congratulations! You have successfully signed up.</p>
    <p>Your email address: <?php echo htmlspecialchars($_GET['email']); ?></p>
    <!-- Add any other relevant information you want to display -->
</body>
</html>
