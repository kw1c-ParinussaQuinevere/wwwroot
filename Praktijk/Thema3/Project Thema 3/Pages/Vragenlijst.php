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
        <nav>
            <ul>
                <li class="dropdown">
                    <button class="dropbtn">Alles over Van Mossel</button>
                    <div class="dropdown-content">
                        <h2>Voorraad</h2>
                        <a href="#">Nieuw uit voorraad</a>
                        <a href="#">Demo uit voorraad</a>
                    </div>
                </li>
                <li class="links">
                    <a class="links" href="#">Werkplaatsplanner</a>
                    <a class="links" href="#">Vestigingen</a>
                    <a class="links" href="#">Vacatures</a>
                    <a class="links" href="#">Direct contact</a>
                    <a class="links" href="#">Vergelijker</a>
                </li>
            </ul>
        </nav>
        <a id="logo" href="../Index.php"><img src="../Images/qjlbxaic.png" alt="Logo"></a>
        <nav>
            <ul>
                <li class="dropdown">
                    <button class="dropbtn">Nieuw</button>
                    <div class="dropdown-content">
                        <h2>Voorraad</h2>
                        <a href="#">Nieuw uit voorraad</a>
                        <a href="#">Demo uit voorraad</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Occasions</button>
                    <div class="dropdown-content">
                        <h2>Voorraad</h2>
                        <a href="#">Elektrische</a>
                        <a href="#">Hybride</a>
                        <a href="#">Hoge instap</a>
                        <a href="#">Compact</a>
                        <a href="#">Gezinsauto</a>
                        <a href="#">Bedrijfsauto</a>
                        <a href="#">Exclusief</a>
                        <a href="#">Budget occasions</a>
                        <a href="#">Classics</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Bedrijfswagen</button>
                    <div class="dropdown-content">
                        <h2>Voorraad</h2>
                        <a href="#">Nieuw te bestellen</a>
                        <a href="#">Nieuw uit voorraad</a>
                        <a href="#">Ossacions voorraad</a>
                        <a href="#">Trucks voorraad</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Lease</button>
                    <div class="dropdown-content">
                        <h2>Private lease</h2>
                        <a href="#">Private lease</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Service</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Schade</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Diensten</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Contact</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li id="lijst">
                    <a href="Vragenlijst.php">Vragenlijst</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>
            Vragenlijst
        </h1>
        <p>
            Met deze vragenlijst zullen wij uw adviseren:
        </p>
        <form action="Resultaten.php" method="get">
            <h3>
               1. Wat voor merk auto?:
            </h3>
           <select name="merk">
               <option value="Audi">Audi</option>
               <option value="Mercedens">Mercedens</option>
               <option value="BMW">BMW</option>
               <option value="Volkswagen">Volkswagen</option>
               <option value="Fiat">Fiat</option>
               <option value="Toyota">Toyota</option>
               <option value="Volvo">Volvo</option>
               <option value="Opel">Opel</option>
               <option value="Mini">Mini</option>
           </select>

            <h3>
               2. Met welke transmissie wilt u mee rijden?
            </h3>
            <input type="radio" name="Vraag2" value="2">
            <label>Handschakel</label><br>
            <input type="radio" name="Vraag2" value="3">
            <label>Automaat</label><br>
            <input type="radio" name="Vraag2" value="1">
            <label>Half/Semi-automaat</label><br>
            <input type="radio" name="Vraag2" value="0">
            <label>n.v.t</label><br>

            <h3>
               3. Uit welke bouwjaar mag de auto komen?
            </h3>
            <input type="radio" name="Vraag3" value="0">
            <label>n.v.t</label><br>
            <input type="radio" name="Vraag3" value="1">
            <label>2007 - 2013</label><br>
            <input type="radio" name="Vraag3" value="2">
            <label>2014 - 2019</label><br>
            <input type="radio" name="Vraag3" value="3">
            <label>2020 - 2024</label><br>

            <h3>
               4. Wat is u budget?
            </h3>
            <input type="radio" name="Vraag4" value="0">
            <label>n.v.t</label><br>
            <input type="radio" name="Vraag4" value="1">
            <label>2 500 - 150 000</label><br>
            <input type="radio" name="Vraag4" value="2">
            <label>150 000 - 250 000</label><br>
            <input type="radio" name="Vraag4" value="3">
            <label>250 000 - 325 000</label><br>

            <h3>
               5. Welke brandstof wilt u gebruiken?
            </h3>
            <input type="radio" name="Vraag5" value="2">
            <label>Diesel</label><br>
            <input type="radio" name="Vraag5" value="3">
            <label>Benzine</label><br>
            <input type="radio" name="Vraag5" value="1">
            <label>Elektrisch</label><br>
            <input type="radio" name="Vraag5" value="0">
            <label>Hybride</label><br>

            <h3>
                6. Wat voor type?
            </h3>
            <input type="radio" name="Vraag6" value="0">
            <label>Demo</label><br>
            <input type="radio" name="Vraag6" value="2">
            <label>Gebruikt</label><br>
            <input type="radio" name="Vraag6" value="3">
            <label>Nieuw</label><br>
            <input type="radio" name="Vraag6" value="1">
            <label>n.v.t</label><br>

            <h3>
                7. Welke kleur auto?
            </h3>
            <input type="radio" name="Vraag7" value="2">
            <label>Wit</label><br>
            <input type="radio" name="Vraag7" value="3">
            <label>Zwart</label><br>
            <input type="radio" name="Vraag7" value="1">
            <label>Grijs</label><br>
            <input type="radio" name="Vraag7" value="0">
            <label>Blauw</label><br>

            <h3>
                8. Hoeveel deuren mag die hebben?
            </h3>
            <input type="radio" name="Vraag8" value="0">
            <label>2 deuren</label><br>
            <input type="radio" name="Vraag8" value="1">
            <label>3 deuren</label><br>
            <input type="radio" name="Vraag8" value="2">
            <label>4 deuren</label><br>
            <input type="radio" name="Vraag8" value="3">
            <label>5 deuren</label><br>

            <h3>
                9. Wat voor model wilt u?
            </h3>
            <input type="radio" name="Vraag9" value="3">
            <label>Hatchback</label><br>
            <input type="radio" name="Vraag9" value="2">
            <label>Bedrijfswagen</label><br>
            <input type="radio" name="Vraag9" value="0">
            <label>Cabriolet</label><br>
            <input type="radio" name="Vraag9" value="1">
            <label>Coupé</label><br>

            <h3>
                10. Hoe mag de bekleding van de auto zijn?
            </h3>
            <input type="radio" name="Vraag10" value="0">
            <label>Leer</label><br>
            <input type="radio" name="Vraag10" value="3">
            <label>Stof</label><br>
            <input type="radio" name="Vraag10" value="2">
            <label>Half leer</label><br>
            <input type="radio" name="Vraag10" value="1">
            <label>Alcantara</label><br>

            <h3>
                11. Hoeveel kilometers mag erop staan?
            </h3>
            <input type="radio" name="Vraag11" value="0">
            <label>< 50.000</label><br>
            <input type="radio" name="Vraag11" value="2">
            <label> 50.000 - 150.000</label><br>
            <input type="radio" name="Vraag11" value="3">
            <label>150.000 - 300.000</label><br>
            <input type="radio" name="Vraag11" value="1">
            <label>300.000 ></label><br>

            <h3>
                12. Wilt met trekhaak?
            </h3>
            <input type="radio" name="Vraag12" value="2">
            <label>Ja</label><br>
            <input type="radio" name="Vraag12" value="1">
            <label>Nee</label><br>

            <h3>
                13. Wilt u extra opties erbij?
            </h3>
            <label>Hill-hold</label><br>
            <input type="radio" value="Opties">
            <label>Apple Carplay</label><br>
            <input type="radio" value="Opties">
            <label>Stoelverwarming</label><br>
            <input type="radio" value="Opties">
            <label>Cruise control</label><br>
            <input type="radio" value="Opties">
            <label>Achteruitcamera</label><br>
            <input type="radio" value="Opties">
            <label>Bluetooth</label><br>
            <input type="radio" value="Opties">
            <label>Navigatiestyeem</label><br>
            <input type="radio" value="Opties">
            <label>Getinte ramen</label><br>
            <input type="radio" value="Opties">
            <label>Alarm</label><br>
            <input type="radio" value="Opties">

            <h3>
                14. Welke vestiging is voor u het dichtste bij?
            </h3>
            <input type="radio" name="Vraag14" value="0">
            <label>Waalwijk</label><br>
            <input type="radio" name="Vraag14" value="2">
            <label>Eindhoven</label><br>
            <input type="radio" name="Vraag14" value="3">
            <label>Tilburg</label><br>
            <input type="radio" name="Vraag14" value="1">
            <label>Breda</label><br>

            <h3>
                15. Hoevaak gaat u de auto per maand gebruiken?
            </h3>
            <input type="radio" name="Vraag15" value="2">
            <label>< 5 keer per maand</label><br>
            <input type="radio" name="Vraag15" value="3">
            <label>6-15 keer per maand</label><br>
            <input type="radio" name="Vraag15" value="1">
            <label>16-31 keer per maand </label><br>
            <input type="radio" name="Vraag15" value="0">
            <label>Dagelijks</label><br>

            <p>
                <input type="submit" value="Advies">
            </p>
        </form>
    </main>
    </body>
    </HTML>
