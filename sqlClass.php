<?php
define ('HOST', 'localhost');
define ('USERNAME', 'root');
define('PASSWORD', "");
define ('DB', 'darbuotojai');
define ('CHARSET', 'utf8');

class MySQLDB {
	static $connect=NULL;
	private static function connect(){
		self::$connect= mysqli_connect( HOST, USERNAME, PASSWORD);
		mysqli_select_db (self::$connect, DB);
		mysqli_set_charset(self::$connect, CHARSET);

	}
