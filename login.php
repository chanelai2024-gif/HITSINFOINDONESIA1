<?php
session_start();
if(isset($_POST['login'])){
if($_POST['user']=="admin" && $_POST['pass']=="12345"){
$_SESSION['login']=true;
header("Location: admin.php");
}else{
echo "Login gagal";
}
}
?>
<form method="post">
<h3>Login Admin</h3>
<input name="user" placeholder="Username"><br><br>
<input type="password" name="pass" placeholder="Password"><br><br>
<button name="login">Login</button>
</form>
