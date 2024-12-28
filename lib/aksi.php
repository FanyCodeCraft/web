<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
   case 'destinasi':
      include 'main/destinasi.php';
      break;

   case 'tentang kami':
      include 'main/tentang.php';
      break;
   case 'Kontak':
      include 'main/kontak.php';
      break;
   case 'Pemesanan':
      include 'main/pesanan.php';
      break;

   default:
      include 'index.php';
      break;
}