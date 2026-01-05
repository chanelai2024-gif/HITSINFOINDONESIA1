<?php
$berita=json_decode(file_get_contents("berita.json"),true);
?>
<h2>Internasional</h2>
<ul>
<?php foreach($berita as $b): if($b['kategori']=="Internasional"): ?>
<li><b><?= $b['jam'] ?></b> | <?= $b['judul'] ?></li>
<?php endif; endforeach; ?>
</ul>
<a href="index.php">← Kembali</a>
