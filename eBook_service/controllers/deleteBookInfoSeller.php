<?php

     require_once '../db_connect.php';
     header('Location:../home_Seller.php');
	 $id = $_GET['id'];
	 $query = "DELETE FROM books_info WHERE id = '$id'";
     get($query);
	
?>