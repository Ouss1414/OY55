<?php
function isAuth($PageID){
    switch ($PageID){
        case "home_en" :
            $redirectToPage = "home_en";
            break;
        default :
            $redirectToPage = "home_ar";
            break;
    }
    return $redirectToPage;
}
?>