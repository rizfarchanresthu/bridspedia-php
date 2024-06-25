<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php')
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="rcsa.php">Risk Register</a></li>
        </ol>
        <h2>Kriteria Risiko Risk Register</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Dokumen Kebijakan Umum ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry">
            <h2 class="entry-title" >
                <a href="#">Referensi Penilaian Probabilitas</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai Kemungkinan (Probabilitas)</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai Kemungkinan (pertahun)</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kemungkinan Dalam %</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>Frekuensi</td>
                  <td>Persentase</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Sangat Sering</td>
                  <td>>12</td>
                  <td>>80%</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Sering</td>
                  <td>60-80%</td>
                  <td>Persentase</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>Cukup Sering</td>
                  <td>40-60%</td>
                  <td>Persentase</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>Jarang</td>
                  <td>20-40%</td>
                  <td>Persentase</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>Sangat Jarang</td>
                  <td>0-20%</td>
                  <td>Persentase</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Referensi Penilaian Dampak</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Uraian Atas Nilai</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Dampak Kualitatif dan/atau Kuantitatif</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Berdampak langsung kepada perusahaan dan menhadi bahan audit eksternal</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Berdampak langsung kepada divisi dan menjadi bahan audit eksternal</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Berdampak langsung kepada Divisi namun tidak menjadi bahan audit eksternal</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Berdampak langsung terhadap unit namun tidak berdampak kepada divisi</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Tidak berdampak langsung terhadap unit</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Kepatuhan</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kejadian dapat mengakibatkan pembekuan kegiatan usaha tertentu</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Kejadian dapat mengakibatkan pembatasan kegiatan usaha dan terkena sanksi finansial dan non-finasial</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Kejadian dapat menimbulkan teguran tertulis dari Regulator dan/sanksi finansial dan non-finansial</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Kejadian dapat menimbulkan teguran tertulis internal</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian dapat menimbulkan teguran lisan</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Proses Bisnis/Operasional dan Keuangan</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kejadian yang dapat menimbulkan potensi kerugian diatas Rp 200.000.000 atau sangat mengganggu proses bisnis/operasional dan terkait pihak eksternal </td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Kejadian yang dapat menimbulkan potensi kerugian di antara Rp 150.000.000 dan sampai Rp 200.000.000 atau mengganggu proses bisnis/operasional</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Kejadian yang dapat menimbulkan potensi kerugian di antara Rp 100.000.000 sampai Rp 150.000.000 atau cukup mengganggu proses bisnis/operasional</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Kejadian yang dapat menimbulkan potensi kerugian di antara Rp 50.000.000 sampai Rp 100.000.000 atau tidak terlalu mengganggu proses bisnis/operasional</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian yang dapat menimbulkan potensi kerugian dibawah Rp 50.000.000 atau tidak terlalu mengganggu proses bisnis/operasional</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Reputasi</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kecaman publik atau media yang kritikal atau berdampak kepada lebih dari 20% Nasabah atau Masuk berita internasional dan/atau Terdapat pemberitaan negatif dari media nasional dan internasional</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Terdapat pemberitaan negatif dari media nasional. Dan bermaterialitas tinggi, atau berdampak kepada 10-20% Nasabah, atau Kemarahan publik yang serius atau publisitas medua yang merugikan</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Terdapat pemberitaan negatif dari media nasional dan cukup bermaterialitas tinggi, atau berdampak kepada 5-10% Nasabah</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Terdapat pemberitaan negatif namun tidak bermaterialitas tinggi dari media nasional, atau berdampak kepada ≤5% Nasabah</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian tidak menimbulkan pemberitaan negatif</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Operasional</a>
            </h2>
              
            <table class="table table-sm table-bordered">
              <thead >
                <tr >
                  <th class="text-light  text-center" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light  text-center" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light  text-center" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;" class=" text-center">Sangat Berat</td>
                  <td>
                    <ol>
                      <li>Memiliki dampak terhadap ketersediaan dan/atau kerentanan sistem TI dimana sistem tersebut memiliki kritikalitas "Critical"</li>
                      <li>Memiliki dampak terhadap sistem TI, yang menyebabkan tidak dapat beroperasional, dan memerlukan waktu penyelesaian lebih dari 7 jam</li>
                    </ol>
                  </td>
                  <td class=" text-center">5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;" class=" text-center">Berat</td>
                  <td>
                  <ol>
                      <li>Memiliki dampak terhadap ketersediaan dan/atau kerentanan sistem TI dimana sistem tersebut memiliki kritikalitas "High"</li>
                      <li>Memiliki dampak terhadap sistem TI yang menyebabkan tidak dapat beroperasional, dan memerlukan waktu penyelesaian antara 3 jam sampai dengan 7 jam</li>
                    </ol>
                  </td>
                  <td class=" text-center">4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" class=" text-center">Sedang</td>
                  <td><ol>
                      <li>Memiliki dampak terhadap ketersediaan layanan, kontrol sudah dilakukan atau kerentanan sistem TI dimana sistem tersebut memiliki kritikalitas "Medium"</li>
                      <li>Memiliki dampak terhadap sistem TI, yang menyebabkan tidak dapat beroperasional, dan memerlukan waktu penyelesaian antara 1 jam sampai dengan 3 jam</li>
                    </ol>
                  </td>
                  <td class=" text-center">3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" class=" text-center">Ringan</td>
                  <td><ol>
                      <li>Memiliki dampak terhadap ketersediaan dan/atau kerentanan sistem TI dimana sistem tersebut memiliki kritikalitas "Low"</li>
                      <li>Memiliki dampak terhadap sistem TI yang menyebabkan tidak dapat beroperasional, dan memerlukan waktu penyelesaian kurang dari 1 jam</li>
                    </ol>
                  </td>
                  <td class=" text-center">2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;" class=" text-center">Sangat Ringan</td>
                  <td>
                    <ol>
                      <li>Tidak ada dampak pada sistem TI yang dapat menyebabkan penundaan pada aktivitas bisnis</li>
                      <li>Tidak ada dampak pada penurunan efisiensi dan ketersediaan dan ketersediaan sistem TI</li>
                    </ol>
                  </td>
                  <td class=" text-center">1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Kerahasiaan</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kejadian menyebabkan kebocoran informasi yang bersifat sangat rahasia (strictly confidential) bagi Perusahaan</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Kejadian menyebabkan kebocoran informasi yang bersifat rahasia (confidential) bagi Perusahaan</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Kejadian menyebabkan kebocoran informasi yang hanya untuk kalangan internal bagi Perusahaan</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Kejadian menyebabkan kebocoran informasi yang bersifat publik namun memerlukan izin pihak Perusahaan</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian menyebabkan kebocoran informasi yang bersifat publik bagi Perusahaan</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Keamanan - Integritas</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Gangguan validitas/keakuratan data yang sangat besar dan sangat mengganggu proses bisnis/operasional dan terkait pihak eksternal</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Gangguan validitas/keakuratan data yang besar dan mengganggu proses bisnis/operasional</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Gangguan validitas/keakuratan data yang sedang dan cukup mengganggu proses bisnis/operasional</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Gangguan validitas/keakuratan data yang kecil dan tidak terlalu mengganggu proses bisnis/operasional</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Gangguan validitas/keakuratan data yang sangat kecil dan tidak mengganggu proses bisnis/operasional</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Keamanan - Ketersediaan Layanan dan Keandalannya</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kejadian dapat menyebabkan ketiadaan layanan yang mengakibatkan proses bisnis/operasional berhenti lebih dari 12 jam</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Kejadian dapat menyebabkan ketiadaan layanan yang mengakibatkan proses bisnis/operasional berhenti 3-12 jam</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Kejadian dapat menyebabkan ketiadaan layanan yang mengakibatkan proses bisnis/operasional berhenti 1-3 jam</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Kejadian dapat menyebabkan ketiadaan layanan yang mengakibatkan proses bisnis/operasional berhenti kurang dari 1 jam</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian tidak dapat membuat ketiadaan layanan namun performa layanan menjadi di bawah normal</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>

            <h2 class="entry-title" style="padding-top: 30px;" >
                <a href="#">Tabel Dampak Hukum</a>
            </h2>
              
            <table class="table table-sm table-bordered text-center">
              <thead >
                <tr >
                  <th class="text-light" style="background-color: #00529c;" scope="col">Kategori</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Deskripsi</th>
                  <th class="text-light" style="background-color: #00529c;" scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: 	#FF4500;">Sangat Berat</td>
                  <td>Kejadian mengakibatkan kerugian yang dialami karena suatu putusan dari pengadilan yang telah memiliki kekuatan hukum tetap dibandingkan dengan modal Perusahaan lebih dari 10%</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFA500;">Berat</td>
                  <td>Kejadian mengakibatkan kerugian yang dialami karena suatu putusan dari pengadilan yang telah memiliki kekuatan hukum tetap dibandingkan dengan modal Perusahaan antara 8-10%</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td style="background-color: 	#FFD700;" >Sedang</td>
                  <td>Kejadian mengakibatkan kerugian yang dialami karena suatu putusan dari pengadilan yang telah memiliki kekuatan hukum tetap dibandingkan dengan modal Perusahaan antara 5-8%</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td style="background-color: 	#3CB371;" >Ringan</td>
                  <td>Kejadian mengakibatkan kerugian yang dialami karena suatu putusan dari pengadilan yang telah memiliki kekuatan hukum tetap dibandingkan dengan modal Perusahaan antara 3-5%</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td style="background-color: 	#2E8B57;">Sangat Ringan</td>
                  <td>Kejadian mengakibatkan kerugian yang dialami karena suatu putusan dari pengadilan yang telah memiliki kekuatan hukum tetap dibandingkan dengan modal Perusahaan < 3% </td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>


            </article><!-- End blog entry -->

          </div>
        </div>

          </div><!-- End blog entries list -->

          

          
  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>