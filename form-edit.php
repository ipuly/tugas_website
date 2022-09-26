<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
 header('Location: index.php');
}
//ambil id dari query string
$mhs = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$mhs";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
 die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Mahasiswa | Poltek GT</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <style type="text/css">
        .wrapper{
            position: absolute;
            left: 50%;
            top: 30%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <header class="page-header">
                        <h2 align="center">Update Data</h2>
                    </header>

    <div class="container" align="center">
          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="proses-edit.php" method="POST" role="form">
    <input type="hidden" name="id" value="<?php echo $mhs['nim'] ?>" />
    <div>
    <label for="nim">NIM : </label>
 <input class="form-control" type="text" name="nim" readonly placeholder="nim" value="<?php
echo $mhs['nim'] ?>" />
 </div>
 <div class="form-group">
 <label for="nama_lengkap">Nama : </label>
 <input type="text" name="nama_lengkap" placeholder="nama lengkap" value="<?php
echo $mhs['nama_lengkap'] ?>" />
 </div>
 <div class="form-group">
 <label for="tempat_lahir">Tempat Lahir : </label>
 <input type="text" name="tempat_lahir" placeholder="tempat lahir" value="<?php
echo $mhs['tempat_lahir'] ?>" />
 </div>
 <div class="form-group">
 <label for="tanggal_lahir">Tanggal Lahir : </label>
 <input type="date" name="tanggal_lahir" placeholder="tanggal lahir" value="<?php
echo $mhs['tanggal_lahir'] ?>" />
 </div>
 <div class="form-group">
 <label for="email">Email : </label>
 <input type="email" name="email" placeholder="email"value="<?php echo $mhs['email'] ?>" />
 </div>
 <div class="form-group">
 <label for="jurusan">Jurusan : </label>
 <input type="text" name="jurusan" placeholder="Jurusan" value="<?php
echo $mhs['jurusan'] ?>" />
 </div>
 <div class="form-group">
 <label for="no_hp">Nomor Telepon : </label>
 <input type="text" name="no_hp" placeholder="nomor telepon" value="<?php
echo $mhs['no_hp'] ?>" />
 </div>
  <div class="form-group">
 <label for="alamat">Alamat : </label>
 <textarea name="alamat"><?php echo $mhs['alamat'] ?></textarea>
 </div>
 <div>
 <input class="btn btn-primary" type="submit" value="Simpan" name="simpan" />
 <a href="index.php" class="btn btn-primary">Batal</a>
 </div>
 </form>
</div>

</div></div></div></div>
 </body>
</html>
