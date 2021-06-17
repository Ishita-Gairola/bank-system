<?php

	$conn = mysqli_connect('localhost','root','root','sparks_bank');

	if(!$conn){
		die("Connection to database failed ".mysqli_connect_error());
	}

?>