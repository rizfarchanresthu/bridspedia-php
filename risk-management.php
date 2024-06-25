<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';

  // Cek hak akses untuk halaman ini
if (!check_access(['admin', 'RM'])) {
  echo "Anda tidak memiliki akses untuk melihat halaman ini.";
exit();
}
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Admin</a></li>
        </ol>
        <h2>Risk Management</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formulir Risk Register ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">

            <h2 class="entry-title">
                <a href="#">Risk Management</a>
            </h2>

            <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>Policy & Procedure</strong></h5>
                    <p class="card-text">Upload dan Update Dokumen Policy & Procedure disini</p>
                    <a href="database-doc-rm.php" class="btn btn-primary">Mulai</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>Risk Register</strong></h5>
                    <p class="card-text">Melakukan Pemantauan Laporan Risk Register disini</p>
                    <a href="pemantauan-risk-register.php" class="btn btn-primary">Mulai</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>General</strong></h5>
                    <p class="card-text">General Setting - Berbagai Dropdown Formulir disini</p>
                    <a href="set-up-general.php" class="btn btn-primary">Mulai</a>
                </div>
                </div>
            </div>
            </div>

            </article><!-- End blog entry -->

          </div>
        </div>

      </div><!-- End blog entries list -->
     
  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>