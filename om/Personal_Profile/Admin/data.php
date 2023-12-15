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

    <div class="isi" style="margin-left:90px;">
        <header>
            <h3 class="h3">Feedback List</h3>
        </header>
        <br>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("config.php");
    
    
                $sql = "SELECT * FROM feedback ORDER BY id DESC";
                $query = mysqli_query($db, $sql);
                $NO = 1;
                while ($feedback = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $NO . "</td>";
                    echo "<td>" . $feedback['date_add'] . "</td>";
                    echo "<td>" . $feedback['nama'] . "</td>";
                    echo "<td>" . $feedback['email'] . "</td>";
                    echo "<td id='message'>" . $feedback['pesan'] . "</td>";
                    echo "<td><a href='hapus.php?ID=" . $feedback['id'] . "' class='btn btn-danger' onclick='return confirmDelete()'>";
                    echo "<i class='fas fa-trash-alt'></i></a></td>"; // Assuming you're using Font Awesome
                    echo "</tr>";
                    $NO++;
                }
            ?>
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete() {
        return confirm("Yakin ingin menghapus data?");
        }
        // Fungsi untuk mensensor kata-kata kasar
    function sensorKataKasar(teks) {
        // Daftar kata-kata kasar yang ingin di-sensor
        var kataKasar = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
        
        // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
        for (var i = 0; i < kataKasar.length; i++) {
            var regex = new RegExp(kataKasar[i], "gi");
            teks = teks.replace(regex, '*');
        }
        
        return teks;
    }

    // Jalankan fungsi sensor setelah halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        var messages = document.querySelectorAll('#message');
        messages.forEach(function (message) {
            // Dapatkan teks pesan
            var teksPesan = message.innerHTML;                                                                                      
            
            // Sensor kata-kata kasar
            var teksSensor = sensorKataKasar(teksPesan);

            // Terapkan teks yang sudah disensor ke dalam elemen
            message.innerHTML = teksSensor;
        });
    });
    </script>
</body>
