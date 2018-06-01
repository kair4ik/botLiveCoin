<?php
/**
 * Created by PhpStorm.
 * User: kairbay
 * Date: 6/1/18
 * Time: 4:36 PM
 */

for ($i=0; $i < 3; $i++) {
    $date = new DateTime();
    echo "Итерация № $i, выполнена в " . $date->format("H:m:s") . "<br>";
    sleep(2);
}