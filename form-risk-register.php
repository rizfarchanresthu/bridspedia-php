<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';

  $alldivisi = getAlldivisi();
  $allstatusrr = getAllstatusrr();
  $allriskcategory = getAllriskcategory();
?>

<script>
  function BtnAdd() {
    var v = $("#TRow").clone().appendTo("#TBody");
    $(v).find("input").val('');
    $(v).removeClass("d-none");
  }

  function BtnDel(v) {
    $(v).parent().parent().remove();
  }

  function multiply(v) {
    var index = $(v).parent().parent().index();
    var scrpro = document.getElementsByName("scr_pro[]")[index].value;
    var scrimp = document.getElementsByName("scr_imp[]")[index].value;
    var amt = scrpro * scrimp;
    document.getElementsByName("scr_ttl[]")[index].value = amt;
  }

  function Calc(p) {
    var index = $(p).parent().parent().index();
    var rrpro = document.getElementsByName("rr_pro[]")[index].value;
    var rrimp = document.getElementsByName("rr_imp[]")[index].value;
    var amt = rrpro * rrimp;
    document.getElementsByName("rr_ttl[]")[index].value = amt;
  }  
</script>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Risk Register</a></li>
        </ol>

        <h2>Formulir Risk Register</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formulir Risk Register ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">   
        <form action="proses-rr.php" method="POST"> 
          <div class="row">
            <div class="col-lg-12 entries">
              <article class="entry">

                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Date</span>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Periode</span>
                          <input type="text" name="periode" id="periode" class="form-control" placeholder="Periode">
                    </div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                      <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Divisi</span>
                      <select class="form-select" name="divisi" id="divisi">
                        <?php foreach( $alldivisi as $divisi) : ?>
                          <option value="<?= $divisi['id_div']?>"><?= $divisi['divisi']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Status</span>
                        <select required name="status_rr" id="status_rr" class="form-select" aria-label="Default select example">
                          <?php foreach( $allstatusrr as $status_rr) : ?>
                            <option value="<?= $status_rr['id_stsrr']?>"><?= $status_rr['status']?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                  </div>
                </div>
            
                <div class="table-responsive" style="margin-top: 30px;">
                  <table class="table table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Risk_Code</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Category</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Event</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Factor</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Indicator</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Impact</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" colspan="3">Score</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Treatment</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Date_Identification</th>
                        <th class="text-light" style="background-color: #00529c;" scope="col" colspan="3">Residual_Risk</th>
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

                    <tbody id="TBody">
                      <tr id="TRow" class="d-none">
                        <td><input type="text" name="risk_code[]" id="risk_code" class="form-control"></td>
                        <td>
                          <select required name="risk_category[]" id="risk_category" class="form-select" aria-label="Default select example">
                            <?php foreach( $allriskcategory as $risk_category) : ?>
                              <option value="<?= $risk_category['id']?>"><?= $risk_category['risk_category']?></option>
                            <?php endforeach;?>
                          </select>
                        </td>
                        <td><input type="text" name="risk_event[]" id="risk_event" class="form-control"></td>
                        <td><input type="text" name="risk_factor[]" id="risk_factor" class="form-control"></td>
                        <td><input type="text" name="risk_indicator[]" id="risk_indicator" class="form-control"></td>
                        <td><input type="text" name="impact[]" id="impact" class="form-control"></td>
                        <td><input type="number" class="form-control" id="scr_pro" name="scr_pro[]" onchange="multiply(this)"></td>
                        <td><input type="number" class="form-control" id="scr_imp" name="scr_imp[]" onchange="multiply(this)"></td>
                        <td><input type="text" class="form-control"  name="scr_ttl[]" value="0" readonly="readonly"></td>
                        <td><input type="text" name="risk_treatment[]" id="risk_treatment" class="form-control"></td>
                        <td><input type="date" name="date_identification[]" id="date_identification" class="form-control"></td>
                        <td><input type="number" class="form-control" id="rr_pro" name="rr_pro[]" onchange="Calc(this);"></td>
                        <td><input type="number" class="form-control" id="rr_imp" name="rr_imp[]" onchange="Calc(this);"></td>
                        <td><input type="text" class="form-control"  name="rr_ttl[]" value="0" readonly="readonly"></td>
                        <td><input type="text" id="document" name="document[]" class="form-control"></td>
                        <td><input type="text" id="verified" name="verified[]" class="form-control"></td>
                        <td><input type="text" id="comment" name="comment[]" class="form-control"></td>
                        <td>                        
                            <!-- delete button -->
                            <button type="button" class="btn btn-danger" onclick="BtnDel(this)">X</button>
                        </td>
                      </tr>
                    </tbody>    
                  </table>
                </div>

                <!-- Button Tambah Data -->
                <div class="" style="margin-top: 10px;">
                <button type="button" class="btn btn-primary" onclick="BtnAdd()">
                  +
                </button>
                </div>

                <!-- Button Draft & Simpan Keseluruhan -->
                <div class="mt-3">
                  <button id="btn-save-draft" type="button" class="btn btn-primary">Simpan Draft</button>
                  <button type="submit" name="submit" id="aksi" class="btn btn-primary ">Simpan</button>
                </div>

              </article><!-- End blog entry -->
            </div>
          </div>
        </form>
      </div>
    </section><!-- End blog entries list -->

<!-- ======= Footer ======= -->
<?php
  include('partials/footer.php')
?>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Tambahkan event handler untuk tombol "Simpan Draft"
        $('#btn-save-draft').click(function() {
            saveDraft();
        });
    });

    // Fungsi untuk menyimpan draft
    function saveDraft() {
        if (typeof(Storage) !== "undefined") {
            var formData = $('#form-risk-register').serialize();
            localStorage.setItem('risk_register_draft', formData);
            console.log("Draft disimpan!");
        } else {
            console.log("Penyimpanan lokal tidak didukung.");
        }
    }
</script> -->