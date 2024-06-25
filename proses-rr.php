<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php"; // Memanggil file konfigurasi database

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $date = $_POST['date'];
    $periode = $_POST['periode'];
    $divisi = $_POST['divisi'];
    $status_rr = $_POST['status_rr'];

    // Deklarasi variabel untuk data lainnya
    $risk_code = $_POST['risk_code'];
    $risk_category = $_POST['risk_category'];
    $risk_event = $_POST['risk_event'];
    $risk_factor = $_POST['risk_factor'];
    $risk_indicator = $_POST['risk_indicator'];
    $impact = $_POST['impact'];
    $scr_pro = $_POST['scr_pro'];
    $scr_imp = $_POST['scr_imp'];
    $scr_ttl = $_POST['scr_ttl'];
    $risk_treatment = $_POST['risk_treatment'];
    $date_identification = $_POST['date_identification'];
    $rr_pro = $_POST['rr_pro'];
    $rr_imp = $_POST['rr_imp'];
    $rr_ttl = $_POST['rr_ttl'];
    $document = $_POST['document'];
    $verified = $_POST['verified'];
    $comment = $_POST['comment'];

    // Cek nilai variabel untuk debug
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Query untuk menyimpan data ke dalam tabel db_formriskregister
    $query_db_formriskregister = "INSERT INTO db_formriskregister (date, periode, divisi, status_rr) VALUES (?, ?, ?, ?)";
    $stmt_db_formriskregister = mysqli_prepare($conn, $query_db_formriskregister);
    mysqli_stmt_bind_param($stmt_db_formriskregister, "ssss", $date, $periode, $divisi, $status_rr);

    // Eksekusi Query db_formriskregister
    if (!mysqli_stmt_execute($stmt_db_formriskregister)) {
        die("Error: " . mysqli_error($conn)); // Tampilkan pesan error jika query gagal dieksekusi
    }

    // Simpan ID form_risk yang baru saja dimasukkan
    $form_risk = mysqli_insert_id($conn);

    // Query untuk menyimpan data ke dalam tabel form_risk
    $query_form_risk = "INSERT INTO form_risk (form_risk, risk_code, risk_category, risk_event, risk_factor, risk_indicator, impact, scr_pro, scr_imp, scr_ttl, risk_treatment, date_identification, rr_pro, rr_imp, rr_ttl, document, verified, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_form_risk = mysqli_prepare($conn, $query_form_risk);

    // Eksekusi Query form_risk
    for ($i = 1; $i < count($risk_category); $i++) {
        // Memeriksa apakah baris kosong (indeks 0) sebelum menyimpan data
        if (!empty($risk_code[$i]) || !empty($risk_category[$i]) || !empty($risk_event[$i]) || !empty($risk_factor[$i]) || !empty($risk_indicator[$i]) || !empty($impact[$i]) || !empty($scr_pro[$i]) || !empty($scr_imp[$i]) || !empty($scr_ttl[$i]) || !empty($risk_treatment[$i]) || !empty($date_identification[$i]) || !empty($rr_pro[$i]) || !empty($rr_imp[$i]) || !empty($rr_ttl[$i]) || !empty($document[$i]) || !empty($verified[$i]) || !empty($comment[$i])) {
            mysqli_stmt_bind_param($stmt_form_risk, "isssssssssssssssss", $form_risk, $risk_code[$i], $risk_category[$i], $risk_event[$i], $risk_factor[$i], $risk_indicator[$i], $impact[$i], $scr_pro[$i], $scr_imp[$i], $scr_ttl[$i], $risk_treatment[$i], $date_identification[$i], $rr_pro[$i], $rr_imp[$i], $rr_ttl[$i], $document[$i], $verified[$i], $comment[$i]);

            // Eksekusi query untuk setiap baris data
            if (!mysqli_stmt_execute($stmt_form_risk)) {
                die("Error: " . mysqli_error($conn)); // Tampilkan pesan error jika query gagal dieksekusi
            }
        } else {
            // Pesan untuk debugging, menunjukkan baris yang dilewati
            echo "Skipping empty row $i.<br>";
        }
    }

    // Redirect ke halaman risk register setelah berhasil menyimpan data
    header("Location: risk-register.php");
    exit();
}
?>
