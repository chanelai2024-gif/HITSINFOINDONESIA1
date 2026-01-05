<?php
$berita = json_decode(file_get_contents("berita.json"), true);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>HITS INFO INDONESIA</title>
<style>
body{font-family:Arial;background:#f5f5f5;margin:0}
header{background:#cc0000;color:#fff}
.header{padding:15px}
nav{background:#a80000}
nav a{color:#fff;padding:10px;display:inline-block;text-decoration:none;font-weight:bold}
.container{max-width:1100px;margin:20px auto;display:flex;gap:20px}
.main{width:70%;background:#fff;padding:20px}
.side{width:30%;background:#fff;padding:20px}
ul{list-style:none;padding:0}
li{padding:8px 0;border-bottom:1px solid #eee;font-size:14px}
footer{text-align:center;padding:15px;background:#fff;margin-top:30px}
@media(max-width:768px){
.container{flex-direction:column}
.main,.side{width:100%}
}
</style>
</head>
<body>

<header>
<div class="header">
<h1>HITS INFO INDONESIA</h1>
<p>Portal Berita Terkini & Terpercaya</p>
</div>
<nav>
<a href="index.php">Home</a>
<a href="politik.php">Politik</a>
<a href="sumbar.php">Sumatera Barat</a>
<a href="internasional.php">Internasional</a>
</nav>
</header>

<div class="container">
<div class="main">
<h2>Berita Terbaru</h2>
<ul>
<?php foreach(array_reverse($berita) as $b): ?>
<li><b><?= $b['jam'] ?></b> | <?= $b['kategori'] ?> | <?= $b['judul'] ?></li>
<?php endforeach; ?>
</ul>
</div>

<div class="side">
<h3>Populer</h3>
<ul>
<li>Viral Hari Ini</li>
<li>Trending Nasional</li>
<li>Kabar Terkini</li>
</ul>
</div>
</div>

<footer>© 2026 HITS INFO INDONESIA</footer>
</body>
</html>
