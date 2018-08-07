<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: http://localhost/appda/login.php");
}else{
?>
<html>
<body>
<h2>WELCOME,<?=$_SESSION["user"];?>! <a href="logout.php">LOGOUT</a></h2>
<p>
Hello sir!!!<br>Hope you are doing well!!!
</p>
</body>
</html>
<?php
}
?>