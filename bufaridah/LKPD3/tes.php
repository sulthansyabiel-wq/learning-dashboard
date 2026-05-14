<?php
function perkenalan($nama, $salam){
  echo $salam. ", ";
  echo "Perkenalkan, nama ku ".$nama."<br/>";
  echo "Rank di ML apa?<br/>";
}

perkenalan("Sulthan", "WOI");

echo "<hr>";

$saya = "Fahri";
$ucapansalam = "WOI JUA";
perkenalan("$saya", $ucapansalam);
?>