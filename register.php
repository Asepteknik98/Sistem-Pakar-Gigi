<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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

        .register-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .register-container h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .register-container label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
        }

        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .register-container button {
            background-color: #007bff;
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

        .register-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="proses_register.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
