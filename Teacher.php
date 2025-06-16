<?php
session_start();
if(isset($_SESSION['Email']) == '')
{
    header("location: index.php");
}else{
?>
<h1>Name Is <?php echo $_SESSION['Name'] ?> And Email Is <?php echo $_SESSION['Email'] ?></h1>
<a href="Logout.php">Logout</a>

<?php  } ?>