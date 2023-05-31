<?php
function solution($a, $x) {
    foreach ($a as $value) {
       if ($x === $value) {
          return true;
       }
   }
     return false;

}

$myArrayLetters = ['a', 'b', 'c', 'd', 'e', 'f'];
$myArrayLettersAndNumbers = ['a', 10, 'c', 33, 'e', 'f'];

echo solution($myArrayLetters, 'b');
