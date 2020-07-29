<?php
function tentukan_deret_aritmatika($arr)
{
  // kode di sini
  $nilai = [];
  $data = count($arr);
  if (count($arr) < 2) {
    return "true<br>";
  }

  $cek = $arr[1] - $arr[0];
  for ($a = 0; $a < $data - 1; $a++) {
    $nilai[$a] = $arr[$a + 1] - $arr[$a];
    if ($cek !== $nilai[$a]) {
      return "false<br>";
    }
  }
  return "true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
