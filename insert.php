<?php
$host = 'localhost';
$db = 'final';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set and not empty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $namaz_name = isset($_POST['namaz_name']) ? $_POST['namaz_name'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $time = isset($_POST['time']) ? $_POST['time'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Ensure no empty values (optional validation)
    if (empty($name) || empty($email) || empty($address) || empty($namaz_name) || empty($status) || empty($date) || empty($time) || empty($message)) {
        die("Error: All fields are required.");
    }

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO namaz_records (name, email, address, namaz_name, status, date, time, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $address, $namaz_name, $status, $date, $time, $message);

    if ($stmt->execute()) {
        echo "Record added successfully.";
        header("Location: namaz.php"); // Redirect to main page after insertion
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
