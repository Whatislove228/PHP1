<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.11.2017
 * Time: 15:17
 */
 $day = 8;

 switch($day) {
     case 1:
     case 2:
     case 3:
     case 4:
     case 5: echo "Рабочий день"; break;
     case 6: echo "Выходной день день"; break;
     case 7: echo "Выходной день день"; break;
     default: echo "Неизвестный день";

 }
