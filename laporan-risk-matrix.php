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
        <h2>Laporan Risk Matrix</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formulir Risk Register ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">

            <h2 class="entry-title">
                <a href="#">Laporan Risk Matrix</a>
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
                    <td scope="col" rowspan="5">Probabilitas (Kemungkinan)</td>
                    <td scope="col" >5 = Sangat Kecil</td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                  </tr>

                  <tr>
                    <td scope="col" >4 = Sering</td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                  </tr>

                  <tr>
                    <td scope="col" >3 = Sedang</td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                  </tr>

                  <tr>
                    <td scope="col" >2 = Jarang</td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                  </tr>

                  <tr>
                    <td scope="col" >1 = Sangat Jarang</td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                    <td scope="col" ></td>
                  </tr>

                  <tr>
                    <td scope="col" rowspan="2" colspan="2"></td>
                    <td scope="col">1 = Sangat Kecil</td>
                    <td scope="col">2 = Kecil</td>
                    <td scope="col">3 = Sedang</td>
                    <td scope="col">4 = Besar</td>
                    <td scope="col">5 = Sangat Besar</td>
                  </tr>

                  <tr>
                    <th colspan="5">Severity (Dampak)</th>
                  </tr>
                  
                  </thead>
              </table>
            </div>

            </article><!-- End blog entry -->

          </div>
        </div>

      </div><!-- End blog entries list -->
     
  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>