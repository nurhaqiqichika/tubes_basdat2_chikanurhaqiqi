<?php
require 'config/database.php';
$db = getDB();
$data = $db->query("SELECT * FROM mata_kuliah");
?>

<div class="page-title">Mata Kuliah</div>
<div class="card">
<table class="table">
<tr><th>Kode</th><th>Nama</th></tr>

<?php while($d = $data->fetch_assoc()): ?>
<tr>
<td><?= $d['kode_mk'] ?></td>
<td><?= $d['nama_mk'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</div>