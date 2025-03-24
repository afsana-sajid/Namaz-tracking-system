<?php
 session_start();
 if (!isset($_SESSION['email'])) {
 header("Location: login.php");
 exit();
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Namaz Tracking System</title>
 <style>
 * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 }
 body {
 font-family: Arial, sans-serif;
 height: 100vh;
 overflow: hidden;
 position: relative;
 }
 .video-background {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 object-fit: cover;
 z-index: -1;
 }
 .overlay {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 background: rgba(0, 0, 0, 0.3);
 z-index: 1;
 }
 header {
 display: flex;
 align-items: center;
 justify-content: space-between;
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 padding: 10px 20px;
 z-index: 2;
 position: relative;
 }
 nav {
 flex-grow: 1;
 }
 nav ul {
 list-style: none;
 display: flex;
 justify-content: center; /* Center the menu */
 margin: 0;
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
 nav ul li a:hover {
 color: #FFD700;
 }
 .logout-button {
 background-color: #FF6347; /* Tomato Red */
 color: #FFFFFF;
 padding: 10px 20px;
 text-decoration: none;
 font-weight: bold;
 border: none;
 border-radius: 5px;
 cursor: pointer;
 transition: all 0.3s ease;
 }
 .logout-button:hover {
 background-color: #FF4500; /* Darker Red */
 }
 .hero {
 text-align: center;
 padding: 80px 20px;
 z-index: 2;
 position: relative;
 }
 .hero h1 {
 color: #FFFFFF;
 font-size: 3rem;
 }
 .hero p {
 color: #FFFFFF;
 font-size: 1.2rem;
 margin-top: 10px;
 }
 .cta-button {
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 color: #FFFFFF;
 padding: 10px 20px;
 text-decoration: none;
 font-weight: bold;
 border-radius: 5px;
 transition: all 0.3s ease;
 }
 pre {
 font-size: 18px;
 color: white;
 }
 .cta-button:hover {
 background-color: #FF6347;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
 }
 footer {
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 color: #FFFFFF;
 padding: 20px;
 text-align: center;
 position: fixed;
 bottom: 0;
 width: 100%;
 z-index: 2;
 }
 footer p {
 font-size: 1rem;
 }
 </style>
 </head>
 <body>
 <video autoplay muted playsinline loop class="video-background"
 poster="https://www.muslimpro.com/wp-content/uploads/2024/09/home_img.png">
 <source src="https://download.muslimpro.com/video/website/MP_WEB_HOME.mp4"
 type="video/mp4">
 </video>
 <div class="overlay"></div>
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
 <section class="hero">
 <h1>Welcome to the Namaz Tracking System</h1>
 <br>
 <p class="a">وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ</p>
 <p>’’اور نماز قائم کرو اور زکوٰۃ دو اور رکوع کرنے والوں کے ساتھ رکوع کرو۔‘‘</p>
<p>سورۃ البقرہ  2:43 </p>
 <br>
 <pre>
 Namaz (prayer) is one of the five pillars of Islam and a fundamental act of worship.
 It establishes a direct connection between the worshiper and Allah,
 fostering spiritual discipline and mindfulness. Namaz is performed five times daily,
 emphasizing the importance of regularity, humility, and gratitude. It purifies the soul,
 strengthens faith, and serves as a constant reminder of the purpose of life—to worship and
 obey Allah.
 </pre>
 <br>
 <a href="tracking.php" class="cta-button">Start Tracking</a>
 </section>
 <footer>
 <p>&copy; 2024 Namaz Tracking System. All rights reserved.</p>
 </footer>
 </body>
 </html>
