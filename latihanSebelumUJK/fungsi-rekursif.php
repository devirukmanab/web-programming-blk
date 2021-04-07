<?php
function faktorial($angka) {
	if($angka < 2) {
		return 1;
	} else {
		// memanggil dirinya sendiri
		return ($angka * faktorial($angka - 1));
	}
}

// memanggil fungsi
echo "Faktorial dari 5 adalah ". faktorial(5);
?>