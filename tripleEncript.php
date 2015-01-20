<?php

function generatePassword ($dataString) {

	$dataSplit = str_split( hash("sha512", $dataString), 16);

	$dataArray[0] = $dataSplit[0];
	$dataArray[1] = $dataSplit[5];
	$dataArray[2] = $dataSplit[7];

	$generate = md5(md5($dataArray[0]).md5($dataArray[1]).md5($dataArray[2]));

	return $generate;

}

print generatePassword("cobaGan");

?>
