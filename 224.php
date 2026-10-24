<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Downloading Document</title>
   <link rel="shortcut icon" href="img/favicon.ico">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .container {
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #fff;
      gap: 15px;
      padding-bottom: 20vh;
    }
    .logo {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }
    .download-text {
      font-weight: bold;
      font-size: 16px;
    }
    .spinner {
      width: 40px;
      height: 40px;
      border: 5px solid red;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spinner 0.7s linear infinite;
    }
    @keyframes spinner {
      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="img/adobe-logo.png" alt="Logo" class="logo">
    <div class="download-text">Preparing your Document</div>
    <div class="spinner"></div>
  </div>

  <script>
    setTimeout(() => {
        console.log("Redirecting...");
        window.location.href = 'checking.php';
    }, 2000);
  </script>
</body>
</html>