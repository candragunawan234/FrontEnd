<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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
              <li><a href="/pemeriksaan"><i class="fas fa-doctor"></i> Data Pemeriksaan</a></li>
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
		<div class="search-container">
                <input type="text" class="form-control form-control-sm" placeholder="Cari..." />
                <button class="btn btn-primary btn-sm">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            <a href="/tambahpemeriksaan" class="btn btn-primary btn-sm" style="margin-bottom: 10px; margin-right: 70%;">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
          <div class="table-container">
            <table class="table table-light table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tanggal Pemeriksaan</th>
                  <th>Diagnosa</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Rifan</td>
                  <td>12 juni 2023</td>
                  <td>Hipertensi</td>
                  <td><a href="/tb_pemeriksaan">
                    <i class="fas fa-external-link-alt"></i>
                  </a>
                </td>
                </tr>
                <tr>
                    <td>Ajizah Fauziah</td>
                    <td>16 Juni 2023</td>
                    <td>Diabetes</td>
                    <td><a href="/tb_pemeriksaan">
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                  </td>
                  </tr>
                  <tr>
                    <td>Soraya Anastasya</td>
                    <td>24 Juni 2023</td>
                    <td>meningitis</td>
                    <td><a href="/tb_pemeriksaan">
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                  </td>
                  </tr>
                  <tr>
                    <td>Kipli Maemunah</td>
                    <td>24 Juni 2023</td>
                    <td>Gagal Ginjal</td>
                    <td><a href="/tb_pemeriksaan">
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                  </td>
                  </tr>
                  <tr>
                    <td>Koko Sarifudin</td>
                    <td>25 Juni 2023</td>
                    <td>Sesak Nafas
                    </td>
                    <td><a href="/tb_pemeriksaan">
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                  </td>
                  </tr>
              </tbody>
            </table>
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