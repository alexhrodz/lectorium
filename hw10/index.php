<?php

$arr = array('a','b','c','d','e','f', 'a','b','c','d','e','f', 'a','b','c','d','e','f',

             'g','h','i','j','k','l', 'g','h','i','j','k','l', 'g','h','i','j','k','l',

             'm','n','o','p','r','s', 'm','n','o','p','r','s', 'm','n','o','p','r','s',

             't','u','v','x','y','z', 't','u','v','x','y','z', 't','u','v','x','y','z',

             'A','B','C','D','E','F', 'A','B','C','D','E','F', 'A','B','C','D','E','F',

             'G','H','I','J','K','L', 'G','H','I','J','K','L', 'G','H','I','J','K','L',

             'M','N','O','P','R','S', 'M','N','O','P','R','S', 'M','N','O','P','R','S',

             'T','U','V','X','Y','Z', 'T','U','V','X','Y','Z', 'T','U','V','X','Y','Z',

             '1','2','3','4','5','6', '1','2','3','4','5','6', '1','2','3','4','5','6',

             '7','8','9','0', '7','8','9','0', '7','8','9','0',);
$pass = "";
shuffle($arr);
for($i = 0; $i < 10; $i++)
  {
    $pass = $arr[$i];
    echo $pass;
  }