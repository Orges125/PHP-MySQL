<?php

$orges = "ds2.txt";

$amar = fopen($orges, "r");

$gjin = filesize ($orges);

$kestrin = fread($amar , $gjin);

echo $kestrin;

?>