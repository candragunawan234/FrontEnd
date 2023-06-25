<!DOCTYPE html>
<html>
<head>
  <title>Jadwal</title>
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
              <li><a href="/pengguna"><i class="fas fa-users"></i> Data Pengguna</a></li>
              <li><a href="/jadwal"><i class="far fa-calendar-alt"></i> Jadwal</a></li>
            </ul>
          </li>
        </ul>
        <div class="logout">
          <a href="/login" class="btn btn-danger" href>Logout</a>
        </div>
      </div>
      <div id="content">
        <div class="center-container">
		{{-- <div class="search-container">
                <input type="text" class="form-control form-control-sm" placeholder="Cari..." />
                <button class="btn btn-primary btn-sm">
                  <i class="fas fa-search"></i>
                </button>
              </div> --}}
            <a href="/editjadwal" class="btn btn-success btn-sm" style="margin-bottom: 10px; margin-right: 75%;">
                <i class="fas fa-edit"></i> Edit Jadwal</a>
          <div class="table-container">
            <table class="table table-light table-striped table-hover">
              <thead>
                <tr>
                  <th>Hari/Sesi</th>
                  <th>Senin</th>
                  <th>Selasa</th>
                  <th>Rabu</th>
                  <th>Kamis</th>
                  <th>Jumat</th>
                  <th>Sabtu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pagi</td>
                  <td>Deliza</td>
                  <td>Sititi</td>
                  <td>Nendah</td>
                  <td>Deliza</td>
                  <td>Sititi</td>
                  <td>Sititi</td>
                </tr>
                <tr>
                    <td>Sore</td>
                    <td>Sititi</td>
                    <td>Nendah</td>
                    <td>Deliza</td>
                    <td>Sititi</td>
                    <td>Nendah</td>
                    <td>Deliza</td>
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
