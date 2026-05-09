<?php
require 'config/database.php';
$db = getDB();
$data = $db->query("SELECT * FROM log_nilai ORDER BY waktu DESC");
?>

<div class="page-title">Log Nilai</div>

<div class="card">
<table class="table">
<tr><th>NIM</th><th>Aksi</th><th>Waktu</th></tr>

<?php while($d = $data->fetch_assoc()): ?>
<tr>
<td><?= $d['nim'] ?></td>
<td><?= $d['aksi'] ?></td>
<td><?= $d['waktu'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</div>