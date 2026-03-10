<?php

declare(strict_types=1);

/*
==================================================
    PROCVIČOVÁNÍ PHP – LEKCE 3 (pokročilejší)
    Matematika
==================================================

Instrukce:
· Nastavte si 3 strany do proměnných $a, $b, $c
· Zobrazte nastavené hodnoty na stránce (a = 10 cm, …)
· Určete, zda tento trojúhelník lze sestrojit, v případě, že nelze, vypíše se: trojúhelník nelze sestrojit a ukončí se vše
· Určete, zda tento trojúhelník je rovnostranný, rovnoramenný, nebo obecný a vypište.
· Vynechte dva řádky, provede se výpočet obvodu a obsahu (použijte Heronův vzorec 𝑆=√𝑠(𝑠−𝑎)(𝑠−𝑏)(𝑠−𝑐), kde 𝑠=𝑎+𝑏+𝑐2) podle zadání (odmocnina je sqrt($cislo)) a vypíše se: obvod (obsah) je hodnota
*/

$a= 3;
$b= 5;
$c= 4;
$p=0;
echo "a = {$a} cm\n";
echo "b = {$b} cm\n";
echo "c = {$c} cm\n";

if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
    echo "Trojúhelník nelze sestrojit.\n";
    exit;
}

if ($a === $b && $b === $c) {
    echo "Trojúhelník je rovnostranný.\n";
} elseif ($a === $b || $a === $c || $b === $c) {
    echo "Trojúhelník je rovnoramenný.\n";
} else {
    echo "Trojúhelník je obecný.\n\n\n";
}

$s = ($a + $b + $c) / 2;
$obsah = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
$obvod = $a + $b + $c;

echo "Obvod je {$obvod} cm\n";
echo "Obsah je {$obsah} cm²\n";


/*
----------------------------------------------------
DALŠÍ ÚKOLY
----------------------------------------------------

5) Vytvořte funkci getTriangleAngleType($a, $b, $c),
   která určí typ trojúhelníku podle úhlů:

   - pravoúhlý
   - ostroúhlý
   - tupoúhlý

   Postup:
   Najděte nejdelší stranu (označte ji c).

   Porovnejte:

   c² ? a² + b²

	   c² = a² + b² → pravoúhlý
   c² < a² + b² → ostroúhlý
   c² > a² + b² → tupoúhlý

   Funkce vrátí text s typem trojúhelníku.

----------------------------------------------------
*/
 

    if ($a >= $b && $a >= $c) {
        $p = $a;
        $c = $a;
        $a = $b;
        $b = $p;
    } elseif ($b >= $a && $b >= $c) {
        $p = $b;
        $c = $b;
        $b = $a;
        $a = $c;
    }

    if($c ** 2 === $a ** 2 + $b ** 2) {
        echo "Trojúhelník je pravoúhlý.\n";
    } elseif ($c ** 2 < $a ** 2 + $b ** 2) {
        echo "Trojúhelník je ostroúhlý.\n";
    } else {
        echo "Trojúhelník je tupoúhlý.\n";
    }


/*
6) Vytvořte funkci getHeightToA($a, $content),
   která vypočítá výšku na stranu a.

Použijte vzorec:

   v_a = (2 * S) / a

   Funkce vrátí výšku.

----------------------------------------------------
*/

$v_a = (2 * $obsah) / $a;

echo "Výška na stranu a je {$v_a} cm\n";
/*
7) Vytvořte funkci getAngles($a, $b, $c),
   která vypočítá velikosti úhlů α, β, γ.

Použijte kosinovou větu například pro α:

   cos α = (b² + c² − a²) / (2bc)

   Použijte funkce:
   acos()
   rad2deg()

   Výsledky zaokrouhlete na 2 desetinná místa.

Funkce vrátí pole:

   [
	   'alpha' => ...,
       'beta' => ...,
       'gamma' => ...
   ]

   ----------------------------------------------------
*/



/*
8) Vytvořte funkci getMinMaxSide($a, $b, $c),
   která vrátí nejdelší a nejkratší stranu.

Funkce vrátí pole:

   [
	   'min' => ...,
       'max' => ...
   ]

====================================================
FUNKCE – DOPLŇTE ŘEŠENÍ
====================================================
*/

function getTriangleAngleType(float $a, float $b, float $c): string
{
	    if ($a >= $b && $a >= $c) {
        $c = $a;
        $a = $b;
        $b = $c;
    } elseif ($b >= $a && $b >= $c) {
        $c = $b;
        $b = $a;
        $a = $c;
    }

    if($c ** 2 === $a ** 2 + $b ** 2) {
        echo "Trojúhelník je pravoúhlý.\n";
    } elseif ($c ** 2 < $a ** 2 + $b ** 2) {
        echo "Trojúhelník je ostroúhlý.\n";
    } else {
        echo "Trojúhelník je tupoúhlý.\n";
    }
}


function getHeightToA(float $a, float $content): float
{
	$v_a = (2 * $obsah) / $a;

    echo "Výška na stranu a je {$v_a} cm\n";
}


function getAngles(float $a, float $b, float $c): array
{
	// TODO: doplňte řešení
}


function getMinMaxSide(float $a, float $b, float $c): array
{
	// TODO: doplňte řešení
}

