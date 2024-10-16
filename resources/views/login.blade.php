<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Fixed width for the container */
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center; /* Centered the title */
        }
        .login-container div {
            margin-bottom: 15px;
        }
        .login-container label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fas fa-sign-in-alt"></i> Login</h2>
        <form id="loginForm" onsubmit="return handleLogin(event)">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
        function handleLogin(event) {
            event.preventDefault(); // Prevent default form submission
            const username = document.getElementById('username').value;

            // Redirect based on username
            if (username === 'admin') {
                window.location.href = '/home';
            } else if (username === 'user') {
                window.location.href = '/userhome';
            } else {
                alert('Invalid username'); // Optional: Handle invalid usernames
            }
        }
    </script>
</body>
</html>
