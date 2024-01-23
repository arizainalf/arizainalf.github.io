<?php
if(!defined('BASEPATH'))
  exit('No direct script access allowed');

function generate_random_number($min = 1, $max = 100) {
  // Menghasilkan angka acak antara $min dan $max
  return mt_rand($min, $max);
}
?>