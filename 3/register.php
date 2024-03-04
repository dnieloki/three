<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
<?php 
    include "header.php";
	
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<div class="container">
<h2>Form Registrasi</h2>
    <form action="register_aksi.php" method="post">
    <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
        </div>
    <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
        </div> 
    <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
        </div>
    <div class="mb-3">
            <label for="namalengkap">Nama Lengkap:</label>
            <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan Nama Lengkap" name="namalengkap">
        </div>
    <div class="mb-3">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
        </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>