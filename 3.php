<?php 

function pohon($x, $y) {

	$semi = 0;
	$gugur = 1;

	for ($tahun=1; $tahun <= $y; $tahun++) {
	 
		for ($i=0; $i < 2; $i++) { 
			if ($i == $semi) {
				$x = $x * 2;
			} else if ($i = $gugur) {
				$x = $x + 1;
			}
		}
	}

	echo 'Tinggi Pohon : '.$x. ' m';

}

echo "Tinggi awal Pohon : ";
$tinggi = trim(fgets(STDIN));
echo "Masukan Tahun : ";
$tahun = trim(fgets(STDIN));


pohon($tinggi, $tahun);


 ?>