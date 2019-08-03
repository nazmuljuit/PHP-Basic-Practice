<?php
//for loop
//PHP for loops execute a block of code a specified number of times.

/*for (init counter; test counter; increment counter) {
    code to be executed;
}*/

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}


//foreach loop
$names = $arrayName = array('Abir','Rana','Jasim','Riaz');
foreach ($names as  $v) 
	{
		echo $v."<br>";
	}
?>