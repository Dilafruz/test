<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '2205');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'navoiy');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(" MySQL ga ulanib bo'lmadi " . mysqli_connect_error());