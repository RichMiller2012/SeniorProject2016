<?php

	//try local, then try remote server
  $dbconnect = mysqli_connect("localhost", "root", "", "hsdb");
  if(mysqli_connect_errno()){
	  $dbconnect = mysqli_connect("localhost", "tfamilyh_test", "thefamilyhomestead2017", "tfamilyh_test");
  } else {
	 echo "Connection failed:".mysqli_connect_error();
	  exit; 
  }

?>