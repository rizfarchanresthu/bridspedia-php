<?php
include 'auth.php'; // Pastikan pengguna telah login
  include('partials/header.php');
  include 'config.php';

  // looping dropdown
  $alldivisi = getAlldivisi();
  $alljenisketentuan = getAlljenisketentuan();
  $allstatus = getAllstatus();
  $allinfodoc = getAllinfodoc();
  $allsearchdoc = getAllsearchdoc();

  // Konfigurasi Cari Judul
  $search = isset($_GET['search']) ? $_GET['search'] : null;
  $divisiid = isset($_GET['divisi']) ? $_GET['divisi'] : null;
  $statusid = isset($_GET['status']) ? $_GET['status'] : null;
  $infodocid = isset($_GET['info_doc']) ? $_GET['info_doc'] : null;
  $searchdoc = isset($_GET['db_dokumen']) ? $_GET['judul_ketentuan'] : null;

  // For Update Row Database
  $id = '';
  $nomor = '';
  $judul = '';
  $jenis = '';
  $tanggal = '';
  $last_review = '';
  $next_review = '';
  $divisi = '';
  $status = '';

  if(isset($_GET['ubah'])){
    $id = $_GET['ubah'];

    $query = "SELECT * FROM view_dbdokumen WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nomor = $result['nomor_ketentuan'];
    $judul = $result['judul_ketentuan'];
    $jenis = $result['jenis_ketentuan'];
    $tanggal = $result['tanggal_terbit'];
    $last_review = $result['last_review'];
    $next_review = $result['next_review'];
    $divisi = $result['divisi'];
    $status = $result['status'];
  }

?>

