<?php
require 'config/database.php';
$db = getDB();
$data = $db->query("SELECT * FROM dosen");
?>

<div class="page-title">Dosen</div>
<div class="card">
<table class="table">
<tr><th>Nama</th></tr>

<?php while($d = $data->fetch_assoc()): ?>
<tr>
<td><?= $d['nama_dosen'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</div>