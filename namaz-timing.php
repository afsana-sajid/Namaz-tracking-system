 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Namaz Timing</title>
 <style>
 * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 }
 body {
 font-family: Arial, sans-serif;
 background-color: #f5f5f5; /* Light shade background */
 height: 100vh;
 display: flex;
 flex-direction: column;
 }
 /* Header */
 header {
 display: flex;
 align-items: center;
 justify-content: space-between;
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 padding: 10px 20px;
 color: white;
 }
 nav {
 flex-grow: 1;
 }
 nav ul {
list-style: none;
 display: flex;
 justify-content: center;
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
 background-color: #FF6347;
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
 background-color: #FF4500;
 }
 p {
 font-size: 25px;
 }
 /* Main Content */
 .main-content {
 text-align: center;
 padding: 40px 20px;
 flex: 1;
 }
 .main-content h1 {
 color: #009688;
 margin-bottom: 20px;
 }
 table {
 width: 80%;
 margin: 20px auto;
border-collapse: collapse;
 background-color: #FFFFFF; /* White table background */
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
 }
 table th, table td {
 padding: 15px;
 text-align: center;
 border: 1px solid #ddd;
 }
 table th {
 background: #009688;
 color: white;
 }
 table tr:nth-child(even) {
 background-color: #f9f9f9; /* Light row shading */
 }
 table tr:hover {
 background-color: #e0f2f1; /* Highlight on hover */
 }
 .namaz-images {
 display: flex;
 justify-content: space-around;
 flex-wrap: wrap;
 margin: 20px 0;
 }
 h1 {
 font-size: 40px;
 font-family: bold;
 }
 .namaz-image {
 width: 300px;
 height: 300px;
 background-color: #ffffff;
 border-radius: 10px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 overflow: hidden;
 cursor: pointer;
 transition: transform 0.3s ease, box-shadow 0.3s ease;
 }
 .section-header {
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 color: white;
 text-align: center;
 padding: 20px;
 font-size: 24px;
 font-weight: bold;
 }
 .section-content {
background-color: #ffffff;
 color: #555555;
 text-align: left;
 padding: 20px;
 margin: 10px auto;
 width: 80%;
 border-radius: 8px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 font-size: 18px;
 line-height: 1.6;
 }
 .namaz-image img {
 width: 100%;
 height: 100%;
 object-fit: cover;
 }
 .namaz-images {
 display: flex;
 justify-content: center;
 gap: 20px;
 flex-wrap: wrap;
 }
 .namaz-card {
 width: 200px;
 background-color: #ffffff;
 border-radius: 10px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 overflow: hidden;
 text-align: center;
 transition: transform 0.3s ease, box-shadow 0.3s ease;
 }
 .namaz-card img {
 width: 100%;
 height: 150px;
 object-fit: cover;
 }
 .namaz-card:hover {
 transform: scale(1.05);
 box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
 }
 .namaz-description {
 padding: 10px;
 background-color: #009688;
 color: white;
 font-weight: bold;
 }
 footer {
 width: 100%;
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
color: #FFFFFF;
 padding: 50px;
 text-align: center;
 margin: 0;
 }
 footer p {
 font-size: 1rem;
 }
 pre {
 font-size: 17px;
 }
 </style>
 </head>
 <body>
 <!-- Header-->
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
 <!-- Main Content-->
 <div class="main-content">
 <h1>Namaz Timings</h1>
 <p><b> إِنَّ الصَّلَاةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَابًا مَوْقُوتًا </b></p>
 <p>بے شک نماز مومنوں پر مقررہ وقت میں فرض کی گئی ہے"۔"</p>
 <p> (سورۃ النساء 4:103)</p>
 <br>
 <table>
 <tr>
 <th>Prayer</th>
 <th>Start Time</th>
 <th>End Time</th>
 </tr>
 <tr>
 <td>Fajr</td>
 <td>5:30 AM</td>
 <td>6:15 AM</td>
 </tr>
 <tr>
 <td>Dhuhr</td>
 <td>12:30 PM</td>
 <td>1:15 PM</td>
 </tr>
 <tr>
