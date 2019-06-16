<?php 

function segitiga($input) {
	
	$prima = array();

	// Melooping bilangan prima dan memasukan ke dalam array
	for ($i=1; $i <= 100 ; $i++) { 
		$a = 0;
		for ($j=1; $j <= $i; $j++) { 

			if ($i % $j == 0) {
				$a++;
			}

		}

		if ($a == 2) {
			Array_push($prima, $i);
		}

	}


	$index = 0;
	// Cek Input
	if ($input > 0 && $input < 10) {

		for ($z=1; $z <= $input ; $z++) { 
		
			for ($i=1; $i <= $prima[$index] ; $i++) { 

				$a = 0;
				for ($j=1; $j <= $i; $j++) { 

					if ($i % $j == 0) {
					$a++;
					}
				}

				if ($a == 2) {
					echo $i. ' ';
				}

			}

			echo PHP_EOL;
			$index++;
		}
	} else {
		echo "masukan angka antara 1 - 9!";
	}
}

echo "Masukan Alas Sekaligus Tinggi : ";
$input = trim(fgets(STDIN));
segitiga($input);

 ?>


