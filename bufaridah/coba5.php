<?php

# kita mulai dari angka 1
$i = 1;

# perulangan akan dilakukan selama variabel $i bukan kelipatan 3
while ($i % 3 !== 0) {
    echo "Nilai i = {$i} <br>";

    # ubah nilai $i secara random dari angka 1-100
    $i = rand(1, 100);
}