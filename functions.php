<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: darkn
 * Date: 4/3/2019
 * Time: 2:27 PM
 */

$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($arr) {
    foreach ($arr as $value) {
        echo $value;
    }
}
printArr($numbers);
