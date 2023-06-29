<!DOCTYPE html>
<html>
<head>
  <title>Data Pengguna</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/styledb.css">
  {{-- <div class="container">
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
            <a href="/tambahpengguna" class="btn btn-primary btn-sm" style="margin-bottom: 10px; margin-right: 70%;">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
          <div class="table-container">
            <table class="table table-light table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama Pengguna</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Deliza Nesya Sakinah</td>
                  <td>Deliza</td>
                  <td>Bidan</td>
                  <td>
                    <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="showPopup()"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>Sititi Mukaromah</td>
                    <td>Sititi</td>
                    <td>Bidan</td>
                    <td>
                      <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                      <a href="/pengguna"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Nendah Surtina</td>
                    <td>Nendah</td>
                    <td>Bidan</td>
                    <td>
                      <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                      <a href="/pengguna"><i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  <tr>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>
                      <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                      <a href="/pengguna"><i class="fas fa-trash"></i></a>
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

  <div id="popup" class="popup" style="display: none;">
    <span class="close" onclick="hidePopup()">&times;</span>
    <p>Data sudah dihapus.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function openAccountPage() {
      // Kode untuk membuka halaman akun
      console.log('Halaman akun dibuka');
    }
  </script> --}}


    <style>
      .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
      }
  
      .popup .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #888;
        cursor: pointer;
      }
    </style>
    <script>
      function showPopup() {
        document.getElementById("popup").style.display = "block";
      }
  
      function hidePopup() {
        document.getElementById("popup").style.display = "none";
      }
    </script>
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
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama Pengguna</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Deliza Nesya Sakinan</td>
                  <td>bddeliza</td>
                  <td>bddeliza</td>
                  <td>
                    <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="showPopup()"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Sititi Mukaroamah</td>
                  <td>bdsititi</td>
                  <td>bdsititi</td>
                  <td>
                    <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="showPopup()"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Nandah Surtina</td>
                  <td>bdenandah</td>
                  <td>bdenandah</td>
                  <td>
                    <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="showPopup()"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Admin</td>
                  <td>Admin</td>
                  <td>Admin</td>
                  <td>
                    <a href="/editdatapengguna"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="showPopup()"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
    <div id="popup" class="popup" style="display: none;">
      <span class="close" onclick="hidePopup()">&times;</span>
      <p>Data sudah dihapus.</p>
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