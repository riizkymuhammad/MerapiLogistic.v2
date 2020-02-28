<?php  


	if ($_SERVER['REQUEST_METHOD'] =='POST') {
			$p = trim($_POST['p']);
			$s = trim($_POST['s']);
			
			echo "Data yang Anda kirimkan: <br><br>";
			echo "p : $p <br>";
			echo "s : $s <br><br>";
				
	}

	//µ
	$korbanNaik = ($p - 2000) / 3000;
	$korbanTurun = (5000 - $p) / 3000;

	$stokBanyak = ($s - 1000) / 5000;
	$stokSedikit = (6000 - $s) / 5000;

	//Aturan 1
	$a1 = min($korbanTurun, $stokBanyak);
	$z1 = 5000 - (4000 * $a1);

	//Aturan 2
	$a2 = min($korbanNaik, $stokSedikit);
	$z2 = (4000 * $a2) + 1000;

	//Aturan 3
	$a3 = min($korbanNaik, $stokBanyak);
	$z3 = (4000 * $a3) + 1000;

	//Aturan 4
	$a4 = min($korbanTurun, $stokSedikit);
	$z4 = 5000 - (4000 * $a4);

	//Defuzzy
	$d = (($a1 * $z1) + ($a2 * $z2) + ($a3 * $z3) + ($a4 * $z4)) / ($a1 + $a2 + $a3 + $a4);  
	$d = (int) $d;

	echo "µkn : $korbanNaik <br>";
	echo "µkt : $korbanTurun <br>";
	echo "µsb : $stokBanyak <br>";
	echo "µss : $stokSedikit <br><br>";

	echo "a1 : $a1 <br>";
	echo "z1 : $z1 <br>";
	echo "a2 : $a2 <br>";
	echo "z2 : $z2 <br>";
	echo "a3 : $a3 <br>";
	echo "z3 : $z3 <br>";
	echo "a4 : $a4 <br>";
	echo "z4 : $z4 <br><br>";

	echo "Hasil : <b>$d<b> <br><br>";

?>