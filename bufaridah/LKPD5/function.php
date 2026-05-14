<?php
function hitungTotal($berat, $harga) {
    return $berat * $harga;
}

function validasi($berat, $harga) {
    if ($berat <= 0 || $harga <= 0) {
        return false;
    }
    return true;
}
?>