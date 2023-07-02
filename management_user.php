<?php
session_start();
$username = $_SESSION['username'];
$role = $_SESSION['role'];



if (!isset($_SESSION["role"])) { // jika sessio tidak ada maka kembali ke login
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-SPMI Polibatam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-poltek.png" rel="icon">
  <link href="assets/img/logo-poltek.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- fontawesome -->
  <link href="fontawesome/css/all.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo-poltek.png" alt="">
        <span class="d-none d-lg-block">P4M </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $username; ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
                <?php echo $username; ?>
              </h6>
              <span>Staff P4M</span>
            </li>
            <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#out">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms P4M</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pendidikan.php">
              <i class="bi bi-circle"></i><span>Standar Pendidikan</span>
              <i class="bi bi-chevron-down ms-auto"></i>

            </a>
          </li>
          <li>
            <a href="penelitian.php">
              <i class="bi bi-circle"></i><span>Standar Penelitian</span>
            </a>
          </li>
          <li>
            <a href="pengabdian.php">
              <i class="bi bi-circle"></i><span>Standar Pengabdian</span>
            </a>
          </li>
          <li>
            <a href="layanan.php">
              <i class="bi bi-circle"></i><span>Standar Layanan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Dokumen P4M</span><i
            class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="bukuspmi.php">
              <i class="bi bi-circle"></i><span>Buku SPMI</span>
            </a>
          </li>
          <li>
            <a href="pedoman-in.php">
              <i class="bi bi-circle"></i><span>Pedoman Internal</span>
            </a>
          </li>
          <li>
            <a href="pedomanbisnis.php">
              <i class="bi bi-circle"></i><span>Pedoman Bisnis</span>
            </a>
          </li>
          <li>
            <a href="standar_layanan.php">
              <i class="bi bi-circle"></i><span>Standar Layanan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="timp4m.php">
              <i class="bi bi-circle"></i><span>Tim P4M</span>
            </a>
          </li>
          <li>
            <a href="fungsitugas.php">
              <i class="bi bi-circle"></i><span>Fungsi dan Tugas P4M</span>
            </a>
          </li>
          <li>
            <a href="layananp4m.php">
              <i class="bi bi-circle"></i><span>Layanan P4M</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <?php if ($role == 'admin') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="management_user.php">
            <i class="bi bi-person"></i><span>Management User</span>
          </a>
        </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Kontak kami</span>
        </a>
      </li><!-- End Charts Nav -->



  </aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Management User</h1>

    </div>
    <!-- End Page Title -->




    <!-- table data -->
    <div class="card">
      <div class="card-title">
        <h4>&nbsp;&nbsp;&nbsp;Management USER</h4><br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-address-card"></i><a href="form_pendaftaran.php">Tambah</a></i>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scoope="col" class="col-md-2">nama</th>
                <th scoope="col" class="col-md-2">email</th>
                <th scoope="col" class="col-md-2">role</th>
                <th scoope="col" class="col-md-2">username</th>             
                <th scoope="col" class="col-md-2">aksi</th>
              </tr>
            </thead>
            <?php
            include 'API\koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT * FROM user ");
            while ($data = mysqli_fetch_array($sql)) {
              ?>

              <tr>

                <td>
                  <?php echo $data['nama'] ?>
                </td>
                <td>
                  <?php echo $data['email'] ?>
                </td>
                <td>
                  <?php echo $data['role'] ?>
                </td>
                <td>
                  <?php echo $data['username'] ?>
                </td>
                <td>
                  <i class="fas fa-trash-alt  p-2 text-red rounded" style="color: red ;"><a href="#"
                      data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['id']; ?>"></a></i>
                  <a href="#" class="text-dark" data-bs-toggle="modal"
                    data-bs-target="#delete<?php echo $data['id']; ?>">Delete</a><br>
                  <div class="col-sm-10">
                    <i class="far fa-edit p-2 text-success"></i>
                    <a href="" class="text-dark" data-bs-toggle="modal"
                      data-bs-target="#edit<?php echo $data['id']; ?>">Edit</a><br>
                  </div>
                  <div>
                  <i class="fas fa-key p-2"></i>
                  <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#ganti<?php echo $data['id']; ?>">Change Password</a><br>
                  </div>
                </td>


              </tr>

              <!-- delete  -->
              <div class="modal fade" id="delete<?php echo $data['id']; ?>" tabindex="-1" role="dialog"
                aria-labelledby="ModalcobaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalSayaLabel">Apakahh Anda Ingin Menghapus Data ?</h5>
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                      <span  aria-hidden="true">&times; </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>

                      <a href="API\hapus_user.php?id=<?php echo $data['id']; ?>"><button type="button"
                          class="btn btn-primary">Yes</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End -->

              <!-- ganti -->
              <div class="modal fade" id="ganti<?php echo $data['id']; ?>" tabindex="-1" role="dialog"
                aria-labelledby="ModalcobaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalSayaLabel">Change Password</h5>
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times; </span>
                    </div>
                    <form action="API\change_password.php?id=<?php echo $data['id']; ?>" method="POST">
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Username : <?php echo $username; ?> </label>
                        </div>
                        <div class="form-group">
                          <label>Password :</label>
                          <input type="password" class="form-control" name="password" id='password'
                            value="<?php echo $data['password']; ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                          <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                   
                  </div>
                </div>
              </div>
            </div>
              <!-- End -->

              <!-- Edit Data -->
              <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog"
                aria-labelledby="ModalcobaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalSayaLabel">EDIT DATA</h5>
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="API\useredit.php?id=<?php echo $data['id']; ?>" method="POST">
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Nama :</label>
                          <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $data['nama']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Role :</label>
                          <input type="text" class="form-control" id="role" name="role"
                            value="<?php echo $data['role']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Email :</label>
                          <input class="form-control" tppe="email" rows="3" id="email" name="email"
                            value="<?php echo $data['email']; ?> ">
                        </div>
                        <div class="form-group">
                          <label>Username :</label>
                          <input type="text" class="form-control" name="username" id='username'
                            value="<?php echo $data['username']; ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                          <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end edit data -->
          </div>

          <?php
            }
            ?>

        </table>

      </div>
    </div>
    <!-- end table -->

    <!-- ======= Footer ======= -->

    <!-- Log out -->
    <div class="modal fade" id="out" tabindex="-1" role="dialog" aria-labelledby="ModalcobaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSayaLabel">Apakah Anda Ingin Keluar ?</h5>
            <span class="btn btn-inlinr-danger" data-bs-dismiss="modal" aria-hidden="true">&times;</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <a href="API\logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>E-SPMI Politeknik Negri Batam</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">PBL33_ESPMI</a>
      </div>
    </footer><!-- End Footer -->

</body>

</html>