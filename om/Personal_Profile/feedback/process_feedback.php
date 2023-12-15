<?php
include( "../kp2/config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST[ 'submit' ])){
 // ambil data dari formulir
 $nama = $_POST[ 'nama' ];
 $email = $_POST[ 'email' ];
 $pesan = $_POST[ 'pesan' ];
 // buat query
 $sql = "INSERT INTO feedback (nama, email, pesan) VALUE ('$nama', '$email', '$pesan')" ;
 $query = mysqli_query( $db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.html dengan status=sukses
 header( 'Location: ../KP2/index.html?status=sukses' );
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header( 'Location: feedback.php?status=gagal' );
 }
} 
?>