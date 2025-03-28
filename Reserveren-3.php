<?php
        include 'header.php';
?>
<body>
    <main>
    <section class="stappenbalk">
 <section id="stap" class="stap actief"><span class="checkmark">✔</span> Gezelschap & Allergieën</section>
            <section id="stap 2" class="stap actief"><span class="checkmark">✔</span>Datum & Tijd</section>
            <section id="stap 3" class="stap actief">Gegevens</section>
            <section id="stap 4" class="stap 4">Betaling</section>
        </section>

        <section class="container">
    <h2>Gegevens</h2>
    <form id="contactForm">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam">
        <span class="error" id="naamError"></span>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <span class="error" id="emailError"></span>

        <label for="telefoon">Telefoonnummer:</label>
        <input type="tel" id="telefoon" name="telefoon">
        <span class="error" id="telefoonError"></span>

        <label for="bericht">Belangrijke Informatie:</label>
        <textarea id="bericht" name="bericht" rows="4"></textarea>
        <span class="error" id="berichtError"></span>

<button class="verzenden" type="button" onclick="verzendFormulier()">Verzenden</button>
    </form>
    <p id="succesMelding" style="color: green; font-weight: bold;"></p>
</section>
<script src="js/verzendformulier.js" defer></script>

            </section>

    <section class="wrapper"></section>
</body>
<?php
        include 'footer.php';
?>

