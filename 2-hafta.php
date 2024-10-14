<?php

$ad="zehra";
$soyad="tekinırk";
echo $ad." ".$soyad;



$degisken = true;
$degisken2 = 3;
$degisken3 = 5.6;
$degisken4 ="zehra";
$degisken5 = array("red","blue","yellow");
$degisken6 = new stdClass;
$degisken7 = NULL;
$degisken8= "30";



$sayi=55;
echo "<b>Birici değişkenin adı:
\$sayi</b>"."<br>".
"değeri: ".$sayi."<br>".
"Türü: ".gettype($sayi)."<br>";

$adi="zehra";
echo"<b>ikincin değişkebnin adı:
\$adi</b>"."<br>".
"değer:".$adi."<br>".
"türü:".gettype($adi)."<br>";

$sondalik=5.1234;
echo "<b>Üçüncü değişkenin adı:
\$sondalik</b>"."<br>".
"değeri: ".$sondalik."<br>".
"Türü: ".gettype($sondalik)."<br>";

$mantiksal=1;
echo "<b>Dördüncü değişkenin adı:
\$mantiksal</b>"."<br>".
"değeri: ".$mantiksal."<br>".
"Türü: ".gettype($mantiksal)."<br>";



$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";

$b =32;
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";

$c =true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";

echo "<h2>PHP SABİTLERİ</h2>"."<br>".
"kodun bulunduğu yer:".(_LINE_)."<br>".
"dosyanın  bulunduğu yer:".(_FILE_)."<br>".
"sunucudaki PHP versiyonu:".phpversion()."<br>".
"sunucudaki işletim sistemi:".(PHP_OS)."<br>".
"dosyanın bulunduğun dizi:".(_DIR_);

?>