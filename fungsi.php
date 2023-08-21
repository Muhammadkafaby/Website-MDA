<?php
include  "koneksi.php";
?>

<?php

function format_rupiah($angka){
  $rupiah=number_format($angka,0,',','.');
  return $rupiah;
}

function reset_rupiah($rupiah){
$pecah = explode('.',$rupiah);
$return		= implode('',$pecah);
return  $return;
}
?>
