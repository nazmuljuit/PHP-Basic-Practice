<?php
//if condition execude when some statement is true.
//syntex
/*if (condition) {
    code to be executed if condition is true;
}*/
$t = date('H');

if ($t < 15) {
    echo "the day is in first part";
}
else
{
	echo "the day is in second part";
}
?>