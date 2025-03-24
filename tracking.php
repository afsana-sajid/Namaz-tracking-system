<?php
$host = 'localhost';
$db = 'final';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// DELETE RECORD
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM namaz_records WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully.'); window.location.href='namaz.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}

// FETCH RECORDS
$sql = "SELECT * FROM namaz_records";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Namaz Tracker</title>
<style>
/* Existing CSS (No Changes to Layout) */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
}
header {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
    color: white;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.5em;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}
nav ul li {
    margin: 0 15px;
}
nav ul li a {
    color: #FFFFFF;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}
.container {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
form input, form select, form textarea {
    padding: 10px;
    font-size: 1em;
    border-radius: 5px;
    border: 1px solid #ccc;
}
footer {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
    color: white;
    text-align: center;
    padding: 15px 0;
    width: 100%;
    margin-top: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}
th {
    background-color: #00bfae;
    color: white;
}
</style>
</head>
<body>
<header>
    <h1>Namaz Tracker</h1>
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
</header>

<div class="container">
    <form action="insert.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <label for="namaz_name">Namaz Name:</label>
        <input type="text" id="namaz_name" name="namaz_name" required>
        <label for="status">Namaz Status:</label>
        <select id="status" name="status" required>
            <option value="Completed">Completed</option>
            <option value="Missed">Missed</option>
        </select>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <h2>Namaz Tracker Records</h2>
    <table>
        <tr><th>Name</th><th>Email</th><th>Address</th><th>Namaz Name</th><th>Status</th><th>Date</th><th>Time</th><th>Message</th><th>Actions</th></tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['namaz_name']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>

<footer>
    <p>&copy; 2024 Namaz Tracker. All rights reserved.</p>
</footer>

<?php $conn->close(); ?>
</body>
</html>
