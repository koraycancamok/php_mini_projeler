<?php
$notlar = array(40, 60.9, 90, 34.5, 67, 32.2, 87, 45, 38.7, 95,);

function foreachdongusu($arrayforeach)
{
    $toplam = 0;

    foreach ($arrayforeach as $not)
    {
        $toplam += $not;
    }
    
    return $toplam / sizeof($arrayforeach);
}

function fordongusu($arrayfor)
{
    $toplam = 0;

    for ($i = 0; $i < sizeof($arrayfor); $i++)
    {
        $toplam += $arrayfor[$i];
    }
    
    return $toplam / sizeof($arrayfor);
}

echo "Foreach Döngüsü Not Ortalaması: " . foreachdongusu($notlar) . "<br>";
echo "For Döngüsü Not Ortalaması: " . fordongusu($notlar) . "<br>";
?>