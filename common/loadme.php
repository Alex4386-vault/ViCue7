<?php
  // YeoidoTech ViCue7 Engine LoadMe File
  // Copyright (c) YeoidoTech, Alex4386

  //Session checks
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  //Get Usernames, returns null if not exist
  function userexists($username) {
    if (isset($account['nickname'][$username])) {
        return true;
    } else {
        return false;
    }
  }

  //Get Usernames, returns null if not exist
  function getusername($username) {
    if (isset($account['nickname'][$username])) {
        return $account['nickname'][$username];
    } else {
        return null;
    }
  }

  //Password checks, returns true if it is correct.
  function passwordchk($username, $password) {
    if (isset($account['password'][$username])) {
        //TODO: Make it more secure by using salting+hashing algorithm
        if (md5($password) == $account['password'][$username])
        {
            return true;
        } else {
            return false;
        }
    } else {
    return false;
    }
  }
  
?>