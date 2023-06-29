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
            <div id="content">
                <div class="center-container">
                  <h2>Edit Data Kelahiran</h2>
                  <div>
                  <form>
                    <div class="form-group">
                      <label for="nama">Nama Bayi</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="Rifan">
                    </div>
                    <div class="form-group">
                      <label for="kota">Nama Ibu</label>
                      <input type="text" class="form-control" id="kota" name="kota" value="Sevita Pearce">
                    </div>
                    <div class="form-group">
                      <label for="ayah">Nama Ayah</label>
                      <input type="text" class="form-control" id="umur" name="umur" value="Yusuf">
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
                      <input type="tel" class="form-control" id="no_hp" name="no_hp" value="0821198781288">
                    </div>
                    <div class="form-group">
                      <label for="jenis_periksa">Alamat</label>
                      <input type="text" class="form-control" id="jenis_periksa" name="jenis_periksa" value="Tasikmalaya">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal lahir</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Waktu Lahir</label>
                        <input type="time" class="form-control" id="tanggal" name="tanggal">
                      </div>
                    <div class="form-group">
                      <label for="tinggi badan">Tinggi Badan</label>
                      <input type="number" class="form-control" id="diagnosa" name="diagnosa" value="12">
                    </div>
                    <div class="form-group">
                        <label for="tinggi badan">berat badan</label>
                        <input type="number" class="form-control" id="diagnosa" name="diagnosa" value="3">
                      </div>
                      <div class="form-group">
                        <label for="tinggi badan">lingkar kepala</label>
                        <input type="number" class="form-control" id="diagnosa" name="diagnosa" value="7">
                      </div>
                      <div class="form-group">
                        <label for="tinggi badan">Lingkar Dada</label>
                        <input type="number" class="form-control" id="diagnosa" name="diagnosa" value="9">
                      </div>
                      <div class="form-group">
                        <label for="tinggi badan">spartus</label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="Spontan">
                      </div>
                      <div class="form-group">
                        <label for="tinggi badan">Bidan Pemeriksa</label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="BIdan Deliza">
                      </div>
                      <a href="/kelahiran" type="submit" class="btn btn-primary">Simpan</a>
                      <a href="/kelahiran" type="button" class="btn btn-secondary">Kembali</a>
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
