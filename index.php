<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php');
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>BRIDSPEDIA</span></h2>
          <p class="animate__animated animate__fadeInUp">BRIDSPEDIA merupakan suatu platform berbasis website yang di kelola oleh Divisi Risk Management PT BRI Danareksa Sekuritas </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="#">Policy & Procedure</a></h4>
              <p class="description">Policy & Procedure adalah panduan yang mengatur dan mengarahkan operasi Perusahaan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="#">Risk Register</a></h4>
              <p class="description">Risk Register adalah dokumen yang mencatat semua risiko yang diidentifikasi dalam suatu proyek atau Perusahaan. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="#">Risk Control Self-Assessment (RCSA)</a></h4>
              <p class="description">RCSA adalah proses di mana unit bisnis menilai risiko dan efektivitas kontrol secara mandiri.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sekilas tentang BRIDSPEDIA</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              BRIDSPEDIA merupakan suatu platform berbasis website yang di kelola oleh Divisi Risk Management PT BRI Danareksa Sekuritas yang dapat menyediakan form dalam melakukan pengisian daftar risiko (katalog risiko/ Risk Control Self Asessment) yang terdapat pada masing-masing divisi di Perusahaan secara berkala dengan didasarkan pada proses operasional/bisnis yang dilakukan oleh seluruh karyawan PT BRI Danareksa Sekuritas.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              BRIDSPEDIA berguna sebagai salah satu tools untuk memastikan bahwa seluruh karyawan memiliki risk awareness yang pada akhirnya akan meningkatkan budaya sadar risiko Perusahaan melalui pemanfaatkan risk technology tools sebagai business platform. Disamping itu penyediaan repository atas kebijakan dan prosedur yang lebih informatif juga turut berperan dalam pengendalian risiko di Perusahaan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

   
      <!-- ======= Footer ======= -->
<?php
include('partials/footer.php')
?>