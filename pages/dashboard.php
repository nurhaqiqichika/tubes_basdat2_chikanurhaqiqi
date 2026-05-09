<?php
require 'config/database.php';
$db = getDB();

$mhs = $db->query("SELECT COUNT(*) total FROM mahasiswa")->fetch_assoc();
$dosen = $db->query("SELECT COUNT(*) total FROM dosen")->fetch_assoc();
$mk = $db->query("SELECT COUNT(*) total FROM mata_kuliah")->fetch_assoc();
$nilai = $db->query("SELECT COUNT(*) total FROM nilai")->fetch_assoc();
?>

<div class="page-title">Dashboard</div>
<div class="page-sub">Statistik Sistem</div>

<div class="stat-grid">
  <div class="stat-card">
    <div class="stat-value"><?= $mhs['total'] ?></div>
    <div class="stat-label">Mahasiswa</div>
  </div>

  <div class="stat-card">
    <div class="stat-value"><?= $dosen['total'] ?></div>
    <div class="stat-label">Dosen</div>
  </div>

  <div class="stat-card">
    <div class="stat-value"><?= $mk['total'] ?></div>
    <div class="stat-label">Matkul</div>
  </div>

  <div class="stat-card">
    <div class="stat-value"><?= $nilai['total'] ?></div>
    <div class="stat-label">Nilai</div>
  </div>
</div>