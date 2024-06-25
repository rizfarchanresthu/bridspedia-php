<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';

  // looping dropdown
  $dokuments = getAlldokumen();
  $alldivisi = getAlldivisi();
  $alljenisketentuan = getAlljenisketentuan();

  // Search
  $search = isset($_GET['search']) ? $_GET['search'] : null;
  $divisiid = isset($_GET['divisi']) ? $_GET['divisi'] : null;
  $jenisketentuanid = isset($_GET['jenis_ketentuan']) ? $_GET['jenis_ketentuan'] : null;


// foreach ($dokuments as $dokument){
//   echo $dokument['judul_ketentuan'];
// }

    // Konfigurasi Pagination
    $jumlahdata = 12;
    $totaldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM view_dbdokumen"));
    $jumlahpagination = ceil($totaldata/$jumlahdata);

    if(isset($_GET['halaman'])){
      $halamanaktif = $_GET['halaman'];
    }else{
      $halamanaktif = 1;
    }

    $dataawal = ($halamanaktif * $jumlahdata) - $jumlahdata;

    $jumlahlink = 3;
    if($halamanaktif > $jumlahlink){
      $start_number = $halamanaktif - $jumlahlink;
    }else {
      $start_number = 1;
    }

    if ($halamanaktif < ($jumlahpagination - $jumlahlink)){
      $end_number = $halamanaktif + $jumlahlink;
    } else {
      $end_number = $jumlahpagination;
    }
      

    $ambildata_perhalaman = mysqli_query($conn, "SELECT * FROM view_dbdokumen WHERE id LIKE '%$search%' OR judul_ketentuan LIKE '%$search%' LIMIT $dataawal,$jumlahdata");

    // end pagination

?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="pp.php">Policy & Procedure</a></li>
        </ol>
        <h2>Pencarian Dokumen Kebijakan dan Prosedur</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Dokumen Kebijakan Umum ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry">

              <!-- <h2 class="entry-title">
                <a href="#">Pencarian Dokumen Kebijakan dan Prosedur</a>
              </h2> -->

              <form action="ku.php" method="GET">

              <div class="row g-3">
                
                <div class="col-sm-4">
                    <label for="formFile" class="form-label">Judul</label>
                    <div class="input-group mb-3">
                        <input name="search" class="form-control" type="text" placeholder="Cari Judul Kebijakan dan Prosedur" aria-label=".form-control-sm example">
                    </div>
                </div>

                <div class="col-sm-3">
                  <label for="formFile" class="form-label">Divisi</label>
                    <div class="input-group mb-3">
                      <select class="form-select" name="divisi">
                        <option value="">-- Pilih Divisi --</option>
                        <?php foreach( $alldivisi as $divisi) : ?>
                          <option value="<?= $divisi['id_div']?>"<?php if($divisi['id_div'] = $divisiid) : echo 'selected'; endif;?>><?= $divisi['divisi']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                </div>

                <div class="col-sm-3">
                  <label for="formFile" class="form-label">Jenis Ketentuan</label>
                    <div class="input-group mb-3">
                      <select class="form-select" name="jenis_ketentuan">
                        <option value="">-- Pilih Jenis Ketentuan --</option>
                        <?php foreach( $alljenisketentuan as $jenis_ketentuan) : ?>
                          <option value="<?= $jenis_ketentuan['id_jk']?>"<?php if($jenis_ketentuan['id_jk'] = $jenisketentuanid) : echo 'selected'; endif;?>><?= $jenis_ketentuan['jenis_ketentuan']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                </div>

                <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Cari</button>
                </div>

                
              </div>
              </form>

              <!-- <h2 class="entry-title" style="padding-top: 25px;">
                <a href="#">Kebijakan Umum (SK Direksi)</a>
              </h2> -->

              <div class="row gy-4 mt-2">
                <?php foreach($dokuments as $dokument) : ?>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;">
                      <div class="card-body pt-3">
                        
                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic checkbox toggle button group">
                        <label type="checkbox" class="btn btn-primary"><?= $dokument['kode_jk']?></label>
                        <label type="checkbox" class="btn btn-outline-primary btn-check"><?= $dokument['kode_divisi']?></label>
                        <label type="checkbox" class="btn btn-outline-primary btn-check">
                          <?php if ($dokument['status']=="Berlaku"){
                          echo "<label style='color: green;'><strong>Berlaku</strong></label>";
                        } else if ($dokument['status']=="Tidak Berlaku"){
                          echo "<label style='color: red;'><strong>Tidak Berlaku</strong></label>";
                        } else if ($dokument['status']=="Terkait untuk diperiksa"){
                          echo "<label style='color: orange;'><strong>Terkait untuk diperiksa</strong></label>";
                        }?></label>
                      </div>
                      
                        <h6 class="card-subtitle text-body-secondary mt-3 mb-1" style="font-size: 12px;" ><?= $dokument['nomor_ketentuan']?></h6>
                        <h5 class="card-title mb-3" style="font-size: 17px;"><strong><?= $dokument['judul_ketentuan']?></strong></h5>
                        <!-- <h6 class="card-subtitle text-body-secondary my-1"><?= $dokument['divisi']?></h6> -->

                        
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="card-footer text-body-secondary">
                          <div class="row">
                            <div class="col-8">
                            <p class="card-text"><small class="text-body-secondary">Next Review : <?= $dokument['next_review']?></small></p>
                            </div>
                            <div class="col-4">
                            <a href="download-doc-rm.php?file_id=<?php echo $dokument['id'];?>" type="button" class="btn btn-primary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .55rem;">
                              <i class="bi bi-download pe-1"></i> Unduh
                            </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
              </div>
              

              <!-- Menampilan Pagination -->
              <div class="mt-5">
                <nav aria-label="Page navigation ">
                  <ul class="pagination justify-content-center">

                    <!-- Button Sebelumnya -->
                    <?php if ($halamanaktif <= 1) { ?>
                      <li class="page-item disabled"><a class="page-link" href="?halaman=<?php echo $halamanaktif - 1; ?>">Sebelumnya</a></li>
                    <?php } else { ?>
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanaktif - 1; ?>">Sebelumnya</a></li>
                    <?php }  ?>
                    <!-- end -->

                    <?php for ($i = $start_number; $i <= $end_number; $i++) {
                    ?>
                    
                    <li class="page-item">
                      <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                    
                    <?php }  ?>
                    
                    <!-- Button Selanjutnya -->
                    <?php if ($halamanaktif >= $jumlahpagination) { ?>
                      <li class="page-item disabled"><a class="page-link" href="?halaman=<?php echo $halamanaktif + 1; ?>">Selanjutnya</a></li>
                    <?php } else { ?>
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanaktif + 1; ?>">Selanjutnya</a></li>
                    <?php }  ?>
                    <!-- end -->    
                  </ul>
                </nav>
              </div>
            </article><!-- End blog entry -->
          </div>
        </div>
      </div><!-- End blog entries list -->

          

          
  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>