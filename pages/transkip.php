<?php
require 'config/database.php';
$db = getDB();
$data = $db->query("SELECT * FROM vw_transkrip");
?>

<div class="page-title">Transkrip</div>

<div class="card">
<table class="table">
<tr><th>Nama</th><th>Matkul</th><th>Nilai</th></tr>

<?php while($d = $data->fetch_assoc()): ?>
<tr>
<td><?= $d['nama_mahasiswa'] ?></td>
<td><?= $d['nama_mk'] ?></td>
<td><?= $d['nilai_akhir'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</div>