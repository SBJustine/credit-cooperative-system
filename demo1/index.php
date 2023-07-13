<?php

    if(!isset($_GET['m'])){
        $_GET['m']="home";
    }

    if($_GET['m']=="add-member"){
        require "views/ui_add_member.php";
    } else {
        require "views/ui_home.php";
    }
// kim justine SB
?>