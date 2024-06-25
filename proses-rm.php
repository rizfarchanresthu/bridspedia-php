<?php
include "config.php"; //memanggil database

#masukkan isi form
if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        
        $nomor = $_POST['nomor_ketentuan'];
        $judul = $_POST['judul_ketentuan'];
        $jenis = $_POST['jenis_ketentuan'];
        $tanggal = $_POST['tanggal_terbit'];
        $last_review = $_POST['last_review'];
        $next_review = $_POST['next_review'];
        $divisi = $_POST['divisi'];
        $status = $_POST['status'];
        $info_doc = $_POST['info_doc'];
        $searchdoc = $_POST['searchdoc'];

        // upload file
        $dir = "file/"; //dimasukan ke folder file
        $file = $_FILES['file']['name']; //format nama file
        $tmpFile = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$file);

        // mysqli_query($conn, "INSERT INTO db_dokumen set file='$file';");
        
        // buat input data selain dokumen/file
        $query = "INSERT INTO db_dokumen VALUES
        (null, '$nomor', '$judul', '$jenis', '$tanggal', 
        '$last_review', '$next_review', '$divisi', '$status', '$info_doc', '$searchdoc','$file', 1);";
        $sql = mysqli_query($conn, $query);

        if($sql){
            //echo "Data Berhasil ditambahkan";
             header("location: database-doc-rm.php");
        } else{
            echo $query;
        }

            // Edit Data
            }else if($_POST['aksi']== "edit"){
            //echo "Edit Data";

            $id = $_POST['id'];
            $nomor = $_POST['nomor_ketentuan'];
            $judul = $_POST['judul_ketentuan'];
            $jenis = $_POST['jenis_ketentuan'];
            $tanggal = $_POST['tanggal_terbit'];
            $last_review = $_POST['last_review'];
            $next_review = $_POST['next_review'];
            $divisi = $_POST['divisi'];
            $status = $_POST['status'];
            $info_doc = $_POST['info_doc'];
            $searchdoc = $_POST['searchdoc'];

            $queryshow = "SELECT * FROM db_dokumen WHERE id = '$id';";
            $sqlshow = mysqli_query($conn, $queryshow);
            $result = mysqli_fetch_assoc($sqlshow);
            
            if($_FILES['file']['name'] == ""){
                $file = $result['file'];
            } else {
                $file = $_FILES['file']['name'];
                unlink("file/".$result['file']);
                move_uploaded_file($_FILES['file']['tmp_name'], 'file/'.$_FILES['file']['name']);
            }
            $query = "UPDATE db_dokumen SET 
            nomor_ketentuan='$nomor', judul_ketentuan='$judul',
            jenis_ketentuan='$jenis', tanggal_terbit='$tanggal',
            last_review='$last_review', next_review='$next_review',
            divisi='$divisi', status='$status', info_doc='$info_doc', searchdoc='$searchdoc', file='$file' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);
            header("location: database-doc-rm.php");
            }
        }

    // Hapus Data
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];

        $queryshow = "SELECT * FROM db_dokumen WHERE id = '$id';";
        $sqlshow = mysqli_query($conn, $queryshow);
        $result = mysqli_fetch_assoc($sqlshow);

        unlink("file/".$result['file']);

        $query = "DELETE FROM db_dokumen WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: database-doc-rm.php");
        } else{
            echo $query;
        }
    }

    //Download Data
    if(isset($_GET['download'])){
        
    }
?>