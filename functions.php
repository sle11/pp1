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
echo 'printArr: ';
printArr($numbers);

echo '<br>';

function largest($arr) {
    $largest = 0;
    foreach ($arr as $value) {
        if($largest < $value) {
            $largest = $value;
        }
    }
    return $largest;
}

echo 'largest: ';
print largest($numbers);

echo '<br>';

function average($arr) {
    $sum = 0;
    $count = 0;
    foreach ($arr as $value) {
        $sum += $value;
        $count++;
    }

    $average = $sum / $count;

    return $average;
}

echo 'average: ';
print average($numbers);

echo '<br>';

