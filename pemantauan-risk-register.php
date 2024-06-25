<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
include 'config.php';
    // session_start();

    // Menampilkan database
    $sql = "SELECT * FROM view_dbformriskregister ORDER BY id_dfr DESC";

    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data_id = $row['id_dfr'];
            
            if (!isset($data[$data_id])) {
                $data[$data_id] = [
                    'id_dfr' => $data_id,
                    'date' => $row['date'],
                    'periode' => $row['periode'],
                    'divisi' => $row['divisi'],
                    'status' => $row['status'],
                    'items' => []
                ];
            }

            if ($row['id_fr']) {
                $data[$data_id]['items'][] = [
                    'id' => $row['id_fr'],
                    'risk_code' => $row['risk_code'],
                    'risk_category' => $row['risk_category'],
                    'risk_event' => $row['risk_event']
                ];
            }
        }
    } else {
        // echo "0 results";
    }

    $conn->close();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Risk Management</a></li>
        </ol>
        <h2>Risk Register</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Database Dokumen Kebijakan Umum ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry">
              <h2 class="entry-title">
                <a>Pemantauan Risk Register</a>
              </h2>
              <!-- tabel database -->
              <div class="entry-content" >
                <div class="table-responsive table-bordered">
                  <table class="table" id="datatable">
                    <thead>
                      <tr>
                        <th class="text-light" style="background-color: #00529c; width:50px" scope="col" rowspan="2">No</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Date</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Periode</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Divisi</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Status</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          // Untuk Nomor atau Id
                          $nomor = 1;
                      ?>
                      
                          <?php foreach ($data as $result): ?>
                      
                      <tr>
                        <td>
                          <?php echo $nomor++; ?>
                        </td>
                        <td>
                          <?php echo htmlspecialchars($result['date']); ?>
                        </td>
                        <td>
                          <?php echo htmlspecialchars($result['periode']); ?>
                        </td>
                        <td>
                          <?php echo htmlspecialchars($result['divisi']); ?>
                        </td>
                        <td>                        
                          <?php echo htmlspecialchars($result['status']); ?>
                        </td>
                        <td>
                          <!-- edit button -->
                          <a href="detail-rr.php?id_dfr=<?php echo htmlspecialchars($result['id_dfr']); ?>" type="button" class="btn btn-success btn-sm">
                            Detail
                          </a>                                           
                        </td>
                      </tr>
                      <?php
                          endforeach;
                      ?>
                      </tbody>
                  </table>
                </div>
              </div>
              <!-- end table -->
            </article><!-- End blog entry -->
          </div>
        </div>
      </div><!-- End blog entries list -->

    <!-- ======= Footer ======= -->
    <?php
      include('partials/footer.php');
    ?>
</main>
