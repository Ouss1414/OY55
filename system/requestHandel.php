<?php
if (empty($_GET["pid"])){
    $PageID = "home_ar";
}else{
    $PageID = isAuth($_GET["pid"]);
}

?>