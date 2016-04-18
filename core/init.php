<?php 
session_start();
$_SESSION['UserId']=1;
include 'db/connection.php';
include 'function/article.php';
include 'function/like.php';

?>