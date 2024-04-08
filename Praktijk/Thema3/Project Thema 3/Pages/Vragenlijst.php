<!--Namen: Quinevere, Ruzgar, Ayuub-->
<!--Datum: 26-03-2024-->

    <!DOCTYPE html>
    <HTML lang="nl">
    <head>
        <title>
            Vragenlijst | VanMossel
        </title>
        <meta charset="UTF-8">
        <link href="../Styles/Stylesheet.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <?php
        include "../Include/Header.php";
        ?>
    </header>
    <main>
        <h1>
            Vragenlijst
        </h1>
        <p>
            Met deze vragenlijst zullen wij uw advies geven over welke auto het beste bij u past.
        </p>
        <form action="Resultaten.php" method="get">
            <h3>
               1. Kilometers:
            </h3>
            <label>< 50.000</label>
            <input type="radio" name="Vraag1" value="0">
            <label> 50.000 - 150.000</label>
            <input type="radio" name="Vraag1" value="2">
            <label>150.000 - 300.000</label>
            <input type="radio" name="Vraag1" value="3">
            <label>300.000 ></label>
            <input type="radio" name="Vraag1" value="1">

            <h3>
               2. Transmissie:
            </h3>
            <label>Handschakel</label>
            <input type="radio" name="Vraag2" value="2">
            <label>Automaat</label>
            <input type="radio" name="Vraag2" value="3">
            <label>Half/Semi-automaat</label>
            <input type="radio" name="Vraag2" value="1">
            <label>n.v.t</label>
            <input type="radio" name="Vraag2" value="0">

            <h3>
               3. Bouwjaar:
            </h3>
            <label>n.v.t</label>
            <input type="radio" name="Vraag3" value="0">
            <label>2007 - 2013</label>
            <input type="radio" name="Vraag3" value="1">
            <label>2014 - 2019</label>
            <input type="radio" name="Vraag3" value="2">
            <label>2020 - 2024</label>
            <input type="radio" name="Vraag3" value="3">

            <h3>
               4. Budget:
            </h3>
            <label>n.v.t</label>
            <input type="radio" name="Vraag4" value="0">
            <label>2 500 - 150 000</label>
            <input type="radio" name="Vraag4" value="1">
            <label>150 000 - 250 000</label>
            <input type="radio" name="Vraag4" value="2">
            <label>250 000 - 325 000</label>
            <input type="radio" name="Vraag4" value="3">

            <h3>
               5. Brandstof:
            </h3>
            <label>Diesel</label>
            <input type="radio" name="Vraag5" value="2">
            <label>Benzine</label>
            <input type="radio" name="Vraag5" value="3">
            <label>Elektrisch</label>
            <input type="radio" name="Vraag5" value="1">
            <label>Hybride</label>
            <input type="radio" name="Vraag5" value="0">

            <h3>
                6. Type:
            </h3>
            <label>Demo</label>
            <input type="radio" name="Vraag6" value="0">
            <label>Gebruikt</label>
            <input type="radio" name="Vraag6" value="2">
            <label>Nieuw</label>
            <input type="radio" name="Vraag6" value="3">
            <label>n.v.t</label>
            <input type="radio" name="Vraag6" value="1">

            <h3>
                7. kleur:
            </h3>
            <label>Wit</label>
            <input type="radio" name="Vraag7" value="2">
            <label>Zwart</label>
            <input type="radio" name="Vraag7" value="3">
            <label>Grijs</label>
            <input type="radio" name="Vraag7" value="1">
            <label>Blauw</label>
            <input type="radio" name="Vraag7" value="0">

            <h3>
                8. Aantal deuren:
            </h3>
            <label>2 deuren</label>
            <input type="radio" name="Vraag8" value="0">
            <label>3 deuren</label>
            <input type="radio" name="Vraag8" value="1">
            <label>4 deuren</label>
            <input type="radio" name="Vraag8" value="2">
            <label>5 deuren</label>
            <input type="radio" name="Vraag8" value="3">

            <h3>
                9. Carrosserie:
            </h3>
            <label>Hatchback</label>
            <input type="radio" name="Vraag9" value="3">
            <label>Bedrijfswagen</label>
            <input type="radio" name="Vraag9" value="2">
            <label>Cabriolet</label>
            <input type="radio" name="Vraag9" value="0">
            <label>Coupé</label>
            <input type="radio" name="Vraag9" value="1">

            <h3>
                10. Bekleding:
            </h3>
            <label>Leer</label>
            <input type="radio" name="Vraag10" value="0">
            <label>Stof</label>
            <input type="radio" name="Vraag10" value="3">
            <label>Half leer</label>
            <input type="radio" name="Vraag10" value="2">
            <label>Alcantara</label>
            <input type="radio" name="Vraag10" value="1">

            <h3>
                11. :
            </h3>
            <label>n.v.t</label>
            <input type="radio" name="Vraag11" value="0">
            <label>2 500 - 150 000</label>
            <input type="radio" name="Vraag11" value="1">
            <label>150 000 - 250 000</label>
            <input type="radio" name="Vraag11" value="2">
            <label>250 000 - 325 000</label>
            <input type="radio" name="Vraag11" value="3">

            <h3>
                12. :
            </h3>
            <label>Diesel</label>
            <input type="radio" name="Vraag12" value="2">
            <label>Benzine</label>
            <input type="radio" name="Vraag12" value="3">
            <label>Elektrisch</label>
            <input type="radio" name="Vraag12" value="1">
            <label>Hybride</label>
            <input type="radio" name="Vraag12" value="0">

            <h3>
                13. :
            </h3>
            <label>n.v.t</label>
            <input type="radio" name="Vraag13" value="0">
            <label>2 500 - 150 000</label>
            <input type="radio" name="Vraag13" value="1">
            <label>150 000 - 250 000</label>
            <input type="radio" name="Vraag13" value="2">
            <label>250 000 - 325 000</label>
            <input type="radio" name="Vraag13" value="3">

            <h3>
                14. :
            </h3>
            <label>Diesel</label>
            <input type="radio" name="Vraag14" value="2">
            <label>Benzine</label>
            <input type="radio" name="Vraag14" value="3">
            <label>Elektrisch</label>
            <input type="radio" name="Vraag14" value="1">
            <label>Hybride</label>
            <input type="radio" name="Vraag14" value="0">

            <h3>
                15. :
            </h3>
            <label>Diesel</label>
            <input type="radio" name="Vraag15" value="2">
            <label>Benzine</label>
            <input type="radio" name="Vraag15" value="3">
            <label>Elektrisch</label>
            <input type="radio" name="Vraag15" value="1">
            <label>Hybride</label>
            <input type="radio" name="Vraag15" value="0">

            <p>
                <input type="submit" value="Advies">
            </p>
        </form>
    </main>
    </body>
    </HTML>
