<?php
$data = file_get_contents('https://data.covid19.go.id/public/api/update.json');
$data2 = file_get_contents('https://apicovid19indonesia-v2.vercel.app/api/indonesia');
$data3 = file_get_contents('https://api.kawalcorona.com/indonesia/');
$arr = json_decode($data);
$arr2 = json_decode($data2);
$arr3 = json_decode($data3);

	$tanggal = $arr->update->penambahan->tanggal;
	$positif = $arr2->positif;
	$negatif = $arr3->negatif;
	$sembuh = $arr2->sembuh;
	$meninggal = $arr2->meninggal;
	echo json_encode(array("tanggal_update" => $tanggal, "sembuh" => $sembuh, "positif" => $positif, "negatif" => $negatif, "meninggal" => $meninggal));
?>
