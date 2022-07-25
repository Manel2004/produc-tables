
<?php

for ($i = 1; $i <= 10; $i++) {
	echo "               ".PHP_EOL;
	echo "Taula del "."$i".PHP_EOL;
	echo "-----------------".PHP_EOL;
	for ($n = 1; $n <= 10; $n ++) {
		$taules_multiplicar = array(
			"Taula del "."$i" => array(
				"$i"." x "."$n" => "$i"." x "."$n"." = ".$n * $i.PHP_EOL;
			)
		);
		
		echo $taules_multiplicar["Taula del "."$i"]["$i"." x "."$n"];
    } 
}

?>
