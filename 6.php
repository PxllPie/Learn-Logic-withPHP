<?php 

function tobiner($input) {

	$biner = array();

	// Konversi Desimal ke Biner dan menjadikannya array
	while ($input > 0) {
		$a = $input % 2;
		Array_push($biner, $a);
		$input = ($input - $a) / 2;
	}

	// Mengetahui Index Terakhir array
	$index = count($biner) - 1;


	$newbiner = array();
	// Melooping array dan menampilkannya dari belakang
	while ($index >= 0) {
		
		Array_push($newbiner, $biner[$index]);
		$index--;
	}

	// Konversi Array ke String
	$newbiner = implode('', $newbiner);

	echo 'Biner : '.$newbiner;

}

echo "Masukan Nilai Desimal : ";
$desimal = trim(fgets(STDIN));

tobiner($desimal);

 ?>