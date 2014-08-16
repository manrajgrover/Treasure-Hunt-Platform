<?php
$str=$_GET['q'];

$str=str_replace("s","p",$str,$i);
$str=str_replace("n","s",$str,$i);
$str=str_replace("m","4",$str,$i);
$str=str_replace("a","m",$str,$i);
$str=str_replace("y","%",$str,$i);
$str=str_replace("o","c",$str,$i);
$str=str_replace("u","&",$str,$i);
$str=str_replace("r","h",$str,$i);
$str=str_replace("e","n",$str,$i);
$str=str_replace("w",".",$str,$i);
$str=str_replace("i","q",$str,$i);
$str=str_replace("g","x",$str,$i);
$str=str_replace("t","@",$str,$i);

echo $str;
?>