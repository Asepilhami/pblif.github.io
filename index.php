<?php
session_start();
$username = $_SESSION['username'];
$role=$_SESSION['role'];



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
      <?php if($role=='admin'){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="management_user.php">
        <i class="bi bi-person"></i><span>Management User</span>
        </a>
      </li>
      <?php } ?>  
    </ul>

      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Jurusan Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"><a href="https://www.polibatam.ac.id/pendidikan/">Jurusan</h5></a>


                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
                        </path>
                      </svg>
                    </div>
                    <div class="ps-3">
                      <h1>4</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End jurusan Card -->

            <!-- Program Studi -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h3 class="card-title">Program Studi</h3>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z">
                        </path>
                      </svg>
                    </div>
                    <div class="ps-3">
                      <h1>22</h1>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Program Studi -->

            <!-- Lulusan -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Lulusan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5">
                        </path>
                      </svg>
                    </div>
                    <div class="ps-3">
                      <h6>5000+</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Lulusan -->

            <!-- visi Misi Tujuan Tata Nilai-->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Visi</h5>
                <p>Menjadi Politeknik generasi baru yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan
                  industri dan masyarakat untuk mendukung Indonesia maju dan sejahtera 2045.</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Misi</h5>
                <p>Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi melalui layanan
                  pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi
                  erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk
                  kehidupan bangsa yang lebih baik.</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tujuan</h5>
                <p>1. Terwujudnya layanan, sumber daya dan output pembelajaran dan penelitian yang bermutu,
                  akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat. <br>
                  2. Terwujudnya organisasi yang transparan, akuntabel, produktif dan bermutu.
                </p>

              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tata Nilai</h5>
                <p>1. Adaptive & Agile: Mampu secara lincah untuk bergerak cepat dan menyesuaikan diri dengan
                  perkembangan kondisi lingkungan yang baru dan dinamis. <br>
                  2. Collaborative & Costumer-Centric: Mudah bergaul dengan menunjukkan semangat kolaborasi
                  yang berorientasi pada pemenuhan kebutuhan dan kepuasan pengguna. <br>
                  3. Trustworthy & Team-based: Layak dan memang dipercaya untuk menjalankan amanah sesuai
                  kompetensinya serta selalu bekerja dan berkarya dengan pendekatan berbasis Tim. <br>
                  4. Integtrity & Innnovative: Selaras hati, pikiran, perkataan dan perbuatan tanpa harus diawasi,
                  jujur dan menjunjung nilai kebenaran dengan terus mencoba gagasan, metode ataupun halhal baru untuk
                  kemaslahatan bangsa. <br>
                  5. Open & Organistic: selalu menjadi organisasi yang terbuka, rendah hati dan dinamis dengan
                  struktur birokrasi yang sederhana namun kaya fungsi. <br>
                  6. Nurture & Nationalism: Mengayomi anggota organisasi untuk tumbuh dan maju bersama lebih
                  baik dan mengedepankan semangat kebangsaan dan cinta tanah air.</p>
              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- pengumuman -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Pengumuman </h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Pengumuman -->

          <!-- Counter -->
          <div class="card-body">
            <h5 class="card-title">Counter </h5>

            <!-- Menampilkan jumlah pengunjung menggunakan iframe -->
            <div class="visitor-box">
              <iframe src="counter.php" style="border:none;"></iframe>

              <script>
                // Menggunakan AJAX untuk memuat jumlah pengunjung dari file PHP
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("counter").innerHTML = this.responseText;
                  }
                };
                xmlhttp.open("GET", "counter.php", true);
                xmlhttp.send();
              </script>


            </div><!-- End Right side columns -->

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