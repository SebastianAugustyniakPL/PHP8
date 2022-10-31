<?php

$a = 2;
$b = 3;
$c = 4;

$d= 0;
//konkatenacja skrótowa
$d .= $a;
$d .= $b;
$d .= $c;

//konkatenacja pełna
$d  = $d. $a;

echo $d;