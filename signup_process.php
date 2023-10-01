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
    header("Location: signup_success.php?username=" . urlencode($username) . "&email=" . urlencode($email));
    exit();
}
?>
