<?php
      $server = 'localhost';
	  $user= "root";
	  $password='';
	  $db = 'krishna_gobinda';
	  
	  $conn = mysqli_connect($server,$user,$password,$db);
	  
	  if(!$conn) {
		  die("connection Failled!:".mysqli_connect_error());
		  }
	  
?>