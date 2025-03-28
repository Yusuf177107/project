<!DOCTYPE html>
<html lang ="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="lunch en diner">
    <meta name="keywords" content="HTML, meta tags, voorbeeld, webontwikkeling">
    <meta name="author" content="Yusuf Ozdes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- yusuf heeft alles hier gemaakt -->
    <title></title>
</head>
<body> 
        <?php   
            include "header.php"
            ?>
        <main>
    <h1 class="zee">Openingstijden & adresgegevens</h1>
    <section class="openings-info">
    <article class="openings-box">
        <h3 class="mannen">Onze Openingstijden</h3>
        <br>
        <p><strong>Maandag</strong><br>07:00 - 23:00</p>
        <br>
        <p><strong>Dinsdag</strong><br>07:00 - 23:00</p>
        <br>
        <p><strong>Woensdag</strong><br>07:00 - 23:00</p>
        <br>
        <p><strong>Donderdag</strong><br>07:00 - 23:00</p>
        <br>
        <p><strong>Vrijdag</strong><br>07:00 - 23:00</p>
    </article>
    <article class="restaurant-image">
        <img src="images/tufrestaurant.png" alt="Sfeervolle restaurant interieur">
    </article>
    </section>

    <section class="map-section">
    <p class="address">Weena 6, 3012CM Rotterdam</p>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.5614835141714!2d4.474716976619122!3d51.92371128020551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a784b301ef%3A0x5886481aae146c87!2sWeena%206%2C%203012%20CM%20Rotterdam!5e0!3m2!1snl!2snl!4v1743159269919!5m2!1snl!2snl" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>


    </main>
        <?php
        include "footer.php"
        ?>
    </body>
    </html>