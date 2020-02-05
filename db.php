<?php

session_start();

$conn = mysqli_connect(
	'localhost',
	'root',
	'',
	'tasks'
) or die(mysql_error($mysqli));


?>