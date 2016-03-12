<?php 

        require_once('constante.php');//    requesting constante for connect to DB
        
	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); // Main variable for connections to database
	
	if(!$conn){//if connection failed
		die('Connection to database failed.'.$conn.'/');
	//die function - exits from php script	
	}
	
	/* Set internal character encoding to UTF-8 */
	mb_internal_encoding("UTF-8");
	mysqli_query($conn,"SET CHARACTER SET utf8");
	mysqli_query($conn,"SET NAMES utf8");
	