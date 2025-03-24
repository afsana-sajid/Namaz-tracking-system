<?php
// Database connection
$host = 'localhost';
$db = 'final';
$user = 'root';
$pass = '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_message = $error_message = "";

// Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate fields
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert using prepared statement
        $sql_insert = $conn->prepare("INSERT INTO support_requests (name, email, message) VALUES (?, ?, ?)");
        $sql_insert->bind_param("sss", $name, $email, $message);

        if ($sql_insert->execute()) {
            $success_message = "Your message has been successfully submitted!";
        } else {
            $error_message = "Error: " . $conn->error;
        }
        $sql_insert->close();
    } else {
        $error_message = "All fields are required.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        /* Header */
        header {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav ul {
            list-style: none;
            font-size: 18px;
            display: flex;
            padding: 0;
            margin: 0;
        }
        header nav ul li {
            margin: 0 15px;
        }
        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        header nav ul li a:hover {
            color: #FFD700;
        }
        .logout-button {
            background-color: #FF6347;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .logout-button:hover {
            background-color: #FF4500;
        }
        /* Main Content */
        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #009688;
            margin-bottom: 20px;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-form label {
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
            width: 100%;
        }
        .contact-form input, .contact-form textarea {
            margin-top: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .contact-form button {
            background-color: #009688;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            width: 100%;
        }
        .contact-form button:hover {
            background-color: #00796b;
        }
        /* Messages */
        .success-message, .error-message {
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            font-weight: bold;
        }
        .success-message {
            background-color: #4caf50;
            color: white;
        }
        .error-message {
            background-color: #f44336;
            color: white;
        }
        /* Footer */
        footer {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        .ayat-section {
            background-color: #e0f2f1;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="namaz.php">Home</a></li>
                <li><a href="namaz-timing.php">Prayer Times</a></li>
                <li><a href="namaz-step.php">Namaz Steps</a></li>
                <li><a href="wazu-guide.php">Wazu Guide</a></li>
                <li><a href="thajjud.php">Tahhajud Namaz</a></li>
                <li><a href="quran.php">Quran Pak</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
        <a href="logout.php" class="logout-button">Logout</a>
    </header>

    <!-- Main Content -->
    <div class="container">
        <h1>Contact Support</h1>

        <!-- Ayat Section -->
        <div class="ayat-section">
            <p><strong>Ayat:</strong> "وَقُل رَّبِّ زِدْنِى عِلْمًۭا" (Surah Taha 20:114)</p>
            <p><strong>Translation:</strong> "And say, 'My Lord, increase me in knowledge.'" (20:114)</p>
        </div>

        <!-- Success/Error Messages -->
        <?php if (!empty($success_message)): ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php elseif (!empty($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Contact Form -->
        <form class="contact-form" action="support.php" method="POST">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Message</label>
            <textarea name="message" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Namaz Tracking System. All rights reserved.</p>
    </footer>
</body>
</html>
