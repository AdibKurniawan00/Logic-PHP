<?php
	$jumlahtoko = 100;
	$pengeluarantoko1 = 10000;
	$pengeluarantoko68 = 30100;
	$selisihpengeluarantiaptoko = ($pengeluarantoko68 - $pengeluarantoko1) / 67;
	// echo  $selisihpengeluarantiaptoko;
	for($i=2; $i <= 81; $i++){

		$pengeluarantoko81 = $i * 300 + 10000;
		echo "$pengeluarantoko81 <br>";

	}
?>