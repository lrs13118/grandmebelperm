﻿<?php

$connection = mysqli_connect ('127.0.0.1', 'root', '', 'grand_mebel_perm');
if ($connection == false){
	echo 'Не удалось подключиться к базе данных(';
	echo mysqli_connect_error();
	exit();
	}
	
?>