<main id="main">
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="pp.php">Risk Management</a></li>
        </ol>
        
        <h2>Policy & Procedure</h2>

        <ul class="nav nav-tabs justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="upload-doc-rm.php">Upload Dokumen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="database-doc-rm.php">Database Dokumen</a>
          </li>
        </ul>  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= content ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">
              
              <!-- upload dokumen -->
              <h2 class="entry-title" style="padding-top: 25px;">
                <a href="#">Upload Dokumen Kebijakan dan Prosedur</a>
              </h2>

              <form action="proses-rm.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>" name="id">  
              
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="nomor_ketentuan" class="form-label">Nomor Ketentuan</label>
                      <div class="input-group mb-3">
                        <input type="text" value="<?php echo $nomor;?>" name="nomor_ketentuan" id="nomor_ketentuan" class="form-control" placeholder="contoh: KD-000/BRIDS/00/0000" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="judul_ketentuan" class="form-label">Judul Ketentuan</label>
                      <div class="input-group mb-3">
                        <input  type="text" value="<?php echo $judul;?>" name="judul_ketentuan" id="judul_ketentuan" class="form-control" aria-label="Username" placeholder="Masukkan Judul Ketentuan" aria-describedby="basic-addon1">
                      </div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="jenis_ketentuan" class="form-label">Jenis Ketentuan</label>
                      <div class="input-group mb-3">
                        <select class="form-select" name="jenis_ketentuan" id="jenis_ketentuan">
                          <!-- <option>-- Pilih Jenis Ketentuan --</option> -->
                            <?php foreach( $alljenisketentuan as $jenis_ketentuan) : ?>
                              <option value="<?= $jenis_ketentuan['id_jk']?>"><?= $jenis_ketentuan['jenis_ketentuan']?></option>
                            <?php endforeach;?>
                        </select>
                      </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                      <div class="input-group mb-3">
                        <input  type="date" value="<?php echo $tanggal;?>" class="form-control" name="tanggal_terbit" id="tanggal_terbit">
                      </div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="last_review" class="form-label">Last Review</label>
                      <div class="input-group mb-3">
                        <input  type="date" value="<?php echo $last_review;?>" class="form-control" name="last_review" id="last_review">
                      </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <label for="next_review" class="form-label">Next Review</label>
                      <div class="input-group mb-3">
                        <input  type="date" value="<?php echo $next_review;?>" class="form-control" name="next_review" id="next_review">
                      </div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="divisi" class="form-label">Divisi</label>
                  <div class="input-group mb-3">
                    <select class="form-select" name="divisi" id="divisi">
                      <!-- <option>-- Pilih Divisi --</option> -->
                      <?php foreach( $alldivisi as $divisi) : ?>
                        <option value="<?= $divisi['id_div']?>"><?= $divisi['divisi']?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <label for="status" id="status" class="form-label">Status</label>
                      <div class="input-group mb-3">
                        <select  name="status" id="status" class="form-select" aria-label="Default select example">
                          <!-- <option>-- Pilih Status --</option> -->
                          <?php foreach( $allstatus as $status) : ?>
                        <option value="<?= $status['id_sts']?>"><?= $status['status']?></option>
                      <?php endforeach;?>
                        </select>
                      </div>
                  </div>
                </div>

              <!-- Informasi Dokumen mencabut/update/masih relevan -->
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="info_doc" class="form-label">Informasi Dokumen</label>
                <div class="input-group mb-3">
                  <select class="form-select" name="info_doc" id="info_doc">
                  <!-- <option>-- Pilih Informasi Dokumen --</option> -->
                  <?php foreach( $allinfodoc as $infodoc) : ?>
                      <option value="<?= $infodoc['id_info']?>"><?= $infodoc['info_doc']?></option>
                    <?php endforeach;?>

                  </select>
                </div>
                </div>
                
                <div class="col-sm-6">
                  <label for="search"  class="form-label">Cari Dokumen</label>
                    <div class="input-group mb-3">
                    <!-- <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"> -->
                    <select class="form-select" name="searchdoc" id="searchdoc">
                    <option value="">-- Pilih Dokumen --</option>
                      <?php 
                        foreach( $allsearchdoc as $searchdoc) : {
                          echo '<option value="'.$searchdoc['judul_ketentuan'].'">'.$searchdoc['judul_ketentuan'].'</option>';
                          // echo '<option value="''.$searchdoc['judul_ketentuan'].'">' .$searchdoc['judul_ketentuan'].'</option>';
                        }
                      endforeach;
                        ?>
                      </select>
                    
                    </div>
                </div>
              </div>

              <!-- Input/Upload Document -->
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="file" class="form-label">Upload Dokumen</label>
                    <div class="input-group mb-3">
                      <input <?php if(!isset($_GET['ubah'])) ?> class="form-control" type="file" name="file" id="file" accept=".pdf, .doc, .docx">
                    </div>
                </div>
                
                <!-- button submit-->
                <div class="col-sm-6">
                  <?php
                    if(isset($_GET['ubah'])){
                  ?>
                      <button type="submit" name="aksi" value="edit" class="btn btn-primary" style="margin-top: 30px;" onclick= "return confirm('Apakah anda yakin akan mengubah dokumen ini?')">Simpan Perubahan</button>
                  <?php
                    } else {
                  ?>
                      <button type="submit" name="aksi" value="add" class="btn btn-primary" style="margin-top: 30px;">Tambahkan</button>
                  <?php
                    }
                  ?>
                      <a href="database-doc-rm.php" type="button" class="btn btn-danger" style="margin-top: 30px;" onclick= "return confirm('Apakah anda yakin akan membatalkan proses ini?')">Batal</a>
                </div>
                
              </div>
              </form>
              <!-- end upload dokumen -->
              
            </article><!-- End blog entry -->
          </div>
        </div>
        </div><!-- End blog entries list -->
     
        <script src="jquery-3.2.1.min.js"></script>
        <script src="jquery.autocomplete.min.js"></script>
        <!-- <script type="text/javascript">
          $( function() {
            $( "#search_doc" ).autocomplete({
            source: 'script.php'  
            });
        });

        </script> -->
        <script>

    var select_box_element = document.querySelector('#searchdoc');

    dselect(select_box_element, {
        search: true
    });

</script>

<!-- ======= Footer ======= -->
<?php
  include('partials/footer.php')
?>

