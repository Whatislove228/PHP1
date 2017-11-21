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
elseif ($age > 59 ) {
    echo "Вам пора на пенсию";
}
elseif ($age < 18 && $age > 0)
{
    echo "Вам еще рано работать";
}

else
{
    echo "Неизвесный возраст";
}