<td>Asr</td>
 <td>3:45 PM</td>
 <td>4:30 PM</td>
 </tr>
 <tr>
 <td>Maghrib</td>
 <td>5:30 PM</td>
 <td>6:00 PM</td>
 </tr>
 <tr>
 <td>Isha</td>
 <td>7:00 PM</td>
 <td>8:00 PM</td>
 </tr>
 </table>
 </div>
 <br><br>
 <div class="section-header">
 The Significance of Namaz (Prayer) in Islam
 </div>
 <div class="section-content">
 Namaz, also referred to as Salah, is a foundational pillar of Islam, symbolizing a deep spiritual
 connection between the believer and Allah. It is performed five times daily at prescribed intervals:
 Fajr (before dawn), Dhuhr (midday), Asr (afternoon), Maghrib (after sunset), and Isha (night). Namaz
 is more than a physical ritual—it is a profound act of worship that nurtures spiritual growth and
 reinforces a Muslim's devotion to Allah.
 </div>
 <div class="section-header">
 The Spiritual Dimensions of Namaz
 </div>
 <div class="section-content">
 Namaz transcends its physical performance, offering immense spiritual benefits. It serves as a
 constant reminder of Allah’s greatness and provides a pathway for the believer to seek forgiveness
 and guidance. Through the act of bowing and prostration, a Muslim expresses humility, gratitude, and
 submission to Allah. These gestures symbolize a recognition of one’s dependence on the Creator.
 Moreover, Namaz fosters moments of introspection. The recitation of Quranic verses, including
 Surah Al-Fatiha, encourages worshipers to reflect on their actions, renew their intentions, and seek
 alignment with divine guidance. This introspection strengthens personal discipline, enriches faith, and
 fosters a purposeful life grounded in Islamic principles.
 </div>
 <div class="section-header">
 The Physical Benefits of Namaz
 </div>
 <div class="section-content">
 Beyond its spiritual significance, Namaz offers notable physical advantages. The various postures—
 standing, bowing, and prostrating—engage the entire body, promoting flexibility, muscle strength,
 and improved circulation. Prostration (sujood), in particular, enhances blood flow to the brain,
 contributing to better mental clarity and focus.
 The structured timing of Namaz instills discipline, helping individuals organize their day effectively
 while maintaining physical activity and energy levels.
 </div>
 <div class="section-header">
Namaz as a Means ofSeeking Forgiveness
 </div>
 <div class="section-content">
 One ofthe most profound aspects of Namaz is its role in spiritual purification and seeking
 forgiveness. Each prayer offers an opportunity to repent sincerely, asking Allah to forgive past
 shortcomings. Through consistent prayer and genuine remorse, believers can cleanse their hearts and
 strengthen their resolve to lead righteous lives.
 Namaz not only provides a mechanism for spiritual renewal but also fosters a deep sense of
 accountability and moral integrity. It reminds the worshiper of Allah’s infinite mercy and encourages
 them to strive for continuous self-improvement.
 </div>
 <!-- Namaz Images Section-->
 <div class="namaz-images">
 <div class="namaz-card">
 <img src="555.jfif" alt="Fajr Namaz">
 <div class="namaz-description">Namaz is a daily prayer in Islam.</div>
 </div>
 <div class="namaz-card">
 <img src="444.jfif" alt="Dhuhr Namaz">
 <div class="namaz-description">It connects believers with Allah.</div>
 </div>
 <div class="namaz-card">
 <img src="333.jfif" alt="Asr Namaz">
 <div class="namaz-description">Muslims pray five times a day.</div>
 </div>
 <div class="namaz-card">
 <img src="11.jfif" alt="Maghrib Namaz">
 <div class="namaz-description">Namaz promotes discipline and peace.</div>
 </div>
 <div class="namaz-card">
 <img src="222.jfif" alt="Isha Namaz">
 <div class="namaz-description">It includes specific actions and recitations</div>
 </div>
 <footer>
 <p>&copy; 2024 Namaz Tracking System. All rights reserved.</p>
 </footer>
 </body>
 </html