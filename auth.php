<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

function check_access($allowed_levels) {
    if (!isset($_SESSION['level']) || !in_array($_SESSION['level'], $allowed_levels)) {
        return false;
    }
    return true;
}

?>
