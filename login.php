<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST["password"]);

    // Simple output (just for demo – don't show passwords in real apps)
    $message = "Login Info Received:<br>
                Username: $username <br>
                Email: $email <br>
                Password: $password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login Page</title>
  <style>
    body {
      background-color: #e9f5ec;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-container {
      background-color: #d0e8d0;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 64, 32, 0.2);
      width: 100%;
      max-width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #355e3b;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #a3c9a8;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #355e3b;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #2e4f31;
    }

    .response {
      margin-top: 20px;
      background-color: #ffffff;
      padding: 15px;
      border-radius: 10px;
      color: #355e3b;
      font-size: 14px;
      border: 1px solid #cce3d1;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>

    <?php if (isset($message)): ?>
      <div class="response"><?php echo $message; ?></div>
    <?php endif; ?>
  </div>

</body>
</html>
