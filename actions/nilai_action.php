<?php
require '../config/database.php';
$db = getDB();

if($_POST['aksi']=='tambah'){

    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];

    if($nilai < 0 || $nilai > 100){
        die("Nilai harus 0-100");
    }

    $db->begin_transaction();

    try {
        $db->query("INSERT INTO nilai (nim, nilai_akhir) VALUES ('$nim','$nilai')");
        $db->commit();
    } catch(Exception $e){
        $db->rollback();
    }
}

header("Location: ../index.php?page=nilai");