<?php
/*******************************************************************
* Author:   Joanne Icken
* Purpose:  This program prints a times table
*/

$times = 5;
$start = 1;
$end = 10;

echo "Here is the 5's table\n";
for($start;$start<=$end;$start++) {
	$answer=$times * $start;
	echo $times."x".$start."=".$answer."\n";
}