<?php
require "system/myFunctions.php";
require "system/requestHandel.php";
require "system/DBoprations.php";

    //switch for main pages
    switch($PageID){
        case "home_en" : include_once "home_en.php";
        break;
        default: include_once "home_ar.php";
        break;
    }
?>