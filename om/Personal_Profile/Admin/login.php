<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: #495057;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg, #00c3ff, #7849e5, #ff00b8, #00c3ff);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .login-box {
            text-align: center;
            width: 400px;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-box h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #495057;
        }

        .login-box input {
            width: 100%;
            height: 50px;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 2px solid #ced4da;
            background-color: #f8f9fa;
            color: #495057;
            font-size: 18px;
            transition: border-color 0.3s;
        }

        .login-box input:focus {
            border-color: #007bff;
        }

        .login-box button {
            border: 0;
            padding: 20px 35px;
            background-color: #007bff;
            font-size: 20px;
            border-radius: 10px;
            color: #ffffff;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
        }

        .login-box button:hover {
            background-color: #0056b3;
            box-shadow: 0 0 30px #007bff;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <form action="proses-login.php" method="POST" >
        <div class="login-box">
            <h1>LOGIN</h1>

            <label for="admin"><b>Username</b></label>
            <input type="text" placeholder="Enter Name" name="nama" required autocomplete="off" >

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required autocomplete="off">

            <button type="submit" name="submit">Login</button>
        </div>
    </form>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputs = document.querySelectorAll('input');
        inputs.forEach(function(input) {
            input.value = '';
        });
    });
</script>


    </script>
</body>

</html>
