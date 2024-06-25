<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // SQL query untuk memeriksa username, password, dan level pengguna
    $sql = "SELECT * FROM db_login WHERE usernames = '$user' AND passwords = '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row['level'];

        // Set session berdasarkan level pengguna
        $_SESSION['username'] = $user;
        $_SESSION['level'] = $level;

        // Redirect sesuai dengan level pengguna
        switch ($level) {
            case 'admin':
                $_SESSION['loginMessage'] = '<span class="success">Welcome '.$user.'</span>';
                header('location: ' . SITEURL . 'risk-management.php');
                exit();
                break;
            case 'RM':
                $_SESSION['loginMessage'] = '<span class="success">Welcome '.$user.'</span>';
                header('location: ' . SITEURL . 'risk-management.php');
                exit();
                break;
            case 'kepala divisi':
                $_SESSION['loginMessage'] = '<span class="success">Welcome '.$user.'</span>';
                header('location: ' . SITEURL . 'index.php');
                exit();
                break;
            case 'user':
                $_SESSION['loginMessage'] = '<span class="success">Welcome '.$user.'</span>';
                header('location: ' . SITEURL . 'index.php');
                exit();
                break;
            default:
                $_SESSION['noAdmin'] = '<span class="fail">' . $user . ' is not registered! </span>';
                header('location: ' . SITEURL . 'login.php');
                exit();
                break;
        }
    } else {
        $_SESSION['noAdmin'] = '<span class="fail">' . $user . ' is not registered! </span>';
        header('location: ' . SITEURL . 'login.php');
        exit();
    }
}

mysqli_close($conn);
?>
