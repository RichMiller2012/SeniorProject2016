<?php
  //$dbconnect = mysqli_connect("localhost", "tfamilyh_test", "thefamilyhomestead2017", "tfamilyh_test");
  $dbconnect = mysqli_connect("localhost", "root", "", "hsdb");
  if(mysqli_connect_errno()){
	  
	  if(mysqli_connect_errno()){
		  echo "Connection failed:".mysqli_connect_error();
	  exit;
	  }
    }
    //mysqli_set_charset( $dbconnect, 'utf8');
?>