<?php

/**
 * To get page URL, with 'http'
 *
 * @return string $url - Get page URL
 **/ 

function getPageUrl()
{
    $url = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME'];

    if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != ''){
        $url.= $_SERVER['REQUEST_URI'];
    }
    else{
        $url.= $_SERVER['PATH_INFO'];
    }

    return $url;
}

/**
 * To redirect afeter script execution
 *
 * @param string $url - Redirection path (URL)
 **/ 

function redirect($url)
{
    header("Location: $url");
    exit;
}

/**
 * To protect password, we need to hash the password with SALT (defined in config.php)
 *
 * @param string $pw - Password to hash
 * @return Hashing password with SALT
 **/ 

function hashPassword($pw)
{
    return sha1(SALT_PASSWORD.md5($pw.SALT_PASSWORD).sha1(SALT_PASSWORD));
}
