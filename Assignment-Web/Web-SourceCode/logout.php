<?php session_start(); 
 
if (isset($_SESSION['user']))
{
    unset($_SESSION['user']); // xóa session login
}
?>
<div>Log_Out successfully</div>
<a href="trangchu.php">COME TO HOME</a>