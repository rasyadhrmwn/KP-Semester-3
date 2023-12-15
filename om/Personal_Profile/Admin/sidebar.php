<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style admin.css">
    <style>
        body {
            background-color: white;
            color: #092131;
        }
    </style>
    
</head>

<body>
    <div class="side">
        <h1>MENU</h1>
        <ul>
            <li><a href="home.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="data.php"><i class="fa-solid fa-file" style="padding-right:7px"></i>Data Feedback</a></li>
            <li>
                <a style="margin-top: 500px; margin-left:30%" href="login.php" onclick="logout()">
                    <button class="btn btn-success" style="text-align: center">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
