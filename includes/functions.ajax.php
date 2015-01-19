<?php
include_once("../config.php");
require_once ("Report.class.php");

$action = $_REQUEST["action"];


/**
 * ADD - Ajouter un report
 **/

if ($action == "addReport") {

    $dateBegin = date('Y-m-d H:i:s');  // Format date de MySQL
    $dateEnd = date('Y-m-d H:i:s');  // Format date de MySQL
    $latitude= trim(stripslashes(strtolower($_POST['latitude'])));
    $longitude = trim(stripslashes($_POST['longitude']));
    $status = "1";
    $userIp = $_SERVER['REMOTE_ADDR'];
    $userId = "1";

    // Initialisation de l'objet Film
    $report = new Report();

    $error = array();
    if(!$longitude) $error[] = "No longitude";
    if(!$latitude) $error[] = "No latitude";
    if(!$dateBegin) $error[] = "Il manque la date";
    if(!$error) {


    // Creation de l'objet Film avec les paramètres du POST
    $report->createReport($dateBegin, $dateEnd, $latitude, $longitude, $status, $userIp, $userId);

    if(!$in_site) exit("OK");
    } else {
      $error = implode(" <br> ",$error);
      if (!$in_site) echo $error;
    }
}
