<?php

//条件分岐（switch）

$signal = "red";

switch($signal){
    case "red":
        echo "止まれ！";
        break;
     case "blue":
     case "grren":
        echo "進め！";
        break;
     case "yellow":
        echo "注意！";
        break;