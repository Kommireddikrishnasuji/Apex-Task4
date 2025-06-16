<?php
session_start();
if(isset($_SESSION['Email']) == '')
{
    header("location: index.php");
}else{
?>
<h1>Name Is <span style="background: linear-gradient(to right, #f83600, #fe8c00);padding: 4px;color: white;"><?php echo $_SESSION['Name'] ?></span> And Email Is <span style="  background: linear-gradient(to right, #9d50bb, #6e48aa);padding: 4px;color: white;"><?php echo $_SESSION['Email'] ?></span></h1>
<a href="Logout.php">Logout</a>

<?php  } ?>