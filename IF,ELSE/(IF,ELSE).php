<?php
$qualsuaidade=17;
$idadecrianca= 12;
$idademaior= 18;
$idademelhor= 65;
if ($qualsuaidade < $idadecrianca){
	echo "criança";
} elseif ($qualsuaidade < $idademaior) {
	echo "adolecente";
} elseif ($qualsuaidade <$idademelhor) { 
	echo "adulto";
} else {
	echo "idoso";
}

echo "<br>";

echo ($qualsuaidade < $idademaior)? "menor de idade":"maior de idade";
?>