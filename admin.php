<?php
session_start();
if(!isset($_SESSION['login'])){
header("Location: login.php");
}

if($_POST){
$data=json_decode(file_get_contents("berita.json"),true);
$data[]=[
"jam"=>date("H:i"),
"kategori"=>$_POST['kategori'],
"judul"=>$_POST['judul']
];
file_put_contents("berita.json",json_encode($data,JSON_PRETTY_PRINT));
}
?>

<h2>Input Berita</h2>
<form method="post">
<input name="judul" placeholder="Judul Berita" required><br><br>
<select name="kategori">
<option>Politik</option>
<option>Sumatera Barat</option>
<option>Internasional</option>
</select><br><br>
<button>Publish</button>
</form>
<br>
<a href="index.php">Lihat Website</a>
