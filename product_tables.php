es (6 sloc) 88 Bytes
<?php

for ($i = 1; $i <= 10; $i++) {
	echo "               ".PHP_EOL;
	echo "Taula del "."$i".PHP_EOL;
	echo "-----------------".PHP_EOL;
	for ($n = 1; $n <= 10; $n ++) {
		echo "$i"." x "."$n"." = ".$n * $i.PHP_EOL;
    } 
}

