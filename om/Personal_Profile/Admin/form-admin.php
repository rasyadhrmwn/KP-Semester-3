<?php include("config.php"); ?>


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

    <?php include("sidebar.php"); ?>

    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $allowedPages = ['home', 'data'];

        if (in_array($page, $allowedPages)) {
            include("$page.php");
        } else {
            echo "<p>Invalid page selected!</p>";
        }
    ?>

    <script>
        function confirmDelete() {
            return confirm("Yakin ingin menghapus data?");
        }

        // Function to censor offensive words
        function sensorKataKasar(teks) {
            // List of offensive words to be censored
            var kataKasar = ["ancuk", "ancok", "ajig", "anjay", "anjg", "anjing", "anying", /*...other words...*/];
            
            // Loop through each offensive word and replace it with '*'
            for (var i = 0; i < kataKasar.length; i++) {
                var regex = new RegExp(kataKasar[i], "gi");
                teks = teks.replace(regex, '*');
            }
            
            return teks;
        }

        // Run the sensor function after the page is loaded
        document.addEventListener("DOMContentLoaded", function () {
            var messages = document.querySelectorAll('#message');
            messages.forEach(function (message) {
                // Get the message text
                var teksPesan = message.innerHTML;
                
                // Censor offensive words
                var teksSensor = sensorKataKasar(teksPesan);

                // Apply the censored text to the element
                message.innerHTML = teksSensor;
            });
        });
    </script>
</body>
</html>
