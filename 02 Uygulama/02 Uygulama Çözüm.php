<?php
$sayilar = array(25, 33, 46, 89, 54, 31, 32, 8, 67, 41);
$teksayi = 0;
$ciftsayi = 0;

echo  "Rastgele Seçilen Sayılar: " ."<br>";

for ($x = 1; $x <= 5; $x++)
{
    $rastgele = rand(0,9);
    $yenisayilar = array();
    $yenisayilar[] = $sayilar[$rastgele];
    
    if($yenisayilar[0] % 2 == 0)
    {
        echo $x . ". sayı => " .  $yenisayilar[0] . " => çift" . "<br>";
        $ciftsayi += 1;
    }
    else
    {
        echo $x . ". sayı => " .  $yenisayilar[0] . " => tek" . "<br>";
        $teksayi += 1;
    }
}

echo "Toplam çift sayı adeti: " . $ciftsayi . "<br>";
echo "Toplam tek sayı adeti: " . $teksayi . "<br>";
?>
