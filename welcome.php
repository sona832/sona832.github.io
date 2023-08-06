<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php session_start(); echo $_SESSION['username']; ?>!</h1>
    <p>This is a protected page. Only logged-in users can see this.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
