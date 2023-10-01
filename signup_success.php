<!DOCTYPE html>
<html>
<head>
    <title>Signup Success</title>
</head>
<body>
    <h1>Welcome <?php echo htmlspecialchars($_GET['username']); ?>!</h1>
    <p>Congratulations! You have successfully signed up.</p>
    <p>Your email address: <?php echo htmlspecialchars($_GET['email']); ?></p>
    <!-- Add any other relevant information you want to display -->
</body>
</html>
