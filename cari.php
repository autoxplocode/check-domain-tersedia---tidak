<?php
$bacot = htmlentities($_GET['domain']);
//jika berhasil akan menampilkan error jika tidak akan menampilkan domain tersedia kodingan hanya di balik
if ( gethostbyname($bacot) != $bacot ) {
  echo '<br/><font color="red">Checking ("</font><font color="black">'.$bacot .'</font><font color="red">") | Yah Domain Udah Di beli Orang :(</font>';
 }
 else {
  echo '<br/><font color="green">Checking ("</font><font color="black"></font>'.$bacot .'<font color="green">") | Domainnya Masih Tersedia Gan</font> </font><font color="black"></font><font color="red"> <br>';
 }
//copyright AutoXploCode
?>
