<?php
$soal = [
    "pertanyaan" => "Apa fungsi if dalam PHP?",
    "opsi_a" => "Perulangan",
    "opsi_b" => "Percabangan",
    "opsi_c" => "Array",
    "opsi_d" => "Function",
    "jawaban_benar" => "B"
];

function tampilSoalPilihanGanda($soal) {
    echo "
    <form method='post'>
        <p>{$soal['pertanyaan']}</p>

        <input type='radio' name='jawaban' value='A' required> A. {$soal['opsi_a']} <br>
        <input type='radio' name='jawaban' value='B'> B. {$soal['opsi_b']} <br>
        <input type='radio' name='jawaban' value='C'> C. {$soal['opsi_c']} <br>
        <input type='radio' name='jawaban' value='D'> D. {$soal['opsi_d']} <br><br>

        <button type='submit'>Cek Jawaban</button>
    </form>
    ";
}

function cekJawabanPilihanGanda($jawaban, $jawabanBenar) {
    if ($jawaban == $jawabanBenar) {
        echo "<p style='color:green;'>Jawaban Benar</p>";
    } else {
        echo "<p style='color:red;'>Jawaban Salah</p>";
    }
}

tampilSoalPilihanGanda($soal);

if (isset($_POST['jawaban'])) {
    cekJawabanPilihanGanda($_POST['jawaban'], $soal['jawaban_benar']);
}
?>
