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
    <title>Tambah Foto</title>
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
          <a class="nav-link text-white" href="album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_album.php">Tambah Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="foto.php">Gambar</a>
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

<div class="container mt-3">
      <h2>Upload Gambar</h2>
      <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
      <table>
      <div class="mb-3">
            <label for="judulfoto">Judul:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" name="judulfoto">
        </div>
        <div class="mb-3">
            <label for="deskripsifoto">Deskripsi:</label>
            <textarea class="form-control" rows="5" placeholder="Masukkan Deskripsi" name="deskripsifoto"></textarea>
        </div>	
        <div class="mb-3">
			      <label for="gambar">Lokasi File:</label>
			      <input type="file" name="lokasifile">
			      <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
		    </div>

<div class="container mt-3">                                        
    <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Pilih Album</button>
    <ul class="dropdown-menu">
      <select name="albumid">
                    <?php
                        include "koneksi.php";
                        $userid=$_SESSION['userid'];
                        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data=mysqli_fetch_array($sql)){
                    ?>
                            <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                    </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-primary" value="Tambah">Tambah</button></td>
            </tr>
        </table>
    </form>  
        </table>
    </form>