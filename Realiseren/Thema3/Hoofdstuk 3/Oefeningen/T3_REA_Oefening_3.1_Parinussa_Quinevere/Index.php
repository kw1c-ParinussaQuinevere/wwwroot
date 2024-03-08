<?php
/**
 * User: Quinevere Parinussa
 * File: T3_REA_Oefening_3_1.PhP
 */

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Stylesheet.css" rel="Stylesheet">
</head>
<body>
<header>
    <h1>
        <!--        Door de echo wordt de waarde op het scherm getoond-->
        <?php
        echo 'Uitwerking van PHP-Oefeningen';
        ?>
    </h1>
</header>
<main>
    <!--    Hier komt een menu te staan met linkjes waar je naar de andere oefeningen kunt gaan-->
    <nav>
        <h2>
            Thema 3
        </h2>
        <ul>
            <li>
                Hoofdstuk 2
            </li>
            <ul>
                <li>
                    <a href="../../Realiseren%20oefeningen/Thema%203/Hoofdstuk%202/T3_REA_Oefening_2.1_Parinussa_Quinevere/Index.php">Oefening 2.1</a>
                </li>
                <li>
                    <a href="../../Realiseren%20oefeningen/Thema%203/Hoofdstuk%202/T3_REA_Oefening_2.2_Parinussa_Quinevere">Oefening 2.2</a>
                </li>
            </ul>
            <li>
                Hoofdstuk 3
            </li>
            <ul>
                <li>
                    <a href="Index.php">Oefening 3.1</a>
                </li>
            </ul>
        </ul>
    </nav>
    <section>
        <h1>
            Uitwerking oefening 3.1
        </h1>
        <h2>
            <!--        Door de echo wordt de waarde op het scherm getoond-->
            <?php
            echo "Taak 1";
            ?>
        </h2>
        <p>
            <?php
            $feest = "Carnaval";
            $getal = 3;
            $days = ["zondag", "maandag", "dinsdag"];
            $number = 40;
            $land = "Nederland";
            $party = "carnaval";
            $plaats = "Noord-Brabant";
            $food = ["Woorstenbrood", "koffie", "schrobbeler"];
            ?>
        </p>
        <p>
            <?php
            $story = "$feest is van oorsprong een gekerstend heidens volksfeest. Het duurt
            officieel $getal dagen, $days[0], $days[1], $days[2] direct voorafgaand aan de
            vastentijd van $number dagen. $feest is bij uitstek het feest van zotheid, spot
            en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel
            $land een gebruik om $plaats op carnavalsvrijdag te openen. Op
            Aswoensdag wordt $party afgesloten, maar de tradities verschillen per
            regio. In het overgrote deel van $plaats wordt er afgesloten met
            $food[0], $food[1], $food[2] soms met een Brabantse koffietafel.";

            echo "$story";
            ?>
        </p>
        <h2>
            <?php
            echo "Taak 2";
            ?>
        </h2>
        <p>
            <?php
            $bon1 = 32;
            $bon2 = 53;
            $bon3 = 22;
            //            hier worden de variabele bij elkaar opgeteld
            $totaalbedrag = $bon1 + $bon2 + $bon3;
            //            hier wordt het totaalbedrag die is uitgerekend hierboven wordt dan gedeeld door 3
            $delen = $totaalbedrag/3;
            //            hier wordt het afgerond met 2 decimalen
            $afgerond = number_format($delen,2);
            //            met deze echo wordt het totaalbedrag op de website getoond
            echo "Het totaalbedrag is €$totaalbedrag.";
            ?>
        </p>
        <p>
            <?php
            //            met deze echo wordt het afgeronde bedrag voor per persoon op de website getoond
            echo "Kosten per persoon bedragen: €$afgerond";
            ?>
        </p>
    </section>
</main>
</body>
</html>