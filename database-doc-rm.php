<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';
    // session_start();

    // looping dropdown
    $dokuments = getAlldokumen();

    // Search
    $search = isset($_GET['search']) ? $_GET['search'] : null;

    // Konfigurasi Pagination 
    $jumlahdata = 10;
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

    // Reminder Review Policy & Procedure
    $sekarang    =date("Y-m-d");
    
    // mengambil data dari database
    $no    =0;
    $query    =mysqli_query($conn, "SELECT * FROM db_dokumen WHERE next_review < '$sekarang' ORDER BY next_review");
    while($result    =mysqli_fetch_array($query)){
    
    // menghitung jumlah hari keterlambatan dari tanggal jatuh tempo
    $kembali    =new DateTime($result['next_review']);
    $lambat        =new DateTime($sekarang);
    $diff    =$lambat->diff($kembali);
    $no++;
    }

    $get25 = mysqli_query($conn,  "SELECT * FROM db_dokumen WHERE next_review = '$sekarang' ORDER BY next_review");
    $count25 = mysqli_num_rows($get25);
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Risk Management</a></li>
        </ol>
          
          <h2>Policy & Procedure</h2>

        <ul class="nav nav-tabs justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="upload-doc-rm.php">Upload Dokumen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="database-doc-rm.php">Database Dokumen</a>
          </li>
        </ul>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Database Dokumen Kebijakan Umum ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">

              <h2 class="entry-title">
                <a>Database Dokumen Kebijakan dan Prosedur</a>
              </h2>
              
              <!-- Form Search -->  
              <form action="database-doc-rm.php" method="GET">

              <div class="row g-3">                
                <div class="col-sm-8">     
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Judul Ketentuan</span>
                      <input name="search" class="form-control" type="text" placeholder="Cari Judul Kebijakan dan Prosedur" aria-label=".form-control-sm example">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                  </div>
                </div>
                
                <div class="col-sm-2">
                  <a href="laporan-excel.php"><button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-down"></i> Export</button></a>
                </div>

                <!-- button alert next review-->
                <div class="col-sm-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell"></i>   
                      <span class="badge text-bg-warning"><?=$count25;?></span>
                  </button>
                  
                  <div class="dropdown-menu p-2" style="width: 350px;">
                    <table>
                      <tr >
                        <i class="bi bi-info-circle-fill"></i> <strong> Review Policy & Procedure</strong> <br>
                      </tr>
                      
                      <tr> 
                        <?php
                          // alert dokumen yang harus di review pada hari ini
                          $no = 0;
                          $sekarang = date("Y-m-d");
                          $query = mysqli_query($conn, "SELECT * FROM db_dokumen WHERE next_review = '$sekarang' ORDER BY next_review");
                          while($result = mysqli_fetch_array($query)){
                          $kembali = new DateTime($result['next_review']);
                          $lambat = new DateTime($sekarang);
                          $diff = $lambat->diff($kembali);
                          $no++;
                          echo $no. ". Policy Owner Wajib Melakukan Review ". "<strong>" .$result['judul_ketentuan'] ."</strong>". " pada tanggal " . "<strong>" .date("d M Y", strtotime($result['next_review'])). "</strong>". " Sesuai Ketentuan Perusahaan</br>";  
                        ?>
                        <?php }?>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              </form>
                                
              <!-- tabel database -->
              <div class="entry-content " style="padding-top: 25px;">
              <div class="table-responsive table-bordered">
                <table class="table" id="datatable">
                  <thead>
                    <tr>
                      <th class="text-light" style="background-color: #00529c;" width = "10%">No</th>
                      <th class="text-light" style="background-color: #00529c;" width = "40%">Nomor Ketentuan</th>
                      <th class="text-light" style="background-color: #00529c;" width = "50%">Judul Ketentuan</th>
                      <th class="text-light" style="background-color: #00529c;" width = "40%">Jenis Ketentuan</th>
                      <th class="text-light" style="background-color: #00529c;" width = "30%">Tanggal Terbit</th>
                      <th class="text-light" style="background-color: #00529c;" width = "30%">Last Review </th>
                      <th class="text-light" style="background-color: #00529c;" width = "30%">Next Review</th>
                      <th class="text-light" style="background-color: #00529c;" width = "40%">Divisi</th>
                      <th class="text-light" style="background-color: #00529c;" width = "30%">Status</th>
                      <th class="text-light" style="background-color: #00529c;" width = "30%" colspan="2">Info Dokumen</th>
                      <th class="text-light" style="background-color: #00529c;" width = "20%">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      // Untuk Nomor atau Id
                      $nomor = 0 + $dataawal;
                      while($result = mysqli_fetch_assoc($ambildata_perhalaman)){
                      $nomor++;
                    ?>
                    
                    <tr>
                      <td>
                        <?php echo $nomor; ?>
                      </td>
                      <td>
                      <?php echo $result['nomor_ketentuan']; ?>
                      </td>
                      <td>
                      <?php echo $result['judul_ketentuan']; ?>
                      </td>
                      <td>
                      <?php echo $result['jenis_ketentuan']; ?>
                      </td>
                      <td>                        
                        <?php echo date("d M Y", strtotime($result['tanggal_terbit'])); ?>
                      </td>
                      <td>
                      <?php echo date("d M Y", strtotime($result['last_review'])); ?>                        
                      </td>
                      <td>
                      <?php echo date("d M Y", strtotime($result['next_review'])); ?>                        
                      </td>
                      <td>
                      <?php echo $result['divisi']; ?>                        
                      </td>
                      <td>
                      <?php 
                        if ($result['status']=="Berlaku"){
                          echo "<label style='color: green;'> Berlaku </label>";
                        } else if ($result['status']=="Tidak Berlaku"){
                          echo "<label style='color: red;'> Tidak Berlaku </label>";
                        } else if ($result['status']=="Terkait untuk diperiksa"){
                          echo "<label style='color: orange;'> Terkait untuk diperiksa </label>";
                        } 
                      ?>                        
                      </td>
                      <td>
                      <?php 
                        if ($result['info_doc']=="Dokumen Masih Relevan"){
                          echo "<label style='color: green;'> Dokumen Masih Relevan </label>";
                        } else if ($result['info_doc']=="Update Dokumen"){
                          echo "<label style='color: yellow;'> Update Dokumen </label>";
                        } else if ($result['info_doc']=="Mencabut Dokumen"){
                          echo "<label style='color: red;'> Mencabut Dokumen </label>";
                        } 
                      ?>                        
                      </td>
                      <td>
                      <?php echo $result['searchdoc']; ?>
                      </td>

                      <td>
                        <!-- edit button -->
                        <a href="upload-doc-rm.php?ubah=<?php echo $result['id'];?>" type="button" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin mengubah dokumen?')">
                            <i class="bi bi-pencil"></i>
                        </a>
                        
                        <!-- delete button -->
                        <a href="proses-rm.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus dokumen?')" style="margin-top: 10px;">
                            <i class="bi bi-trash"></i>
                        </a>
                        
                        <!-- download button -->
                        <a href="download-doc-rm.php?file_id=<?php echo $result['id'];?>" type="button" class="btn btn-primary btn-sm" style="margin-top: 10px;">
                          <i class="bi bi-download"></i>
                        </a>
                        
                      </td>
                    </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- end table -->

              <!-- Menampilan Pagination -->
              <div>
                <nav aria-label="Page navigation ">
                  <ul class="pagination justify-content-center">
                    <!-- Button Sebelumnya -->
                    <?php if ($halamanaktif <= 1) { ?>
                      <li class="page-item disabled"><a class="page-link" href="?halaman=<?php echo $halamanaktif - 1; ?>">Sebelumnya</a></li>
                    <?php } else { ?>
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanaktif - 1; ?>">Sebelumnya</a></li>
                    <?php }  ?>
                    <!-- end -->

                    <?php for ($i = $start_number; $i <= $end_number; $i++) { ?>
                    
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