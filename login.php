<?php
session_start();
require "db.php";

$email = $_POST["email"] ?? "";
$password = $_POST["password"]?? "";

if (empty($email) || empty($password)){
        $error = "Please enter email and password.";
    } else {
        $sql = "SELECT id, username, password FROM user WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result&& $result ->num_rows > 0) {
            $user = $result->fetch_assoc();
                
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
               
                header("Location: landing.php");
                exit();
            } else {
                $error = "Invalid Username or Password.";
            }
    }
    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="account-card">
        <div class="card-header">
            <h2>Login</h2>
        </div>

        <?php if (!empty($error)): ?>
            <p class="error-message">
                <?= htmlspecialchars($error) ?>
            </p>
        <?php endif; ?>

        <form class="account-form" action="login.php" method="POST">

            <div class="form-row">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
            </div>

            <button type="submit" name="login" class="submit-btn">
                Login
            </button>
            <p class="login-link">You dont have an account? <a href="index.php">Register here.</a></p>
        </form>
    </div>
</body>
</html>
