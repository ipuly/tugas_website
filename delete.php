<?php
include("config.php");
if( isset($_GET['id']) ){
 // ambil id dari query string
 $mhs = $_GET['id'];
 // buat query hapus
 $sql = "DELETE FROM mahasiswa WHERE nim=$mhs";
 $query = mysqli_query($koneksi, $sql);
 // apakah query hapus berhasil?
 if( $query ){
 header('Location: index.php?pesan= Berhasil Hapus');
 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>