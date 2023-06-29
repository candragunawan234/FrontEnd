<!DOCTYPE html>
<html>
<head>
  <title>Data Pemeriksaan</title>
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
              <li><a href="/pemeriksaan"><i class="fas fa-check"></i> Data Pemeriksaan</a></li>
              <li><a href="/kelahiran"><i class="fas fa-baby"></i> Data Kelahiran</a></li>
            </ul>
          </li>
        </ul>
        <div class="logout">
          <a href="/login" class="btn btn-danger" href>Logout</a>
        </div>
      </div>
      <div id="content">
        <div class="center-container">
            <div style="text-align: left;">
                <a href="/pemeriksaan" class="btn btn-danger btn-sm" style="margin-bottom: 10px; margin-right: 5px; display: inline-block;">
                    <i class="fas fa-plus"></i> Hapus Data
                </a>
                <a href="editpemeriksaan" class="btn btn-warning btn-sm" style="margin-bottom: 10px; display: inline-block;">
                    <i class="fas fa-plus"></i> Edit Data
                </a>
            </div>
            <div id="content">
                <div class="center-container">
                  <h2>Data Pemeriksaan</h2>
                  <div>
                  <form>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="Rifan">
                    </div>
                    <div class="form-group">
                      <label for="kota">Kota</label>
                      <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan kota">
                    </div>
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="no_hp">Nomor HP</label>
                      <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP">
                    </div>
                    <div class="form-group">
                      <label for="jenis_periksa">Jenis Periksa</label>
                      <input type="text" class="form-control" id="jenis_periksa" name="jenis_periksa" placeholder="Masukkan jenis periksa">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                      <label for="diagnosa">Diagnosa</label>
                      <textarea class="form-control" id="diagnosa" name="diagnosa" placeholder="Masukkan diagnosa"></textarea>
                    </div>
                    <a href="/pemeriksaan" type="button" class="btn btn-secondary">Kembali</a>
                  </form>
                </div>
              </div>
            
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
