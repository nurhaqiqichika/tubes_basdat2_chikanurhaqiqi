<?php
require 'config/database.php';
$db = getDB();

$rata = $db->query("SELECT AVG(nilai_akhir) r FROM nilai")->fetch_assoc();
?>

<div class="page-title">Laporan</div>

<div class="card">
Rata-rata nilai: <?= $rata['r'] ?>
</div>