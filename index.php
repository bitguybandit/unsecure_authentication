<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wit Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="account-card">
        <div class="card-header">
            <h2>Create Account</h2>
            <p>Join us today! Please fill in your details below.</p>
        </div>

        <form class="account-form" action="register.php" method="POST">
            <!-- Row 1: Names -->
            <div class="form-row">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="e.g. Jane" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" placeholder="e.g. Doe" required>
                </div>
            </div>

            <!-- Row 2: Age & Gender -->
            <div class="form-row">
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" placeholder="18" min="1">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select>
                </div>
            </div>

            <!-- Row 3: Address -->
            <div class="form-row full-width">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="123 Main Street" required>
                </div>
            </div>

            <!-- Row 4: Email & Username -->
            <div class="form-row">
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-envelope left-icon"></i>
                        <input type="email" name="email" placeholder="jane@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-circle-user left-icon"></i>
                        <input type="text" name="username" placeholder="janedoe99" required>
                    </div>
                </div>
            </div>

            <!-- Row 5: Passwords -->
            <div class="form-row">
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-lock left-icon"></i>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-lock left-icon"></i>
                        <input type="password" name="confirm_password" placeholder="••••••••" required>
                    </div>
                </div>
            </div>

            <button type="submit" name="register" class="submit-btn">Register</button>
            
            <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>

</body>
</html>