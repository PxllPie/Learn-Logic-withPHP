<?php 


function mieinstan($uang) {
	$mie = 0;
	$bonus = 0;

	if ($uang >= 2500) {
		for ($i=$uang; $i > 0 ; $i -= 2500) { 
			if ($i >= 2500) {
				$mie++;

				if ($mie % 4 == 0) {
					$bonus++;
				}
			}
		}

		$hasil = $mie + $bonus;
		echo 'Mie yang didapat adalah :  '. $hasil;
	} else {
		echo "uang anda kurang. harga mie adalah 2500!";
	}

}


echo mieinstan(50000);

 ?>