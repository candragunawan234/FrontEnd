<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Pengguna</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/styledb.css">
</head>
<body>
  <div class="container">
    <div id="navbar">
      <div class="logo">Sistem Informasi Klinik Melati</div>
      <div class="account" onclick="openAccountPage()"><i class="fas fa-user"></i> Akun</div>
    </div>
  
    <div class="d-flex flex-grow-1">
      <div id="sidebar">
        <ul>
          <li><a href="/dashboard"><i class="fas fa-home"></i> Beranda</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-database"></i> Data Master</a>
            <ul class="dropdown-menu">
              <li><a href="/pemeriksaan"><i class="fas fa-heart fa-xs"></i> Data Pemeriksaan</a></li>
              <li><a href="/kelahiran"><i class="fas fa-baby"></i> Data Kelahiran</a></li>
              <li><a href="/pengguna"><i class="fas fa-users"></i> Data Pengguna</a></li>
              <li><a href="/jadwal"><i class="far fa-calendar-alt"></i> Jadwal</a></li>
            </ul>
          </li>
        </ul>
        <div class="logout">
          <a href="/login" class="btn btn-danger" >Logout</a>
        </div>
      </div>
      <div id="content">
        <div class="center-container">
          <h2>Tambah Data Pengguna</h2>
          
          <form>
            <div class="form-group">
              <label for="nama">Nama Bidan</label>
              <input type="text" class="form-control" id="nama" name="nama" value="Deliza">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="Deliza">
            </div>
            <div class="form-group">
              <label for="username">Kata Sandi</label>
              <input type="text" class="form-control" id="sandi" name="sandi" value="deliza123">
            </div>
            <div class="text-center">
            <a href="/pengguna" type="submit" class="btn btn-primary">Simpan</a>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function openAccountPage() {
      // Kode untuk membuka halaman akun
      console.log('Halaman akun dibuka');
    }
  </script>
</body>
</html>
