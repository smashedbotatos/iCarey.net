<?php
/**
* Header file for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/

include_once( 'connect.class.php' );

class Basic extends Connect {

  private $error;


  /**
	 * Generates a unique token.
	 *
	 * Intended for form validation to prevent exploit attempts.
	 */
	public function generateToken() {

		if(empty($_SESSION['icarey']['token']))
			$_SESSION['icarey']['token'] = md5(uniqid(mt_rand(),true));

	}
}
$basic = new Basic();
