<?php
        include 'header.php';
?>
    <meta name="author" content="Evrim">
    <script src="js/toon.js" defer></script>

<body>
    <main>
    <section class="stappenbalk">
            <section id="stap" class="stap actief"><span class="checkmark">✔</span> Gezelschap & Allergieën</section>
            <section id="stap 2" class="stap actief">Datum & Tijd</section>
            <section id="stap 3" class="stap 3">Gegevens</section>
            <section id="stap 4" class="stap 4">Betaling</section>
        </section>

        <section class="reserveringsformulier">
        <section class="container">
    <label for="datum">Kies een datum:</label>
    <br>
    <input type="date" id="datum">
    <button class="datumPrikker" onclick="toonDatum()">Bevestigen</button>
    <p id="geselecteerde-datum"></p>
</section>
<li id="tijdZien">
<label for="tijd">Kies een tijd:</label>
    <input type="time" id="tijd">
    <br>
    <button class="datumPrikker" onclick="toonTijd()">Bevestigen</button>
    <p id="geselecteerde-tijd"></p>
    <p id="error-message" style="color: red;"></p>
    </li>
    <a href="reserveren-3.php">
                <button onclick="nextButton()" id="next" class="volgende-knop">Volgende →</button>
                </a>


            </section>
        </section>

    <section class="wrapper"></section>
</body>
<?php
        include 'footer.php';
?>
