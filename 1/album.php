<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Halaman Album</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/creative-photography-camera-icon-logo-design-template-1f29c6bf9c40cc14a852c33b37d0fd9c_screen.jpg?ts=1597180845" alt="Logo" style="width:60px;" class="rounded-pill">
    </a>
    <h4 class="text-white">Galeri Foto</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_album.php">Tambah Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="foto.php">Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_foto.php">Upload Gambar</a>
        </li>
        <li class="nav-item">
        </li>
      </ul>
     
      <form class="d-flex">
           <a class="btn btn-dark" href="logout.php">Log Out</a> &nbsp;&nbsp;
           <a class="btn btn-light text-dark" href="profile.php">Profil
           <img src="https://i.pinimg.com/736x/7c/7f/94/7c7f943def97d89e7939f41bd2135e4e.jpg" class="rounded-circle" width="30" height="30">
        </a> &nbsp;&nbsp;
        <a class="btn btn-dark" href=""></a>     
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Halaman Album</h1>
  <p>Selamat datang, <b><?=$_SESSION['namalengkap']?></b></p> 
</div>

      <div class="container mt-3">
      <h3>Daftar Album</h3>
      <table class="table">
      <thead class="table-success">
         <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
      </thead>  
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>