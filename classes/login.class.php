<?php
/**
* Header file for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
include_once( 'basic.class.php' );



class Login extends Basic{

  function validate($email, $password){
    $dbc = parent::dbConn();
    $dbh = parent::$dbh;
    $stmt = $dbh->prepare("SELECT `id`, `name`, `email`, `password` FROM `users` WHERE `email` = (?) LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $result = $res->fetch_assoc();

      if ($res->num_rows == 0):
        $error = '<div class="alert alert-danger">'._('Invalid Username').'</div>';
        echo $error;
      elseif (crypt($password, $result['password']) != $result['password']):
        $error = '<div class="alert alert-danger">'._('Invalid password').'</div>';
        echo $error;
      else:
        $token = parent::generateToken();
        $_SESSION['icarey']['id'] = $result['id'];
        $_SESSION['icarey']['name'] = $result['name'];
		    $_SESSION['icarey']['email'] = $result['email'];
      endif;
	}
  
}
