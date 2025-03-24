<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
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
            font-size: 20px;
            display: flex;
            justify-content: center;
            padding: 0;
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
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #009688;
            text-align: left;
            margin-bottom: 20px;
        }
        h2 {
            color: #00574b;
            margin-top: 20px;
        }
        ul {
            margin: 10px 0 20px 20px;
        }
        li {
            margin: 10px 0;
        }
        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border-radius: 8px;
        }
        footer {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="namaz.php">Home</a></li>
                <li><a href="namaz-timing.php">Prayer Times</a></li>
                <li><a href="namaz-step.php">Namaz Steps</a></li>
                <li><a href="wazu-guide.php">Wazu Guide</a></li>
                <li><a href="thajjud.php">Tahajjud Namaz</a></li>
                <li><a href="quran.php">Quran Pak</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
        <a href="logout.php" class="logout-button">Logout</a>
    </header>
    <div class="container">
        <h1>About Us</h1>
        <h2>Who We Are</h2>
        <p>We are a team of dedicated individuals passionate about spreading knowledge on Islam,
            offering resources, and supporting the Muslim community in learning and practicing their faith.
            Our mission is to create accessible and user-friendly platforms to help people connect with their religion.</p>
        <h2>Our Vision</h2>
        <p>Our vision is to become the leading online platform for Quranic studies, prayer guidance, and religious knowledge,
            with a focus on authenticity and clarity. We aim to create a space where Muslims around the world can
            easily access accurate, trusted resources to grow spiritually.</p>
        <h2>Our Team</h2>
        <p>Our team consists of experts in various fields, including Islamic studies, technology, and education.
            We collaborate to develop the best tools and resources for Muslims who seek to learn more about their faith.</p>
        <h2>Contact Us</h2>
        <p>If you have any questions or feedback, please feel free to reach out to us at
            <strong>afsana@gmail.com</strong>.</p>
        
    </div>
    <footer>
        <p>&copy; 2024 Quran Guide. All rights reserved.</p>
    </footer>
</body>
</html>
