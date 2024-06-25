<?php
  include('partials/header.php');
  include 'config.php';

  // Retrieve and validate `id_dfr` from GET parameters
  $id_dfr = isset($_GET['id_dfr']) ? intval($_GET['id_dfr']) : 0;

    if ($id_dfr > 0) {
      // Use prepared statements to prevent SQL injection
      $stmt = $conn->prepare("SELECT * FROM view_dbformriskregister WHERE id_dfr = ?");
      $stmt->bind_param("i", $id_dfr);
      $stmt->execute();
      $result = $stmt->get_result();
      $data = $result->fetch_all(MYSQLI_ASSOC); // Fetch all data associated with id_dfr
      $stmt->close();
  } else {
      echo "Invalid ID";
    exit;
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
                <a>Detail Risk Register</a>
              </h2>
              
                 <!-- Display Date and Periode above the table -->
              <div class="entry-content">
                <div class="info">
                  <table>
                    <tr>
                      <td style=" padding-right: 250px;"><p><strong>Date    :</strong> <?php echo htmlspecialchars($data[0]['date']); ?></p></td>
                      <td><p><strong>Periode :</strong> <?php echo htmlspecialchars($data[0]['periode']); ?></p></td>
                    </tr>
                    <tr>
                      <td style=" padding-right: 250px;"> <p><strong>Divisi  :</strong> <?php echo htmlspecialchars($data[0]['divisi']); ?></p></td>
                      <td><p><strong>Status  :</strong> <?php echo htmlspecialchars($data[0]['status']); ?></p></td>
                    </tr>
                  </table> 
                </div>
                <div class="table-responsive table-bordered">
                  <table class="table" id="datatable">
                    <thead>
                      <tr>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">No</th>
                        <th class="text-light" style="background-color: #00529c" scope="col" rowspan="2">Risk_Code</th>
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
                        <?php if ($data): ?>
                          <?php $nomor = 1; foreach ($data as $row): ?>
                            <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo htmlspecialchars($row['risk_code']); ?></td>
                              <td><?php echo htmlspecialchars($row['risk_category']); ?></td>
                              <td><?php echo htmlspecialchars($row['risk_event']); ?></td>
                              <td><?php echo htmlspecialchars($row['risk_factor']); ?></td>
                              <td><?php echo htmlspecialchars($row['risk_indicator']); ?></td>
                              <td><?php echo htmlspecialchars($row['impact']); ?></td>
                              <td><?php echo htmlspecialchars($row['scr_pro']); ?></td>
                              <td><?php echo htmlspecialchars($row['scr_imp']); ?></td>
                              <td><?php echo htmlspecialchars($row['scr_ttl']); ?></td>
                              <td><?php echo htmlspecialchars($row['risk_treatment']); ?></td>
                              <td><?php echo htmlspecialchars($row['date_identification']); ?></td>
                              <td><?php echo htmlspecialchars($row['rr_pro']); ?></td>
                              <td><?php echo htmlspecialchars($row['rr_imp']); ?></td>
                              <td><?php echo htmlspecialchars($row['rr_ttl']); ?></td>
                              <td><?php echo htmlspecialchars($row['document']); ?></td>
                              <td><?php echo htmlspecialchars($row['verified']); ?></td>
                              <td><?php echo htmlspecialchars($row['comment']); ?></td>
                            </tr>
                          <?php endforeach; ?>
                        <?php else: ?>
                          <tr>
                            <td colspan="7">No records found</td>
                          </tr>
                          <?php endif; ?>
                      </tbody>
                  </table>
                </div>

                <div class="mt-4">
                  <button type="button" class="btn btn-danger" onclick="history.back()">Kembali</button>
                </div>

              </div>
            </article><!-- End blog entry -->
          </div>
        </div>
      </div><!-- End blog entries list -->

    <!-- ======= Footer ======= -->
    <?php include('partials/footer.php'); ?>
  </section><!-- End blog section -->
</main>
