<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.11.2017
 * Time: 16:27
 */
$s = 1200;// Метры
$t = 120;// Секунды
$v = $s/$t;
$v1= ($v * 3600)/1000;
echo "Скорость автомобиля равна $v м/с<br>";
echo "Скорость автомобиля равна $v1 км/ч";