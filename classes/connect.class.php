<?php

/**
 * Database.php
 * DatabaseObject to handle managing database connection and queries
 */
class Connect {
public static $dbh;
	public function dbConn() {
		require_once __DIR__ . '/config.php';
	try {
		self::$dbh = new mysqli($dbhost, $dbuser, $dbpassword, $database, '3306');
	} catch (Exception $e){
		$error = '<div class="alert alert-danger">'._('Database Error').'</div>';
		echo $error;
	}
}

}
$connect = new Connect();
