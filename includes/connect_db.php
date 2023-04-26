<?php
	$dbc=mysqli_connect('localhost',"root",'AnhTu2654!','diamondstore',3307);
	if(!$dbc)
	{
	    die("Connection failed: " . mysqli_connect_error());
	}else{
	    mysqli_set_charset($dbc,'utf8');
	}
?>
