<?php

include '../mesFonctions.php';

$valeurTest = "123456789";
echo $valeurTest;
var_dump(verifMdp($valeurTest));

$valeurTest = "123456";
echo $valeurTest;
var_dump(verifMdp($valeurTest));


$valeurTest = "abscdefjl";
echo $valeurTest;
var_dump(verifMdp($valeurTest));



$valeurTest = "aA1.aA1dF2";
echo $valeurTest;
var_dump(verifMdp($valeurTest));