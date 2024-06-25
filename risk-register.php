<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php')
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Layanan</a></li>
        </ol>
        <h2>Risk Register</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <h2 class="entry-title">
                <a href="#">What Does a Risk Register Do?</a>
              </h2>
              
              <div class="container text-center">
                <div class="row">

                  <div class="col">
                    <img src="assets/img/identify.png" class="rounded img-thumbnail" alt="...">
                    <h6 class="card-title fw-bold" style="padding-top: 5px;">identify</h6>

                  </div>
                
                  <div class="col">
                    <img src="assets/img/describe.png" class="rounded img-thumbnail" alt="...">
                    <h6 class="card-title fw-bold" style="padding-top: 5px;">Describe</h6>
  
                  </div>

                  <div class="col">
                  <img src="assets/img/impact.png" class="rounded img-thumbnail" alt="...">
                  <h6 class="card-title fw-bold" style="padding-top: 5px;">Impact</h6>
 
                  </div>
                  <div class="col">
                  <img src="assets/img/respond.png" class="rounded img-thumbnail" alt="...">
                  <h6 class="card-title fw-bold" style="padding-top: 5px;">Respond</h6>
  
                  </div>
                </div>
                <div class="row" style="padding-top: 20px;">

                  <div class="col">
                    <img src="assets/img/prioritize.png" class="rounded img-thumbnail" alt="...">
                    <h6 class="card-title fw-bold" style="padding-top: 5px;">Prioritize</h6>

                  </div>
                
                  <div class="col">
                    <img src="assets/img/ownership.png" class="rounded img-thumbnail" alt="...">
                    <h6 class="card-title fw-bold" style="padding-top: 5px;">Ownership</h6>
  
                  </div>

                  <div class="col">
                  <img src="assets/img/notes.png" class="rounded img-thumbnail" alt="...">
                  <h6 class="card-title fw-bold" style="padding-top: 5px;">Notes</h6>
 
                  </div>
                  <div class="col">
                  <!-- <img src="assets/img/respond.png" class="rounded img-thumbnail" alt="..."> -->
                  <!-- <h6 class="card-title fw-bold" style="padding-top: 5px;">Respond</h6> -->
  
                  </div>
                </div>
              </div>

              <h2 class="entry-title" style="padding-top: 50px;">
                <a href="#">Definisi Risiko</a>
              </h2>
              
              <table class="table table-bordered">
                <thead class="text-center">
                  <tr>
                    <th scope="col">Kategori Risiko</th>
                    <th scope="col">Definisi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Risiko Operasional</th>
                    <td>Risiko yang disebabkan oleh ketidakcukupan atau tidak berfungsinya proses internal, kesalahan manusia, kegagalan sistem, dan/atau adanya kejadian eksternal yang memengaruhi operasional Perusahaan Efek.</td>             
                  </tr>
                  <tr>
                    <th scope="row">Risiko Kredit</th>
                    <td>Risiko yang disebabkan kegagalan nasabah dan/atau pihak lain dalam memenuhi kewajibannya kepada Perusahaan Efek.</td>
                  </tr>
                  <tr>
                    <th scope="row">Risiko Pasar</th>
                    <td>Risiko yang disebabkan oleh pergerakan variabel pasar dari portofolio yang dimiliki Perusahaan Efek.</td>               
                  </tr>
                  <tr>
                    <th scope="row">Risiko Likuiditas</th>
                    <td>Risiko akibat ketidakmampuan Perusahaan Efek untuk memenuhi kewajiban yang berasal dari utang transaksi efek baik yang dilakukan nasabah atau Perusahaan Efek sendiri, dan/atau utang lainnya.</td>               
                  </tr>
                  <tr>
                    <th scope="row">Risiko Kepatuhan</th>
                    <td>Risiko yang disebabkan Perusahaan Efek tidak mematuhi dan/atau tidak melaksanakan peraturan perundang-undangan dan ketentuan yang berlaku bagi Perusahaan Efek.</td>               
                  </tr>
                  <tr>
                    <th scope="row">Risiko Hukum</th>
                    <td>Risiko yang disebabkan oleh tuntutan hukum, kelemahan aspek yuridis dalam perjanjian yang dibuat oleh Perusahaan Efek, dan/atau aktivitas dan produk yang belum diatur dalam peraturan perundang-undangan.</td>               
                  </tr>
                  <tr>
                    <th scope="row">Risiko Reputasi</th>
                    <td>Risiko yang disebabkan oleh menurunnya tingkat kepercayaan pemangku kepentingan yang bersumber dari pengaduan nasabah dan/atau pemberitaan negatif tentang Perusahaan Efek.</td>               
                  </tr>
                  <tr>
                    <th scope="row">Risiko Strategis</th>
                    <td>Risiko yang disebabkan oleh ketidaktepatan Perusahaan Efek dalam pengambilan dan/atau pelaksanaan suatu keputusan strategis serta kegagalan dalam mengantisipasi perubahan lingkungan bisnis.</td>               
                  </tr>
                </tbody>
              </table>
           
              <h2 class="entry-title" style="padding-top: 40px;">
                <a href="#">Matriks Risiko</a>
              </h2>

              <table class="table table-bordered text-center  ">
                <thead>
                  <tr>
                    <th scope="col" rowspan="2">
                      Risiko Inheren
                    </th>
                    <th scope="col" colspan="5" >
                      Manajemen Risiko
                    </th>
                    <tr >
                      
                      <td style="background-color: 	#2E8B57;" scope="col">Strong (Sangat Memadai)</td>
                      <td style="background-color: 	#3CB371;" scope="col">Satisfactory (Memadai)</td>
                      <td style="background-color: 	#FFD700;" scope="col">Fair (Cukup Memadai)</td>
                      <td style="background-color: 	#FFA500;" scope="col" style="background-color: orange;">Marginal (Kurang Memadai)</td>
                      <td style="background-color: 	#FF4500;" scope="col">Unsatisfactorty (Tidak Memadai)</td>
                    </tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="background-color: 	#2E8B57;" scope="row">Low (Rendah)</td>
                    <td style="background-color: 	#2E8B57;">1</td>
                    <td style="background-color: 	#2E8B57;">2</td>
                    <td style="background-color: 	#3CB371;">3</td>
                    <td style="background-color: 	#3CB371;">4</td>
                    <td style="background-color: 	#FFD700;">5</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#3CB371;" scope="row">Low to Moderate (Rendah Menengah)</td>
                    <td style="background-color: 	#2E8B57;">2</td>
                    <td style="background-color: 	#3CB371;">4</td>
                    <td style="background-color: 	#FFD700;">6</td>
                    <td style="background-color: 	#FFD700;">8</td>
                    <td style="background-color: 	#FFA500;">10</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#FFD700;" scope="row">Moderate (Menengah)</td>
                    <td style="background-color: 	#3CB371;">3</td>
                    <td style="background-color: 	#FFD700;">6</td>
                    <td style="background-color: 	#FFD700;">9</td>
                    <td style="background-color: 	#FFA500;">12</td>
                    <td style="background-color: 	#FFA500;">15</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#FFA500;" scope="row">Moderate to High (Menengah Tinggi)</td>
                    <td style="background-color: 	#3CB371;">4</td>
                    <td style="background-color: 	#FFD700;">8</td>
                    <td style="background-color: 	#FFA500;">12</td>
                    <td style="background-color: 	#FFA500;">16</td>
                    <td style="background-color: 	#FF4500;">20</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#FF4500;" scope="row">High (Tinggi)</td>
                    <td style="background-color: 	#FFD700;">5</td>
                    <td style="background-color: 	#FFA500;">10</td>
                    <td style="background-color: 	#FFA500;">15</td>
                    <td style="background-color: 	#FF4500;">20</td>
                    <td style="background-color: 	#FF4500;">25</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered table-sm text-center">
                <thead>
                  <tr>
                    <th scope="col">Level Risiko</th>
                    <th scope="col">Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="background-color: 	#2E8B57;">Sangat Rendah</td>
                    <td style="background-color: 	#2E8B57;">1</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#3CB371;">Rendah</td>
                    <td style="background-color: 	#3CB371;">2</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#FFD700;">Menengah</td>
                    <td style="background-color: 	#FFD700;">3</td>
                  </tr>
                  <tr>
                    <td style="background-color: 	#FFA500;">Tinggi</td>
                    <td style="background-color: 	#FFA500;">4</td>
                  </tr>
                  <tr >
                    <td style="background-color: 	#FF4500;">Sangat Tinggi</td>
                    <td style="background-color: 	#FF4500;">5</td>
                  </tr>
                </tbody>
              </table>
              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

             

              <h3 class="sidebar-title">Formulir</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="form-risk-register.php">Risk Register</a></li>
                  <!-- <li><a href="#">Pemantauan Risk Register</a></li> -->
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Kriteria Risiko</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="kriteria-risk-register.php">Risk Register</a></li>
                  <!-- <li><a href="#">Pemantauan Risk Register</a></li> -->
                </ul>
              </div>

              <h3 class="sidebar-title">Laporan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="pemantauan-risk-register.php">Pemantauan Risk Register</a></li>
                  <li><a href="#">Risk Register</a></li>
                  <li><a href="#">Risk Register Residual</a></li>
                  <li><a href="laporan-risk-matrix.php">Risk Matrix</a></li>
                  <li><a href="#">Risk Matrix After Review</a></li>
                  <li><a href="#">% Tingkat Resiko</a></li>
                  <li><a href="laporan-jenis-risiko.php">% Jenis Resiko</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Set Up</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="setup-risk-register.php">Risk Register</a></li>
                  <!-- <li><a href="#">Risk Register Residual</a></li> -->
                </ul>
              </div>

              <h3 class="sidebar-title">Penerimaan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Risk Register</a></li>
                  <!-- <li><a href="#">Risk Register Residual</a></li> -->
                </ul>
              </div>

              <h3 class="sidebar-title">Penerimaan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Risk Owner</a></li>
                  <li><a href="#">Jenis Risiko</a></li>
                  <li><a href="#">Risk Event</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Dictionary</h3>

              <h3 class="sidebar-title"><a href="faq-rr.php">FAQ</a></h3>
              

              

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