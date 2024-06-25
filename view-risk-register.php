<?php
include 'auth.php'; // Pastikan pengguna telah login
    include('partials/header.php');
    include 'config.php';
    // session_start();

  // looping dropdown
  $dokuments = getAlldokumen();
  $alldivisi = getAlldivisi();
  $alljenisketentuan = getAlljenisketentuan();

//   Search
  $search = isset($_GET['search']) ? $_GET['search'] : null;
  $divisiid = isset($_GET['divisi']) ? $_GET['divisi'] : null;
  $jenisketentuanid = isset($_GET['jenis_ketentuan']) ? $_GET['jenis_ketentuan'] : null;

    // Konfigurasi Pagination
    $jumlahdata = 5;
    $totaldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM view_dbformriskregister"));
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
      
    $ambildata_perhalaman = mysqli_query($conn, "SELECT * FROM view_dbformriskregister WHERE id_fr LIKE '%$search%' OR divisi LIKE '%$search%' LIMIT $dataawal,$jumlahdata");
    // end pagination

    $sekarang    =date("Y-m-d");
    
    // mengambil data dari database
    $no    =0;
    $query    =mysqli_query($conn, "SELECT * FROM db_formriskregister WHERE date < '$sekarang' ORDER BY date");
    while($result    =mysqli_fetch_array($query)){
    
    // menghitung jumlah hari keterlambatan dari tanggal jatuh tempo
    $kembali    =new DateTime($result['date']);
    $lambat        =new DateTime($sekarang);
    $diff    =$lambat->diff($kembali);
    $no++;
    // contoh menampilkan nomor transakasi, dan seterusnya
    // echo $result['judul_ketentuan'];
    }

    $get25 = mysqli_query($conn,  "SELECT * FROM db_formriskregister WHERE date = '$sekarang' ORDER BY date");
    $count25 = mysqli_num_rows($get25);

// Langkah 2: Menjalankan query SQL untuk mengambil data dari tabel
$queryrr = "SELECT * FROM db_formriskregister ";
$results = mysqli_query($conn, $queryrr);

// Langkah 3: Mengambil nilai tunggal dari hasil query
$data = mysqli_fetch_assoc($results);
    $date = $data['date'];
    $periode = $data['periode'];
    $divisi = $data['divisi'];
    $status_rr = $data['status_rr'];

?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Risk Management</a></li>
        </ol>
        <h2>Risk Register</h2>

        <!-- <ul class="nav nav-tabs justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="upload-doc-rm.php">Upload Dokumen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="database-doc-rm.php">Database Dokumen</a>
            </li>
        </ul> -->
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Database Dokumen Kebijakan Umum ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">

              <h2 class="entry-title">
                <a>Risk Register</a>
              </h2>
                   
              <div>
                <p>Date: 
                    <?php echo $date; ?></p>
                <p>Periode: 
                    <?php echo $periode; ?></p>
                <p>Status: 
                    <?php echo $status_rr; ?></p>
                <p>Divisi: 
                    <?php echo $divisi; ?></p>
              </div>
                 
              <!-- tabel database -->
              <div class="entry-content " style="padding-top: 25px;">
              <div class="table-responsive table-bordered">
                <table class="table" id="datatable">
                  <thead>
                    <tr>
                      <th class="text-light" style="background-color: #00529c; width:50px" scope="col" rowspan="2">No</th>
                      <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Risk_Code</th>
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Code</th> -->
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Category</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Event</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Factor</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Indicator</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Impact</th>
                      <th class="text-light text-center" style="background-color: #00529c;" scope="col" colspan="3">Score</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Treatment</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Date_Identification</th>
                      <th class="text-light text-center" style="background-color: #00529c;" scope="col" colspan="3">Residual_Risk</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Supporting_Document</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Verified</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Comment</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Action</th>
                    </tr>
                    <tr>
                      <th class="text-light" style="background-color: #00529c;">Probability</th>
                      <th class="text-light" style="background-color: #00529c;">Impact</th>
                      <th class="text-light" style="background-color: #00529c;">Total_Score</th>

                      <th class="text-light" style="background-color: #00529c;">Probability</th>
                      <th class="text-light" style="background-color: #00529c;">Impact</th>
                      <th class="text-light" style="background-color: #00529c;">Total_Score</th>
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
                      <?php echo $result['risk_code']; ?>
                      </td>
                      <td>
                      <?php echo $result['risk_category']; ?>
                      </td>
                      <td>
                      <?php echo $result['risk_event']; ?>
                      </td>
                      <td>                        
                      <?php echo $result['risk_factor']; ?>
                      </td>
                      <td>
                      <?php echo $result['risk_indicator']; ?>                        
                      </td>
                      <td>
                      <?php echo $result['impact']; ?> 
                      </td>
                      <td>
                      <?php echo $result['scr_pro']; ?>                        
                      </td>
                      <td>
                      <?php echo $result['scr_imp']; ?>                        
                                           
                      </td>
                      <td>
                      <?php echo $result['scr_ttl']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['risk_treatment']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['date_identification']; ?>                                               
                      </td><td>
                      <?php echo $result['rr_pro']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['rr_imp']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['rr_ttl']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['document']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['verified']; ?>                                               
                      </td>
                      <td>
                      <?php echo $result['comment']; ?>                                               
                      </td>
                      <td>
                      <!-- <?php echo $result['risk_treatment']; ?>                                                -->
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
              
              </article><!-- End blog entry -->
          </div>
        </div>
        </div><!-- End blog entries list -->
     
<!-- ======= Footer ======= -->
<?php
  include('partials/footer.php')
?>