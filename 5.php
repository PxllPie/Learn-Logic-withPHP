<?php 

function depan($string, $start, $jumlah_kata) {
	$array = array();
	$last = $start + $jumlah_kata;

	for ($i=$start; $i < $last; $i++) { 
		array_push($array, $string[$i]);
	}

	return implode('', $array);
}

function belakang($string, $start, $jumlah_kata) {
	$array = array();
	$last = $start - $jumlah_kata;

	for ($i=$start; $i > $last; $i--) { 
		array_push($array, $string[$i]);
	}

	return implode('', $array);
}


function palindrome($string, $kata) {
	$string = str_split($string);
	$arr_kata = str_split($kata);
	$count = count($string) - count($arr_kata);
	$hasil = 0;

	$start = 0;
	for ($i=$start; $i <= $count; $i++) { 
		if (depan($string, $i, count($arr_kata)) == $kata) {
			$hasil++;	
		}
	}

	$start = count($string) - 1;
	$last = count($arr_kata) - 1;

	for ($i=$start; $i >= $last; $i--) { 
		if (belakang($string, $i, count($arr_kata)) == $kata) {
			$hasil++;
		} 
	}

	echo 'Ditemukan '.$hasil. ' kali';
}

echo "Masukan String : ";
$string = trim(fgets(STDIN));
echo "Masukan Kata yang ingin dicari : ";
$kata = trim(fgets(STDIN));



palindrome($string, $kata);


 ?>