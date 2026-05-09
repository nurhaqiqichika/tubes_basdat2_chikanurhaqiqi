<?php
require '../config/database.php';
$db = getDB();

if($_GET['aksi']=='hapus'){
    $nim = $_GET['nim'];
    $db->query("DELETE FROM mahasiswa WHERE nim='$nim'");
}

header("Location: ../index.php?page=mahasiswa");