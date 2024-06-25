<?php
include 'auth.php'; // Pastikan pengguna telah login
include('partials/header.php')
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Layanan</a></li>
        </ol>
        <h2>Risk Control Self Assesment</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <!-- <h2 class="entry-title">
                <a href="#">What Does a Risk Register Do?</a>
              </h2> -->

              <table class="table table-sm table-bordered">
                <tr>
                    <th class="text-light text-center" style="background-color: #00529c;" colspan="4">MEGA, MAJOR, DAN SUB MAJOR PROSES BISNIS</th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        1. Eksekutif/ Strategis
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        1.1 Perencanaan Strategis
                    </th>
                </tr>
                <tr>
                    <th>1.1.1</th>
                    <th>1</th>
                    <th>PDP</th>
                    <td>Penyusunan & Distribusi Perencanaan Strategis</td>
                </tr>
                <tr>
                    <th>1.1.2</th>
                    <th>2</th>
                    <th>EPR</th>
                    <td>Evaluasi & Penyempurnaan Rencama Strategis</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        1.2 Kebijakan dan Prosedur
                    </th>
                </tr>
                <tr>
                    <th>1.2.1</th>
                    <th>3</th>
                    <th>PKP</th>
                    <td>Penyusunan Kebijakan dan Prosedur</td>
                </tr>
                <tr>
                    <th>1.2.2</th>
                    <th>4</th>
                    <th>KPS</th>
                    <td>Pengkinian Kebijakan & Prosedur</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        2. Pengembangan Produk & Aktivitas
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        2.1 Perencanaan Pengembangan Produk & Aktivitas Baru
                    </th>
                </tr>
                <tr>
                    <th>2.1.1</th>
                    <th>5</th>
                    <th>PPO</th>
                    <td>Perencanaan Produk/Aktivitas (Jasa)</td>
                </tr>
                <tr>
                    <th>2.1.2</th>
                    <th>6</th>
                    <th>UTM</th>
                    <td>Uji Coba, Test Market dan Evaluasi</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        2.2 Perencanaan Pemasaran & Penjualan
                    </th>
                </tr>
                <tr>
                    <th>2.2.1</th>
                    <th>7</th>
                    <th>PRS</th>
                    <td>Penyusunan Rancangan Strategi Pemasaran</td>
                </tr>
                <tr>
                    <th>2.2.2</th>
                    <th>8</th>
                    <th>PTS</th>
                    <td>Penyiapan Toolkit Selling & Tenaga Pemasaran</td>
                </tr>
                <tr>
                    <th>2.2.3</th>
                    <th>9</th>
                    <th>PPP</th>
                    <td>Penyusunan Program Pemasaran dan Penjualan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        2.3 Monitoring & Evaluasi
                    </th>
                </tr>
                <tr>
                    <th>2.3.1</th>
                    <th>10</th>
                    <th>PPD</th>
                    <td>Pengumpulan dan Pengolahan Data</td>
                </tr>
                <tr>
                    <th>2.3.2</th>
                    <th>11</th>
                    <th>ETH</th>
                    <td>Evaluasi & Tindak Lanjut Hasil Evaluasi</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3. Operasi
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.1 Penjamin Emisi (Underwriting)
                    </th>
                </tr>
                <tr>
                    <th>3.1.1</th>
                    <th>12</th>
                    <th>ENT</th>
                    <td>Penerimaan Penugasan</td>
                </tr>
                <tr>
                    <th>3.1.2</th>
                    <th>13</th>
                    <th>ELT</th>
                    <td>Pelaksanan Penugasan</td>
                </tr>
                <tr>
                    <th>3.1.3</th>
                    <th>14</th>
                    <th>EQL</th>
                    <td>Quality Control dan Laporan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.2 Perantara Pedagang Efek (Brokerage)
                    </th>
                </tr>
                <tr>
                    <th>3.2.1</th>
                    <th>15</th>
                    <th>PRE</th>
                    <td>Pembukaan Rekening Nasabah</td>
                </tr>
                <tr>
                    <th>3.2.2</th>
                    <th>16</th>
                    <th>TRS</th>
                    <td>Pelaksanaan Transaksi</td>
                </tr>
                <tr>
                    <th>3.2.3</th>
                    <th>17</th>
                    <th>STL</th>
                    <td>Penyelesaian Transaksi</td>
                </tr>
                <tr>
                    <th>3.2.4</th>
                    <th>18</th>
                    <th>PKD</th>
                    <td>Pengkinian & Perubahan Data Nasabah</td>
                </tr>
                <tr>
                    <th>3.2.5</th>
                    <th>19</th>
                    <th>TTP</th>
                    <td>Penutupan Rekening Nasabah</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.3 Jasa Penasihat (Advisory)
                    </th>
                </tr>
                <tr>
                    <th>3.3.1</th>
                    <th>20</th>
                    <th>ANT</th>
                    <td>Penerimaan Penugasan</td>
                </tr>
                <tr>
                    <th>3.3.2</th>
                    <th>21</th>
                    <th>ALT</th>
                    <td>Pelaksanaan Penugasan</td>
                </tr>
                <tr>
                    <th>3.3.3</th>
                    <th>22</th>
                    <th>AQL</th>
                    <td>Quality Control dan Laporan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.4 Manajemen Likuiditas
                    </th>
                </tr>
                <tr>
                    <th>3.4.1</th>
                    <th>23</th>
                    <th>PLS</th>
                    <td>Pengelolaan Likuiditas</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.5 Pengelolaan Jaringan Kerja (Outlet dan e-Channel)
                    </th>
                </tr>
                <tr>
                    <th>3.5.1</th>
                    <th>24</th>
                    <th>RKC</th>
                    <td>Pembukaan/ Penempatan/ Relokasi Kantor Cabang</td>
                </tr>
                <tr>
                    <th>3.5.2</th>
                    <th>25</th>
                    <th>EKC</th>
                    <td>Evaluasi Efektifitas & Efisiensi Kantor Cabang</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        3.6 Penempatan Dana & Investasi
                    </th>
                </tr>
                <tr>
                    <th>3.6.1</th>
                    <th>26</th>
                    <th>AKL</th>
                    <td>Inisiasi & Analisis Penempatan Dana</td>
                </tr>
                <tr>
                    <th>3.6.2</th>
                    <th>27</th>
                    <th>EVA</th>
                    <td>Monitoring & Evaluasi Investasi</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        4. Manajemen Risiko
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        4.1 Proses Manajemen Risiko
                    </th>
                </tr>
                <tr>
                    <th>4.1.1</th>
                    <th>28</th>
                    <th>IRO</th>
                    <td>Identifikasi, Pengukuran, Pemantauan dan Pengendalian Risiko</td>
                </tr>
                <tr>
                    <th>4.1.2</th>
                    <th>29</th>
                    <th>BCP</th>
                    <td>Manajemen Kelangsungan Usaha (BCP)</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        4.2 Integrasi Manajemen Risiko
                    </th>
                </tr>
                <tr>
                    <th>4.2.1</th>
                    <th>30</th>
                    <th>PKR</th>
                    <td>Pengukuran Kinerja Berdasarkan Risiko</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        4.3 Sistem Informasi Manajemen Risiko
                    </th>
                </tr>
                <tr>
                    <th>4.3.1</th>
                    <th>31</th>
                    <th>PPR</th>
                    <td>Penetapan Profil dan Manajemen Data Risiko</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        5. Layanan Nasabah
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        5.1 Interaksi Pelayanan
                    </th>
                </tr>
                <tr>
                    <th>5.1.1</th>
                    <th>32</th>
                    <th>PTM</th>
                    <td>Pelayanan Tatap Muka & E-Channel</td>
                </tr>
                <tr>
                    <th>5.1.2</th>
                    <th>33</th>
                    <th>SLA</th>
                    <td>Pengelolaan SLA</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        5.2 Pengelolaan Pengaduan
                    </th>
                </tr>
                <tr>
                    <th>5.2.1</th>
                    <th>34</th>
                    <th>PAD</th>
                    <td>Penanganan Pengaduan, Pemantauan & Pelaporan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        6. Penunjang
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        6.1 Pengelolaan Aset, Logistik & Penunjang
                    </th>
                </tr>
                <tr>
                    <th>6.1.1</th>
                    <th>35</th>
                    <th>RBJ</th>
                    <td>Perencanaan Pengadaan Barang & Jasa</td>
                </tr>
                <tr>
                    <th>6.1.2</th>
                    <th>36</th>
                    <th>PBJ</th>
                    <td>Pelaksanaan Pengadaan Barang & Jasa</td>
                </tr>
                <tr>
                    <th>6.1.3</th>
                    <th>37</th>
                    <th>DBJ</th>
                    <td>Distribusi Barang & Jasa</td>
                </tr>
                <tr>
                    <th>6.1.4</th>
                    <th>38</th>
                    <th>PAT</th>
                    <td>Pemeliharaan Aset</td>
                </tr>
                <tr>
                    <th>6.1.5</th>
                    <th>39</th>
                    <th>PLP</th>
                    <td>Pengelolaan Penyedia Jasa</td>
                </tr>
                <tr>
                    <th>6.1.6</th>
                    <th>40</th>
                    <th>PDK</th>
                    <td>Pengelolaan Dokumen</td>
                </tr>
                <tr>
                    <th>6.1.7</th>
                    <th>41</th>
                    <th>DSP</th>
                    <td>Disposal Aset</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        6.2 Manajemen SDM
                    </th>
                </tr>
                <tr>
                    <th>6.2.1</th>
                    <th>42</th>
                    <th>RSD</th>
                    <td>Perencanaan</td>
                </tr>
                <tr>
                    <th>6.2.2</th>
                    <th>43</th>
                    <th>RPN</th>
                    <td>Rekrutmen dan Penempatan</td>
                </tr>
                <tr>
                    <th>6.2.3</th>
                    <th>44</th>
                    <th>BSD</th>
                    <td>Pelatihan/Pengembangan/Pembinaan SDM</td>
                </tr>
                <tr>
                    <th>6.2.4</th>
                    <th>45</th>
                    <th>AKP</th>
                    <td>Administrasi Kepegawaian</td>
                </tr>
                <tr>
                    <th>6.2.5</th>
                    <th>46</th>
                    <th>PHK</th>
                    <td>Penghentian Hubungan Kerja (Pensiun, Pengunduran Diri, PHK)</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        6.3 Akuntansi, Pelaporan, Informasi & Komunikasi
                    </th>
                </tr>
                <tr>
                    <th>6.3.1</th>
                    <th>47</th>
                    <th>MIK</th>
                    <td>Monitoring Kelengkapan & Kewajaran Informasi Keuangan</td>
                </tr>
                <tr>
                    <th>6.3.2</th>
                    <th>48</th>
                    <th>RTL</th>
                    <td>Rekonsiliasi & Tindak Lanjut</td>
                </tr>
                <tr>
                    <th>6.3.3</th>
                    <th>49</th>
                    <th>PPL</th>
                    <td>Penyusunan & Pendistribusian Laporan</td>
                </tr>
                <tr>
                    <th>6.3.4</th>
                    <th>50</th>
                    <th>PKM</th>
                    <td>Pelaksanaan Komunikasi</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        6.4 Hukum & Litigasi
                    </th>
                </tr>
                <tr>
                    <th>6.4.1</th>
                    <th>51</th>
                    <th>MLA</th>
                    <td>Memberikan Legal Advise dan Bantuan Hukum</td>
                </tr>
                <tr>
                    <th>6.4.2</th>
                    <th>52</th>
                    <th>LIT</th>
                    <td>Litigasi dan Penanganan Perkara</td>
                </tr>
                <tr>
                    <th>6.4.3</th>
                    <th>53</th>
                    <th>AHP</th>
                    <td>Aspek Hukum Perjanjian Dengan Pihak Ketiga</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        7. Teknologi Informasi
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        7.1 Pengembangan Sistem
                    </th>
                </tr>
                <tr>
                    <th>7.1.1</th>
                    <th>54</th>
                    <th>IPR</th>
                    <td>Inisiasi & Perencanaan</td>
                </tr>
                <tr>
                    <th>7.1.2</th>
                    <th>55</th>
                    <th>IDK</th>
                    <td>Identifikasi Kebutuhan</td>
                </tr>
                <tr>
                    <th>7.1.3</th>
                    <th>56</th>
                    <th>PRC</th>
                    <td>Perancangan & Konfigurasi</td>
                </tr>
                <tr>
                    <th>7.1.4</th>
                    <th>57</th>
                    <th>PRG</th>
                    <td>Pemrograman</td>
                </tr>
                <tr>
                    <th>7.1.5</th>
                    <th>58</th>
                    <th>PPB</th>
                    <td>Pengamanan Pengembangan</td>
                </tr>
                <tr>
                    <th>7.1.6</th>
                    <th>59</th>
                    <th>PGJ</th>
                    <td>Pengujian</td>
                </tr>
                <tr>
                    <th>7.1.7</th>
                    <th>60</th>
                    <th>IMP</th>
                    <td>Implementasi</td>
                </tr>
                <tr>
                    <th>7.1.8</th>
                    <th>61</th>
                    <th>KUE</th>
                    <td>Kaji Ulang dan Evaluasi Pasca Implementasi</td>
                </tr>
                <tr>
                    <th>7.1.9</th>
                    <th>62</th>
                    <th>PLH</th>
                    <td>Pemeliharaan</td>
                </tr>
                <tr>
                    <th>7.1.10</th>
                    <th>63</th>
                    <th>CMP</th>
                    <td>Change Management Pengembangan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        7.2 Operasional Infrastuktur Sistem Informasi
                    </th>
                </tr>
                <tr>
                    <th>7.2.1</th>
                    <th>64</th>
                    <th>PFK</th>
                    <td>Pengelolaan Performa & Kapasitas</td>
                </tr>
                <tr>
                    <th>7.2.2</th>
                    <th>65</th>
                    <th>PKL</th>
                    <td>Pengelolaan Kelangsungan Layanan</td>
                </tr>
                <tr>
                    <th>7.2.3</th>
                    <th>66</th>
                    <th>PKF</th>
                    <td>Pengelolaan Konfigurasi</td>
                </tr>
                <tr>
                    <th>7.2.4</th>
                    <th>67</th>
                    <th>PDT</th>
                    <td>Pengelolaan Data</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        7.3 Pengamanan Sistem Informasi
                    </th>
                </tr>
                <tr>
                    <th>7.3.1</th>
                    <th>68</th>
                    <th>OPI</th>
                    <td>Organisasi Pengamanan Informasi</td>
                </tr>
                <tr>
                    <th>7.3.2</th>
                    <th>69</th>
                    <th>PAI</th>
                    <td>Pengelolaan Aset Informasi</td>
                </tr>
                <tr>
                    <th>7.3.3</th>
                    <th>70</th>
                    <th>PFL</th>
                    <td>Pengamanan Fisik & Lingkungan</td>
                </tr>
                <tr>
                    <th>7.3.4</th>
                    <th>71</th>
                    <th>POK</th>
                    <td>Pengamanan Operasi & Komunikasi</td>
                </tr>
                <tr>
                    <th>7.3.5</th>
                    <th>72</th>
                    <th>PAS</th>
                    <td>Pengendalian Akses</td>
                </tr>
                <tr>
                    <th>7.3.6</th>
                    <th>73</th>
                    <th>MKP</th>
                    <td>Monitoring Kepatuhan</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        7.4 Operasional Aplikasi
                    </th>
                </tr>
                <tr>
                    <th>7.4.1</th>
                    <th>74</th>
                    <th>INP</th>
                    <td>Input</td>
                </tr>
                <tr>
                    <th>7.4.2</th>
                    <th>75</th>
                    <th>PRO</th>
                    <td>Proses</td>
                </tr>
                <tr>
                    <th>7.4.3</th>
                    <th>76</th>
                    <th>OUT</th>
                    <td>Output</td>
                </tr>

                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        JUMLAH MEGA PROCESS
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        JUMLAH MAJOR PROCESS
                    </th>
                </tr>
                <tr>
                    <th class="text-light" colspan="4" style="background-color: #f37021">
                        JUMLAH SUB MAJOR PROCESS
                    </th>
                </tr>
              </table>
              
              
              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

             

              <h3 class="sidebar-title">Formulir</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="form-risk-register.php">Risk Register</a></li>
                  <li><a href="#">Pemantauan Risk Register</a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Kriteria Risiko</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="kriteria-risk-register.php">Risk Register</a></li>
                  <li><a href="#">Pemantauan Risk Register</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Laporan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Risk Register</a></li>
                  <li><a href="#">Risk Register Residual</a></li>
                  <li><a href="laporan-risk-matrix.php">Risk Matrix</a></li>
                  <li><a href="#">Risk Matrix After Review</a></li>
                  <li><a href="#">% Tingkat Resiko</a></li>
                  <li><a href="laporan-jenis-risiko.php">% Jenis Resiko</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Set Up</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="setup-risk-register.php">Risk Register</a></li>
                  <li><a href="#">Risk Register Residual</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Penerimaan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Risk Register</a></li>
                  <li><a href="#">Risk Register Residual</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Penerimaan</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Risk Owner</a></li>
                  <li><a href="#">Jenis Risiko</a></li>
                  <li><a href="#">Risk Event</a></li>
                </ul>
              </div>

              <h3 class="sidebar-title">Dictionary</h3>

              <h3 class="sidebar-title">FAQ</h3>
              

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('partials/footer.php')
  ?>