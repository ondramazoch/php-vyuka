<?php

declare(strict_types=1);

/**
 * Nadefinujte si pole deseti celých čísel.
 *
 * 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice.
 *
 * 3. Vypište údaj o počtu prvků v tomto poli.
 *
 * 4. Pomocí cyklu vypište všechny prvky tohoto pole od posledního k prvnímu.
 *
 * 5. Zjistěte, zda v tomto poli se vyskytuje hodnota 1, v případě, že ano, zjistěte, kolikrát se vyskytuje.
 *
 * 6. Určete maximum a vypište ho.
 *
 * 7. Každý sudý prvek tohoto pole zvětšete o 10.
 *
 * 8. Vypište toto pole pomocí cyklu foreach.
 *
 * 9. Vynechejte 2 řádky.
 *
 * 10. Vytvořte další pole, do kterého budete z klávesnice zadávat celá čísla, zadávání se ukončí v případě, že se zadá -1, tento prvek už nebude součástí pole.
 *
 * 11. Vypište, o kolik prvků má více, méně, nebo zda má stejný počet prvků toto pole oproti prvnímu poli.
 *
 * 12. Vypište střídavě prvky těchto polí: prvek_z_prvního prvek_z_druhého prvek_z_prvního prvek_z_druhého atd.
 *
 * 13. Vypište z prvního pole všechna sudá a z druhého pole všechna lichá čísla.
 */

$pole = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "Zadej další číslo: ";
$novy_prvek = (int) readline();
$pole[] = $novy_prvek;

echo "Počet prvků v poli: " . count($pole) . "\n";
echo "Prvky od posledního k prvnímu:\n";

for ($i = count($pole) - 1; $i >= 0; $i--) {
    echo $pole[$i] . "\n";
}

$počet_jedniček = 0;
foreach ($pole as $prvek) {
    if ($prvek === 1) {
        $počet_jedniček++;
    } 
}

echo "Hodnota 1 se vyskytuje $počet_jedniček krát.\n";


$maximum = max($pole);
echo "Maximum v poli je: $maximum\n";
foreach ($pole as $index => $prvek) {
    if ($index % 2 === 0) {
        $pole[$index] += 10;
    }
}
echo "Pole po zvětšení sudých prvků o 10:\n";
foreach ($pole as $prvek) {
    echo $prvek . "\n";
}
echo "\n\n";
$druhe_pole = [];
while (true) {
    echo "Zadej číslo pro druhé pole (nebo -1 pro ukončení): ";
    $input = (int) readline();
    if ($input === -1) {
        break;
    }
    $druhe_pole[] = $input;
}
$pocet_prvku_prvniho = count($pole);
$pocet_prvku_druheho = count($druhe_pole);
if ($pocet_prvku_prvniho > $pocet_prvku_druheho) {
    echo "První pole má o " . ($pocet_prvku_prvniho - $pocet_prvku_druheho) . " prvků více než druhé pole.\n";
} elseif ($pocet_prvku_prvniho < $pocet_prvku_druheho) {
    echo "Druhé pole má o " . ($pocet_prvku_druheho - $pocet_prvku_prvniho) . " prvků více než první pole.\n";
} else {
    echo "Obě pole mají stejný počet prvků.\n";
}

echo "Střídavě prvky obou polí:\n";
$max_index = max(count($pole), count($druhe_pole));
for ($i = 0; $i < $max_index; $i++) {
    if ($i < count($pole)) {
        echo $pole[$i] . " ";
    }
    if ($i < count($druhe_pole)) {
        echo $druhe_pole[$i] . " ";
    }
}

echo "\n\n";
echo "Sudá čísla z prvního pole:\n";
foreach ($pole as $prvek) {
    if ($prvek % 2 === 0) {
        echo $prvek . " ";
    }
}

echo "\nLichá čísla z druhého pole:\n";
foreach ($druhe_pole as $prvek) {
    if ($prvek % 2 !== 0) {
        echo $prvek . " ";
    }
echo "\n";
}