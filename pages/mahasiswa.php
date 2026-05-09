<?php
require 'config/database.php';
$db = getDB();
$data = $db->query("SELECT * FROM mahasiswa");
?>

<div class="page-title">Mahasiswa</div>
<div class="card">
<table class="table">
<tr><th>NIM</th><th>Nama</th><th>Aksi</th></tr>

<?php while($d = $data->fetch_assoc()): ?>
<tr>
<td><?= $d['nim'] ?></td>
<td><?= $d['nama_mahasiswa'] ?></td>
<td>
<a href="actions/mahasiswa_action.php?aksi=hapus&nim=<?= $d['nim'] ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php endwhile; ?>

</table>
</div>