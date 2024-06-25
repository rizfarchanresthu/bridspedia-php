<?php
include 'auth.php'; // Pastikan pengguna telah login
  include('partials/header.php');
  include 'config.php';
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
                <a href="#">General</a>
            </h2>

            <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card text-center" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>Divisi</strong></h5>
                    <a href="database-doc-rm.php" class="btn btn-primary mt-2"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>Jenis Ketentuan</strong></h5>
                    <a href="set-up-general.php" class="btn btn-primary mt-2"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>Risk Category</strong></h5>
                    <a href="set-up-general.php" class="btn btn-primary mt-2"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                <div class="card-body pt-3">
                    <h5 class="card-title"><strong>User</strong></h5>
                    <a href="set-up-general.php" class="btn btn-primary mt-2"><i class="bi bi-pencil-square"></i> Edit</a>
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