<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
            color: #555555;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .login-container label.checkbox {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .login-container .container {
            background-color: #f1f1f1;
            padding: 16px;
            border-radius: 10px;
            text-align: center;
        }

        .login-container .cancelbtn {
            background-color: #f44336;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .login-container .cancelbtn:hover {
            background-color: #d32f2f;
        }

        .login-container .psw a {
            color: #3498db;
        }
    </style>
    <title>Login Form</title>
</head>
<body>

   

<div class="login-container">
    <h2>Login</h2>

    <form action="login" method="post">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>


        <label class="checkbox">
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

        <button type="submit">Submit</button>

        <div class="container">
            <span class="psw">Forgot <a href="#">password?</a></span> &nbsp;&nbsp;
            <span class="sign"><a href="registerform">Register</a></span>
        </div>
    </form>
</div>

</body>
</html>
