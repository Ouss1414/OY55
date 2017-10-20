<?php
require "system/myFunctions.php";
require "system/requestHandel.php";
require "system/DBoprations.php";

    //switch for main pages
    switch($PageID){
        case "home_en" : include_once "home_en.html";
        break;
        default: include_once "home_ar.html";
        break;
    }
?>