<?php
session_start();

// Database Connection
$host = 'localhost';
$db = 'final';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Secure input
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;  // Set session
        header("Location: namaz.php"); // Redirect to dashboard
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.muslimpro.com/wp-content/uploads/2025/03/Turning-Point-Web-600x338.png');
            background-size: cover;
            margin: 0;
            padding: 0;
            color: white;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #009688;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            background-color: #009688;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }
        button:hover {
            background-color: #00796b;
        }
        .error-message {
            text-align: center;
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
