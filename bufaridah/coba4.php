<?php

$url = '/about';

switch ($url) {
  case '/':
    echo 'Selamat datang di dashboard.';
  case '/about':
    echo 'Selamat datang di halaman about.';
  case '/contact':
    echo 'Selamat datang di halaman kontak.';
  default:
    echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';