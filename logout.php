<?php
    session_start();

    // Hapus semua variabel session
    session_unset();

    // Hancurkan session
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <script>
        // Tampilkan alert saat halaman dimuat
        window.onload = function() {
            alert("Anda berhasil logout!");
            window.location.href = "login.php"; // Redirect ke halaman login setelah alert ditampilkan
        };
    </script>
</head>
<body>
    <p>Logging out...</p>
</body>
</html>
