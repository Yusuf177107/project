<?php
        include 'header.php';
?>
<body>
<meta name="description" content="Reserveren">
    <meta name="keywords" content="HTML, meta tags, voorbeeld, webontwikkeling">
    <meta name="author" content="Evrim">

    <main>
    <section class="stappenbalk">
            <section id="stap" class="stap actief"> Gezelschap & Allergieën</section>
            <section id="stap 2" class="stap ">Datum & Tijd</section>
            <section id="stap 3" class="stap 3">Gegevens</section>
            <section id="stap 4" class="stap 4">Betaling</section>
        </section>

        <section class="reserveringsformulier">
            <h2>Aantal volwassenen</h2>
            <button id="kinderenKnop" onclick="showKinderen()" class="toevoegen-knop">+ Voeg kinderen toe</button>
            <section class="aantal-selector">
                <input type="number" min="0" value="0">
                <li id="kinderen">
                    <h2>Aantal kinderen</h2>
                    <section class="aantal-selector">
                        <input type="number" min="0" value="0">
                    </section>
                    
                    </li>
                    </li>
                </li>

                <script src="js/showKinderen.js" defer></script>
                </section>
            </section>
        <a href="reserveren-2.php">
                <button id="next" class="volgende-knop2">Volgende →</button>
                </a>

    <section class="wrapper"></section>
    
</body>
<?php
        include 'footer.php';
?>

