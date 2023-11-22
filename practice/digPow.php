<?php
// digPow(46288, 3) should return 51 since 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51

function digPow($n, $p)
{
  // your code
  $str = strval($n);
  $arrNum = str_split($str);
  $count = 0;

  foreach ($arrNum as $value) {

      $count += intval($value) ** $p;
      $p++;
  }
  $result = $count / $n;
   
 //if($result == )

 return $result >= 1 && ((int) strpos(strrev(strval($result)) , ".")) == 0 ? $result : -1;


}

echo digPow(46288, 3);