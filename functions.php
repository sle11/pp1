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
        echo $value . ' ';
    }
}
echo 'printArr: ';
printArr($numbers);

echo '<br>';

function largest($arr) {
    $largest = $arr[0];
    $arrLength = count($arr);
    for($i = 1; $i < $arrLength; $i++) {
        if($largest < $arr[$i]) {
            $largest = $arr[$i];
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

function removeDupe($arr) {
    return array_unique($arr);
}

echo 'removeDupe: ';
foreach (removeDupe($numbers) as $value) {
    echo $value . ' ';
}

echo '<br>';

function distribution($arr) {
    $newArr = array();
    sort($arr);

    foreach ($arr as $value) {
        if(isset($newArr[$value])) {
            $newArr[$value] += 1;
        }
        else {
            $newArr[$value] = 1;
        }
    }

    return $newArr;
}

echo 'distribution: ';
print_r (distribution($numbers));