<?php
/*******************************************************************
 * Author:   Joanne Icken
 * Purpose:  This program calculates the discount for a price that's
 *           entered
 */

$price = 9.50;
// $price = 10.40;
// Calculate the discount
$discount10 = '10';
$discount20 = '20';
if ($price <=10.00) {
	$discount_amount = ($price / 100) * $discount10;
	$final_price = $price - $discount_amount;
	echo "Your price is $".$final_price. " with a 10% discount\n";
} else {
	$discount_amount = ($price / 100) * $discount20;
	$final_price = $price - $discount_amount;
	echo "Your price is $".$final_price. " with a 20% discount\n";
}