<?php
  include('partials/header.php');
?>

  <!-- ======= Login Section ======= -->
  <div class="container" style="margin-top: 7rem;">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <img src="https://www.bridanareksasekuritas.co.id/cfind/source/images/logo.png" alt="">
            </div> 

            <!-- login card -->
            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <?php
                    if(isset($_SESSION['noAdmin'])){
                    echo $_SESSION['noAdmin'];
                    unset($_SESSION['noAdmin']);
                    }
                  ?>
                </div>

                <!-- Form -->
                <form method="POST" action="proses-login.php" class="row g-3 needs-validation" novalidate>
                  
                  <!-- username -->
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                  </div>

                  <!-- password -->
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <!-- login button -->
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                  </div>
                </form>
                <!-- end form -->
              </div>
            </div>  
          </div>
        </div>
      </div> 
    </section>
  </div>    
  <!-- End Login -->
   
<?php
  include('partials/footer.php')
?>