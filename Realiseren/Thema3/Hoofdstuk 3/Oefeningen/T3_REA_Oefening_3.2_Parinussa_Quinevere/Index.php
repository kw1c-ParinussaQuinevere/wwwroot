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
    <?php
//    Op deze plaats wordt de code uit het bestand Header.php ingeladen
    include "Include/Header.php";
    ?>
</header>
<main>
    <?php
//    Op deze plaats wordt de code uit het bestand Navigatie.php ingeladen
    include "Include/Navigatie.php";
    ?>
    <section>
        <h1>
            Uitwerking oefening 3.2
        </h1>
       <p>
           In deze oefening gaan we een template maken waar de header, nav en footer worden ingesloten met php.
       </p>
    </section>
</main>
</body>
<footer>
    <?php
    include "Include/Footer.php";
    ?>
</footer>
</html>