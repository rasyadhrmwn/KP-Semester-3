<?php
include( "config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST[ 'submit' ])){
 // ambil data dari formulir
 $tanggal = date("d-m-Y");
 $nama = $_POST[ 'nama' ];
 $email = $_POST[ 'email' ];
 $feedback = $_POST[ 'feedback' ];
 // buat query
 $sql = "INSERT INTO feedback (tanggal,nama, email, feedback) VALUE ('$tanggal', '$nama', '$email', '$feedback')" ;
 $query = mysqli_query( $db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header( 'Location: portofolio.php?status=sukses' );
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header( 'Location: portofolio.php?status=gagal' );
 }
} else {
 die( "Akses dilarang..." );
}
?>