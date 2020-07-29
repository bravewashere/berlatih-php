<?php

function palindrome_angka($angka)
{
  // tulis kode di sini
  $angka++;
  if ($angka == strrev($angka)) {
    return $angka;
  } else if ($angka != strrev($angka)) {
    for ($a = 1; $a < $angka; $a++) {
      $angka++;
      if ($angka == strrev($angka)) {
        return $angka;
        break;
      }
    }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001
