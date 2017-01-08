<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'darbuotojai');
mysqli_set_charset($con, 'utf8');

mysqli_close($con);
