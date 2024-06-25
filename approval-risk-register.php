<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';
?>

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
        
          <div class="row">
            <div class="col-lg-12 entries">
            <article class="entry">

              <!-- table data risk register -->
              <div class="table-responsive" style="margin-top: 30px;">
                <table class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th class="text-light" style="background-color: #00529c; width:50px" scope="col" rowspan="2">No</th>
                      <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Risk_Code</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Category</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Event</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" colspan="3">Score</th>
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Risk_Treatment</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" colspan="3">Residual_Risk</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Supporting_Document</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Verified</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Comment</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;" scope="col" rowspan="2">Action</th> -->
                    </tr>

                    <tr>
                      <th class="text-light" style="background-color: #00529c;">Probability</th>
                      <th class="text-light" style="background-color: #00529c;">Impact</th>
                      <th class="text-light" style="background-color: #00529c;">Total_Score</th>

                      <!-- <th class="text-light" style="background-color: #00529c;">Probability</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;">Impact</th> -->
                      <!-- <th class="text-light" style="background-color: #00529c;">Total_Score</th> -->
                    </tr>
                  </thead>

                  <tbody >
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $no; ?>
                        </td>
                    </tr>
                  </tbody>    
                </table>
              </div>
                
              <!-- Form Pengguna -->
              <div class="table-responsive" style="margin-top: 30px;">
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <td scope="col" ></td>
                      <td scope="col" ></td>
                      <th class="text-light" style="background-color: #00529c;" scope="col">Nama</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col">Date</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" >Status</th>
                      <th class="text-light" style="background-color: #00529c;" scope="col" >Disposisi</th>                   
                    </tr>
                    
                    <tr>
                      <th class="text-light" style="background-color: #00529c;" class="no">PIC</th>
                      <td class="risk_code">Risk Owner</td>

                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <th class="text-light" style="background-color: #00529c;" class="no">Approval</th>
                      <td class="risk_code">Head Division</td>

                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>

                    <tr>
                      <th class="text-light" style="background-color: #00529c;" class="no">Reviewer</th>
                      <td class="risk_code">Risk Management</td>

                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      
                    </tr>
                    </thead>
                </table>
              </div>

              <!-- Button Kirim & Simpan Keseluruhan -->
              <div >
                <button type="button" class="btn btn-primary ">Kirim</button>
                <button type="button" name="aksi" value="add" class="btn btn-primary ">Simpan</button>
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