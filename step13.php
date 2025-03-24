<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namaz Tracking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            text-align: center;
        }
        header {
            background-color: #004d40;
            color: white;
            padding: 15px;
            font-size: 24px;
        }
        footer {
            background-color: #004d40;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            color: #333;
        }
        .image-container {
            display: flex;
            justify-content: center;
        }
        .image-container img {
            width: 100%;
            max-width: 900px; /* Bigger image */
            height: auto;
            border-radius: 8px;
        }
        .instructions {
            font-size: 18px;
            color: #444;
            margin-top: 10px;
        }
        .buttons {
            margin-top: 15px;
        }
        .buttons button {
            background-color: #004d40;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        .buttons button:hover {
            background-color: #00796b;
        }
    </style>
</head>
<body>

<header>
    Namaz Tracking System
</header>

<div class="container">
    <h2>Step 1: Standing (Qiyam)</h2>
    <div class="image-container">
        <img src="image13.jpg" alt="Namaz Step 1">
    </div>
   
    <div class="buttons">
        <button onclick="goBack()">Back</button>
        <button onclick="goNext()">Next</button>
    </div>
</div>

<footer>
    &copy; 2025 Namaz Tracking System | All Rights Reserved
</footer>

<script>
    function goBack() {
        window.history.back();
    }
    function goNext() {
        window.location.href = "step14.php";
    }
</script>

</body>
</html>
