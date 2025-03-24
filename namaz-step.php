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
 background-color: #f5f5f5;
 height: 100vh;
 display: flex;
 flex-direction: column;
 }
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
 .main-content {
 text-align: center;
 padding: 40px 20px;
 flex: 1;
 }
 .main-content h1 {
 color: #009688;
 margin-bottom: 20px;
 }
 .namaz-images {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    padding: 20px;
}

.namaz-images a {
    text-decoration: none;
    text-align: center;
}

.namaz-images img {
    width: 120px;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.namaz-images img:hover {
    transform: scale(1.1);
}

.namaz-description {
    font-size: 14px;
    color: #333;
    margin-top: 5px;
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
 .steps-list {
 text-align: left;
 padding: 20px;
 margin: 20px auto;
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 border-radius: 8px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 width: 80%;
 line-height: 1.6;
 font-size: 18px;
color:white;
 }
 .steps-list ol {
 margin-left: 20px;
 }
 /* Footer */
 footer {
 background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 150, 136, 0.7));
 color: #FFFFFF;
 padding: 50px;
 text-align: center;
 }
 footer p {
 font-size: 1rem;
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
 <h1>Steps to perform namaz</h1>
 <p><b> وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ َ</b></p>
 <p>"اور نماز قائم کرو، زکوٰۃ ادا کرو، اور رکوع کرنے والوں کے ساتھ رکوع کرو۔"</p>
 <!-- Namaz Steps Section-->
 <div class="steps-list">
 <h2>Steps to Perform Namaz</h2>
 <ol>
 <li>Prepare for Salah (Wudu and Cleanliness)
 <ul>
 <li>Perform Wudu (ablution) if not already done.</li>
 <li>Ensure that your clothes, body, and prayer area are clean.</li>
 </ul>
 </li>
 <li>Stand Facing Qibla
 <ul>
<li>Stand upright facing the Qibla (the direction of the Kaaba in Mecca).</li>
 <li>Intend in your heart the specific prayer you are offering (e.g., Fajr, Zuhr).</li>
 </ul>
 </li>
 <li>Begin with Takbir (Allahu Akbar)
 <ul>
 <li>Raise both hands to shoulder or ear level.</li>
 <li>Say "Allahu Akbar" (Allah is the Greatest).</li>
 </ul>
 </li>
 <li>Stand (Qiyam)
 <ul>
 <li>Place your hands on your chest, with the right hand over the left.</li>
 <li>Recite Surah Al-Fatiha followed by another surah (e.g., Surah Ikhlas).</li>
 </ul>
 </li>
 <li>Bow (Ruku)
 <ul>
 <li>Say "Allahu Akbar" and bow.</li>
 <li>Keep your back straight and hands on your knees.</li>
 <li>Recite "Subhana Rabbiyal Adheem" (Glory to my Lord, the Most Great) three times.</li>
 </ul>
 </li>
 <li>Rise from Ruku
 <ul>
 <li>Stand up straight and say "Sami'Allahu Liman Hamidah" (Allah hears those who praise
 Him).</li>
 <li>Say "Rabbana Lakal Hamd" (Our Lord, to You is due all praise).</li>
 </ul>
 </li>
 <li>Prostrate (Sujood)
 <ul>
 <li>Say "Allahu Akbar" and go into prostration.</li>
 <li>Place your forehead, nose, palms, knees, and toes on the ground.</li>
 <li>Recite "Subhana Rabbiyal A'la" (Glory to my Lord, the Most High) three times.</li>
 </ul>
 </li>
 <li>Sit (Jalsa)
 <ul>
 <li>Say "Allahu Akbar" and sit back on your legs.</li>
 <li>Recite "Rabbighfir Li" (My Lord, forgive me).</li>
 </ul>
 </li>
 <li>Second Prostration (Sujood)
 <ul>
 <li>Say "Allahu Akbar" and perform a second prostration, repeating "Subhana Rabbiyal A'la"
 three times.</li>
 </ul>
 </li>
 <li>Stand for the Next Rak'ah
 <ul>
 <li>Say "Allahu Akbar" and stand up to begin the next unit of prayer (Rak'ah).</li>
 </ul>
 </li>
 <li>Sitting for Tashahhud (Final Sitting)
 <ul>
 <li>After the second Rak'ah (or last Rak'ah of the prayer), sit and recite:</li>
<li>"At-Tahiyyatu Lillahi wa-s-Salawatu wa-t-Tayyibat. Assalamu 'Alaika Ayyuhan-Nabiyyu wa
 Rahmatullahi wa Barakatuh. Assalamu 'Alaina wa 'Ala 'Ibadillahis-Saliheen. Ashhadu An La Ilaha Illa
 Allah, wa Ashhadu Anna Muhammadan Abduhuwa Rasuluh."</li>
 </ul>
 </li>
 <li>Send Salutations (Durud)
 <ul>
 <li>Recite "Allahumma Salli Ala Muhammadin wa Ala Ali Muhammadin..."</li>
 </ul>
 </li>
 <li>End with Salam
 <ul>
 <li>Turn your head to the right and say "Assalamu Alaikum wa Rahmatullah".</li>
 <li>Repeat to the left side.</li>
 </ul>
 </li>
 </ol>
 </div>
 <h1>Some pictures to show the steps in namaz </h1>
<div class="namaz-images">
    <!-- Step 1 -->
    <a href="step1.php">
        <img src="image1.jpg" alt="Step 1: Standing">
        <div class="namaz-description">Step 1: Standing (Qiyam)</div>
    </a>

    <!-- Step 2 -->
    <a href="step2.php">
        <img src="image2.jpg" alt="Step 2: Raising Hands">
        <div class="namaz-description">Step 2: Raising Hands (Takbir)</div>
    </a>

    <!-- Step 3 -->
    <a href="step3.php">
        <img src="image3.jpg" alt="Step 3: Reciting Fatiha">
        <div class="namaz-description">Step 3: Reciting Surah Fatiha</div>
    </a>

    <!-- Step 4 -->
    <a href="step4.php">
        <img src="image4.jpg" alt="Step 4: Bowing">
        <div class="namaz-description">Step 4: Bowing (Ruku)</div>
    </a>

    <!-- Step 5 -->
    <a href="step5.php">
        <img src="image5.jpg" alt="Step 5: Rising from Ruku">
        <div class="namaz-description">Step 5: Rising from Ruku</div>
    </a>

    <!-- Step 6 -->
    <a href="step6.php">
        <img src="image6.jpg" alt="Step 6: Prostration">
        <div class="namaz-description">Step 6: Prostration (Sujood)</div>
    </a>

    <!-- Step 7 -->
    <a href="step7.php">
        <img src="image7.jpg" alt="Step 7: Sitting">
        <div class="namaz-description">Step 7: Sitting Between Sujood</div>
    </a>

    <!-- Step 8 -->
    <a href="step8.php">
        <img src="image8.jpg" alt="Step 8: Second Sujood">
        <div class="namaz-description">Step 8: Second Sujood</div>
    </a>

    <!-- Step 9 -->
    <a href="step9.php">
        <img src="image9.jpg" alt="Step 9: Returning to Qiyam">
        <div class="namaz-description">Step 9: Returning to Standing</div>
    </a>

    <!-- Step 10 -->
    <a href="step10.php">
        <img src="image10.jpg" alt="Step 10: Reciting Tashahhud">
        <div class="namaz-description">Step 10: Reciting Tashahhud</div>
    </a>

    <!-- Step 11 -->
    <a href="step11.php">
        <img src="image11.jpg" alt="Step 11: Sending Salutations">
        <div class="namaz-description">Step 11: Sending Salutations (Durood)</div>
    </a>

    <!-- Step 12 -->
    <a href="step12.php">
        <img src="image12.jpg" alt="Step 12: Supplication">
        <div class="namaz-description">Step 12: Final Supplication (Dua)</div>
    </a>

    <!-- Step 13 -->
    <a href="step13.php">
        <img src="image13.jpg" alt="Step 13: Salam (Ending Prayer)">
        <div class="namaz-description">Step 13: Saying Salam (Ending)</div>
    </a>

    <!-- Step 14 -->
    <a href="step14.php">
        <img src="image14.jpg" alt="Step 14: Reflection after Prayer">
        <div class="namaz-description">Step 14: Reflection after Prayer</div>
    </a>

    <!-- Step 15 -->
    <a href="step15.php">
        <img src="image15.jpg" alt="Step 15: Sunnah & Nafl Prayers">
        <div class="namaz-description">Step 15: Sunnah & Nafl Prayers</div>
    </a>

    <!-- Step 16 -->
    <a href="step16.php">
        <img src="image16.jpg" alt="Step 16: Daily Duas & Dhikr">
        <div class="namaz-description">Step 16: Daily Duas & Dhikr</div>
    </a>
</div>

</body>
</html>

 <!-- Footer-->
 <footer>
 <p>&copy; 2024 Namaz Tracking System. All rights reserved.</p>
 </footer>
 </body>
 </html>