<?php

class Al_quran
{
    const CUURRENCY = "Rp.";
    const HARGA     = "35000";

    public function beli_al_quran()
    {

    $output = "" . self::CUURRENCY;
    $output = "Membeli dengan harga : RP " . number_format(self::HARGA, 2, ',', '.');
    return $output;
    }
}
    $al_quran = new Al_quran;
    echo $al_quran->beli_al_quran();
?>

