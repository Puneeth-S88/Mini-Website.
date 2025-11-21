<?php
// ---------- LOGIN PHP BACKEND ----------

// Change these as you want
$valid_user = "admin";
$valid_pass = "1234";

$error = "";

// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_user && $password === $valid_pass) {
        header("Location: login.html");  // Redirect to home page after login
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Feedback System</title>

    <style>
        /* --- YOUR SAME CSS PROVIDED --- */
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(to right, #000000, #2a2a2a, #520000);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .container {
            width: 850px;
            height: 480px;
            display: flex;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.09);
            animation: fadeIn 0.7s ease-in-out;
        }
        .left-panel {
            width: 45%;
            background: rgba(0, 0, 0, 0.45);
            border-radius: 20px 0 0 20px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        .left-panel h1 { font-size: 36px; margin-bottom: 10px; }
        .left-panel p { font-size: 18px; color: #cccccc; }
        .login-box {
            width: 55%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }
        .login-box h2 { font-size: 30px; margin-bottom: 25px; }
        .input-group { margin-bottom: 20px; text-align: left; }
        .input-group label { margin-bottom: 5px; display: block; }
        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            font-size: 16px;
        }
        .login-btn {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            background: rgba(128, 0, 0, 0.9);
            border: none;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="left-panel">
            <h1>Feedback System</h1>
            <p>Welcome to the secure login panel.<br>Enter credentials to continue.</p>
        </div>

        <div class="login-box">
            <h2>Login</h2>

            <!-- SHOW ERROR IF LOGIN FAILS -->
            <?php if ($error) { echo "<p style='color:red; margin-bottom:10px;'>$error</p>"; } ?>

            <form method="POST">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter username" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>

                <button class="login-btn" type="submit">Login</button>
            </form>
        </div>
    </div>

</body>
</html>
