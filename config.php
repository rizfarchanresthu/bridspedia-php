<?php
    //for start all session
    // session_start(); 

    //constants to store our localhost, roor, password, and database
    define('LOCALHOST', 'localhost');
    define('ROOT', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'bridspedia_login');
    define('SITEURL', 'http://localhost/bridspedia2/');

    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'bridspedia_login');
    $db_select = mysqli_select_db($conn, DATABASE);

    // connect to view_dbdokumen (policy & procedure) for seacrhing feature
    function getAlldokumen(){
        global $conn;

        // search judul
        $query = "SELECT * FROM view_dbdokumen WHERE judul_ketentuan LIKE '%%' ORDER BY id DESC";
        if(isset($_GET['search'])):
            $search = $_GET['search'];
            $query = "SELECT * FROM view_dbdokumen WHERE judul_ketentuan LIKE '%$search%'";
        endif;

        // search divisi
        if(isset($_GET['divisi'])):
            $divisi = $_GET['divisi'];
                if($divisi != "") :
                    $query .= " AND id_div = '$divisi' "; 
                endif;
        endif;

        // search jenis ketentuan
        if(isset($_GET['jenis_ketentuan'])):
            $jenis_ketentuan = $_GET['jenis_ketentuan'];
                if($jenis_ketentuan != "") :
                    $query .= " AND id_jk = '$jenis_ketentuan' "; 
                endif;
        endif;
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    };

    // connect to table divisi
    function getAlldivisi(){
        global $conn;
        $query = "SELECT * FROM divisi";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to document
    function getAllsearchdoc(){
        global $conn;
        $query = "SELECT * FROM db_dokumen";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to table info_doc
    function getAllinfodoc(){
        global $conn;
        $query = "SELECT * FROM info_doc";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to table status_rr
    function getAllstatusrr(){
        global $conn;
        $query = "SELECT * FROM status_rr";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to table risk_category
    function getAllriskcategory(){
        global $conn;
        $query = "SELECT * FROM risk_category";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to table jenis_ketentuan
    function getAlljenisketentuan(){
        global $conn;
        $query = "SELECT * FROM jenis_ketentuan";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // connect to table status
    function getAllstatus(){
        global $conn;
        $query = "SELECT * FROM status";
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // add data policy & procedure
    function addData($data){
        global $conn;
        $nomor = $data['nomor_ketentuan'];
        $judul = $data['judul_ketentuan'];
        $jenis = $data['id_jk'];
        $tanggal = $data['tanggal_terbit'];
        $last_review = $data['last_review'];
        $next_review = $data['next_review'];
        $divisi = $data['id_div'];
        $status = $data['status'];

        mysqli_query($conn, "INSERT INTO db_dokumen VALUES 
        (null, '$nomor', '$judul', '$jenis', '$tanggal', 
        '$last_review', '$next_review', '$divisi', '$status', 1);");

        if(mysqli_affected_rows($conn) > 0):
            return true;
            else :
                return false;
        endif;
    }

    // Mendefinisikan Auth.php (not ready)
        if (!defined('SITEURL')) {
            define('SITEURL', 'http://localhost/bridspedia2/'); // Sesuaikan dengan URL situs Anda
    }
        
        $conn = mysqli_connect('localhost', 'root', '', 'bridspedia_login'); // Sesuaikan dengan konfigurasi database Anda
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
 
    

?>
