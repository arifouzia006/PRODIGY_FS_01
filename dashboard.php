<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: rgba(0,0,0,0.3);
      padding: 40px;
      border-radius: 15px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: white;
      color: #dd2476;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      background: #f0f0f0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p>You are now logged in to your dashboard.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
