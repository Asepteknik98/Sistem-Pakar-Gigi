<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .login-container h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .register-link {
            margin-top: 15px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="proses_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <button type="submit">Login</button>
        </form>
        
        <div class="register-link">
            <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
        </div>
    </div>
</body>
</html>
