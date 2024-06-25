<?php
include 'auth.php'; // Pastikan pengguna telah login
  include('partials/header.php');
  include 'config.php';

  // Search
  $search = isset($_GET['search']) ? $_GET['search'] : null;

  // get data Dokumen 
  $get1 = mysqli_query($conn, "SELECT * FROM db_dokumen");
  $count1 = mysqli_num_rows($get1);

  $get2 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE jenis_ketentuan=1");
  $count2 = mysqli_num_rows($get2);

  $get3 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE jenis_ketentuan=2");
  $count3 = mysqli_num_rows($get3);

  $get4 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE jenis_ketentuan=3");
  $count4 = mysqli_num_rows($get4);

  $get5 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE jenis_ketentuan=4");
  $count5 = mysqli_num_rows($get5);

  // get Data Total Dokumen per Divisi
  $get6 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=1");
  $count6 = mysqli_num_rows($get6);

  $get7 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=2");
  $count7 = mysqli_num_rows($get7);

  $get8 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=3");
  $count8 = mysqli_num_rows($get8);

  $get9 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=4");
  $count9 = mysqli_num_rows($get9);

  $get10 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=5");
  $count10 = mysqli_num_rows($get10);

  $get11 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=6");
  $count11 = mysqli_num_rows($get11);

  $get12 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=7");
  $count12 = mysqli_num_rows($get12);

  $get13 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=8");
  $count13 = mysqli_num_rows($get13);

  $get14 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=9");
  $count14 = mysqli_num_rows($get14);

  $get15 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=10");
  $count15 = mysqli_num_rows($get15);

  $get16 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=11");
  $count16 = mysqli_num_rows($get16);

  $get17 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=12");
  $count17 = mysqli_num_rows($get17);

  $get18 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=13");
  $count18 = mysqli_num_rows($get18);

  $get19 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=14");
  $count19 = mysqli_num_rows($get19);

  $get20 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=15");
  $count20 = mysqli_num_rows($get20);

  $get21 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=16");
  $count21 = mysqli_num_rows($get21);

  $get22 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=17");
  $count22 = mysqli_num_rows($get22);

  $get23 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=18");
  $count23 = mysqli_num_rows($get23);

  $get24 = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE divisi=19");
  $count24 = mysqli_num_rows($get24);
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Layanan</a></li>
        </ol>
        <h2>Policy & Procedure</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <h2 class="entry-title">
                <a href="#">Definisi Istilah</a>
              </h2>

              <div class="entry-content">
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Kebijakan Umum (SK Direksi)</div>
                      adalah pengaturan aktivitas dan/atau usaha Perusahaan yang dituangkan dalam tatanan filosofi dan/atau prinsip dasar, serta bersifat strategis, high level, dan jangka panjang.
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Pedoman Pelaksanaan (SK Komite)</div>
                      adalah pengaturan yang memuat standar proses bisnis/penjelasan aktivitas atau pengaturan produk atau ketentuan yang berlaku umum. Pedoman Pelaksanaan juga dapat berisi tahapan pelaksanaan pada fungsi/organisasi yang terkait, kewenangan dan tanggung jawab, spesifikasi produk, pasar sasaran, syarat dan ketentuan.
                      Pedoman Pelaksanaan dituangkan dalam Surat Keputusan Komite.
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Standar Operasional Prosedur (SOP)</div>
                      adalah pengaturan yang lebih mendetail mengenai proses kerja individu secara sistematis dan rinci, termasuk penjelasan siapa (pelaksana), melakukan apa (aktivitas yang dilaksanakan) dan bagaimana (tata cara pelaksanaan).
                      <p>
                      Standar Operasional Prosedur dapat juga berisi panduan pelaksanaan operasional secara detail perihal penggunaan sistem/aplikasi, termasuk aktivitas yang dinilai kritikal di Divisi.
                      </p>
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Instruksi Kerja (IK)</div>
                      adalah penjelasan mengenai proses kerja secara sistematis dan rinci maupun penggunaan sistem/aplikasi/perangkat hingga standar konfigurasi/standar spesifikasi yang hanya berlaku untuk suatu Divisi.
                    </div>
                  </li>
                </ol>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

            
              <h3 class="sidebar-title"><a href="ku.php">Pencarian Dokumen</a></h3>
              <div class="sidebar-item search-form">
                <form action="ku.php" method="GET">
                <input name="search" class="form-control" type="text" placeholder="Cari Judul Kebijakan Umum" aria-label=".form-control-sm example">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>

              <h3 class="sidebar-title">Dokumen</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a >Kebijakan Umum <span>(<?=$count2;?>)</span></a></li>
                  <li><a >Pedoman Pelaksanaan <span>(<?=$count3;?>)</span></a></li>
                  <li><a >Standar Operasional Prosedur <span>(<?=$count4;?>)</span></a></li>
                  <li><a >Instruksi Kerja <span>(<?=$count5;?>)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Glossary</h3>
              <h3 class="sidebar-title">FAQ</h3>
              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>