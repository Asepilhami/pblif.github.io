<?php
session_start();
$username = $_SESSION['username'];

if (!isset($_SESSION["username"])) { // jika sessio tidak ada maka kembali ke login
  header("Location: login.php");
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
            <span class="d-none d-md-block dropdown-toggle ps-2">P. Paramitha</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Putri Paramitha</h6>
              <span>Staff P4M</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link active" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms P4M</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pendidikan.php">
              <i class="bi bi-circle"></i>
              <span>Standar Pendidikan</span>
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

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Kontak kami</span>
        </a>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="modal" data-bs-target="#out">
          <i class="bi bi-gem"></i><span>Logout</span>
        </a>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active"><a href="penelitian.php">Standar penelitian</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Jenis Standar</label>
          <div class="col-sm-10">: Standar penelitian</div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Nama Standar</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example"
              onChange="document.location.href=this.options[this.selectedIndex].value;">
              <option selected>Select the form</option>
              <option value="Penelitian\k2.1.php">2.1Standar Hasil Penelitian</a> </option>
              <option value="Forms_penelitian\k2.2.php">2.2 Standar isi Penelitian</option>
              <option value="Forms_penelitian\k2.3.php">2.3 Standar Proses Penelitian</option>
              <option value="Forms_penelitian\k2.4.php">2.4 Standar Penilaian Penelitian</option>
              <option value="Forms_penelitian\k2.5.php">2.5 Standar Peneliti</option>
              <option value="Forms_penelitian\k2.6.php">2.6 Standar Sarana dan Prasarana Penelitian</option>
              <option value="Forms_penelitian\k2.7.php">2.7 Standar Pengelolaan Penelitian</option>
              <option value="Forms_penelitian\k2.8.php">2.8 Standar Pendanaan dan Pembiayaan</option>

            </select>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>E-SPMI Politeknik Negri Batam</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">PBL33_ESPMI</a>
    </div>
  </footer><!-- End Footer -->

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

</body>

</html>