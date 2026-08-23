<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Registration Successful</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Base Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background-color: #f8fafc;
            /* Dotted background to match the registration page */
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 24px 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }

        /* Welcome Card Container */
        .welcome-card {
            background: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 3rem 2.5rem;
            border-radius: 10px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025);
            text-align: center;
        }

        /* Success Icon */
        .icon-container {
            width: 80px;
            height: 80px;
            background-color: #e0e7ff; /* Light purple background */
            color: #554add; /* Brand purple */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem auto;
        }

        /* Typography */
        .welcome-card h1 {
            color: #0f172a;
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .welcome-card p {
            color: #64748b;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        /* Call to Action Button */
        .btn-continue {
            display: inline-block;
            width: 100%;
            background-color: #554add;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            padding: 0.9rem;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-continue:hover {
            background-color: #4338ca;
        }

        .btn-continue:active {
            transform: scale(0.98);
        }

        /* Mobile Responsiveness */
        @media (max-width: 500px) {
            .welcome-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <!-- Checkmark Icon -->
        <div class="icon-container">
            <i class="fa-solid fa-check"></i>
        </div>
        
        <!-- Welcome Message -->
        <h1>Welcome Wittian!</h1>
        <p>Your student account has been successfully created. You can now access your student portal and view your dashboard.</p>
        
        <!-- Continue Button -->
        <a href="login.php" class="btn-continue">Logout</a>
    </div>

</body>
</html>