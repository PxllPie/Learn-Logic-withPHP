<?php 

function sorting($data) {

	// Mencari Data Terbesar dan Terkecil
	$max = $data[0];
	$min = $data[0];
	for ($i=1; $i < count($data); $i++) { 
		
		if ($max < $data[$i]) {
			$max = $data[$i];
		} else if ($min > $data[$i]) {
			$min = $data[$i];
		}

	}
	echo 'Data Terkecil : '.$min;
	echo PHP_EOL;
	echo 'Data Terbesar : '.$max;
	echo PHP_EOL;

	// ASCENDING SORTIR
	echo 'Ascending Sort : ';
	sort($data);
	$count = count($data);
	for($x = 0 ; $x < $count; $x++){
		echo $data[$x].' ';
	}

	echo PHP_EOL;

	
	// DESCENDING SORTIR
	echo 'Ascending Sort : ';
	rsort($data);
	$count = count($data);
	for($x = 0 ; $x < $count; $x++){
		echo $data[$x].' ';
	}

}


$data = array(6, 22, 34, 15, 2, 13, 26, 57, 42, 32);

sorting($data);

 ?>