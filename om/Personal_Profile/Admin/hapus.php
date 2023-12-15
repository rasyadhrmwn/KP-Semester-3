<?php
include("config.php");
if( isset($_GET['ID']) ){
    // ambil id dari query string
    $ID = $_GET['ID'];
    // buat query hapus
    $sql = "DELETE FROM feedback WHERE ID=$ID";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if( $query ){
    header('Location: data.php');
    } else {
    die("gagal menghapus...");
    }
   } else {
    die("akses dilarang...");
   }
?>