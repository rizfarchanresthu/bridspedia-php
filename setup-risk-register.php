<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php')
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Risk Register</a></li>
        </ol>
        <h2>Setup Risk Register</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formulir Risk Register ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">

            <h2 class="entry-title">
                <a href="#">Setup Risk Register</a>
            </h2>

            <div class="row g-3">

              <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Date</span>
                    <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>           

            </div>

            <div class="row g-3">
              <div class="col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Periode</span>
                      <input type="text" class="form-control" placeholder="Periode" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>

            <div class="row g-3">

              <div class="col-sm-6">
                  <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Divisi</span>
                  <select required name="divisi" id="divisi" class="form-select" aria-label="Default select example">
                    <!-- <option selected>Pilih Divisi</option> -->
                    <option  value="Business Operation & Custody Division">Business Operation & Custody Division</option>
                    <option  value="Business Strategy & Product Development Division">Business Strategy & Product Development Division</option>
                    <option value="Coorporate Secretary">Coorporate Secretary</option>
                    <option value="Debt Research">Debt Research</option>
                    <option  value="Equity Research">Equity Research</option>
                    <option value="Finance, Accounting & Treasury Division">Finance, Accounting & Treasury Division</option>
                    <option  value="General Affair & Purchasing Procurement Division">General Affair & Purchasing Procurement Division</option>
                    <option value="Human Capital Division">Human Capital Division</option>
                    <option value="Information Technology Division">Information Technology Division</option>
                    <option  value="Institutional Debt Sales & Trading Division">Institutional Debt Sales & Trading Division</option>
                    <option  value="Institutional Equity Sales & Trading Division">Institutional Equity Sales & Trading Division</option>
                    <option  value="Internal Audit Division">Internal Audit Division</option>
                    <option  value="Investment Banking Advisory Division">Investment Banking Advisory Division</option>
                    <option  value="Investment Banking Capital Market Division">Investment Banking Capital Market Division</option>
                    <option  value="Legal, Compliance, & KYC-AML Division">Legal, Compliance, & KYC-AML Division</option>
                    <option  value="QMR & Steering Committee">QMR & Steering Committee</option>
                    <option  value="Retail Business Acquisition Division">Retail Business Acquisition Division</option>
                    <option  value="Retail Business Activation & Engagement Division">Retail Business Activation & Engagement Division</option>
                    <option  value="Risk Management Division">Risk Management Division</option>
                  </select>
                </div>
              </div>

            </div>

            <div>
                <button type="button" class="btn btn-primary ">Search</button>
            </div>
            
            <div class="table-responsive" style="margin-top: 30px;">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >No</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Tahun</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Periode</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Divisi</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Owner</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Status</th>
                    <th class="text-light" style="background-color: #00529c;" scope="col" >Action</th>            
                  </tr>

                  <tr style="height:30px" >
                    <td class="no">1</td>
                    <td class="tahun">2018</td>
                    <td class="periode">1</td>
                    <td class="divisi">Risk Management</td>
                    <td class="owner"></td>
                    <td class="total_score">6</td>
                    <td >
                        <!-- edit button -->
                        <a href="">
                            Edit | 
                        </a>
                        
                        <!-- delete button -->
                        <a href="" onclick="return confirm('Apakah anda yakin ingin menghapus dokumen?')" >
                            Hapus
                        </a>
                    </td>
                  </tr>

                  <tr>
                    <td contenteditable="true" class="no"></td>
                    <td contenteditable="true" class="risk_code"></td>
                    <td contenteditable="true" class="risk_category"></td>
                    <td contenteditable="true" class="risk_event"></td>
                    <td contenteditable="true" class="score_probability"></td>
                    <td contenteditable="true" class="risk_event"></td>
                    <td> </td>
                  </tr>
                  </thead>
              </table>
            </div>

            <!-- Button Tambah Data -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 10px;">
            <button type="button" class="btn btn-primary ">Tambah Data</button>
            </div>

            <!-- Button Kirim & Simpan Keseluruhan -->
            <div >
            <button type="button" class="btn btn-primary ">Kirim</button>
            <button type="button" class="btn btn-primary ">Simpan</button>
            </div>

            </article><!-- End blog entry -->

          </div>
        </div>

      </div><!-- End blog entries list -->
     
  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>