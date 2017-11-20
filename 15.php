<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.11.2017
 * Time: 16:50
 */
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
    $a = filter_var($_GET['a'], FILTER_VALIDATE_FLOAT);
    $b = filter_var($_GET['b'], FILTER_VALIDATE_FLOAT);
    $operator = filter_var($_GET['operator'], FILTER_SANITIZE_STRING);
}
if($a === false || $b === false) {
    echo "Error: incorrect value";
}

 switch($operator) {
     case '+':
         $result = "{$a}{$operator}{$b} = " . ($a + $b);
         break;

     case '-':
         $result = "{$a}{$operator}{$b} = " . ($a - $b);
         break;

     case '*':
         $result = "{$a}{$operator}{$b} = " . ($a * $b);
         break;

     case '/':
         if ($b == 0) {
             echo "Stop,if you do this, i'll kill you";

         } else {
             $result = "{$a}{$operator}{$b} = " . ($a / $b);
         }
         break;
     default:
         echo "ERROR";
 }

    if(isset($result)) {
     echo $result;
    }
?>
<form>
    <input type="hidden" name="task" value="30">
    <input type="text" name="a">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="Send">
</form>
