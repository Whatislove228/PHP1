<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.11.2017
 * Time: 14:49
 */
 $age = 'dsd';

 if ($age < 59 && $age >= 18)
{
    echo "Вам еще работать и работать";
}
if ($age > 59 )
    echo "Вам пора на пенсию";

if ($age < 18 && $age > 0)
{
    echo "Вам еще рано работать";
}

if ($age < 0 || !is_integer($age))
{
    echo "Неизвесный возраст";
}