<!DOCTYPE html>
<html lang ="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="lunch en diner">
    <meta name="keywords" content="HTML, meta tags, voorbeeld, webontwikkeling">
    <meta name="author" content="yusuf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- yusuf heeft alles hier gemaakt -->
    <title></title>
</head>
<body> 
        <?php   
            include "header.php"
            ?>
        <main class="top-meals-page">
    <h1 class="zee">Top Meals</h1>
    <section>
        <article>
            <img src="images/spinazie.png" alt="Spinaziesalade">
            <p>Spinaziesalade</p>
        </article>
        <article>
            <img src="images/stamppot.png" alt="Stamppot">
            <p>Stamppot</p>
        </article>
        <article>
            <img src="images/pannenkoeken.png" alt="Pannenkoek">
            <p>Pannenkoek</p>
        </article>
        <article>
            <img src="images/feestpannenkoeken.png" alt="Feestpannenkoeken">
            <p>Feestpannenkoeken</p>
        </article>
        <article>
            <img src="images/falafelsoep.png" alt="Falafelsoep">
            <p>Falafelsoep</p>
        </article>
        <article>
            <img src="images/stukvlees.png" alt="Stuk vlees">
            <p>Stuk vlees</p>
        </article>
    </section>
    <h1 class="zee">Top Drinks</h1>
    <section class="drinks">
        <article>
            <img src="images/bier.png" alt="Bier">
            <p>Bier</p>
        </article>
        <article>
            <img src="images/cocomelk.png" alt="Cocomelk">
            <p>Cocomelk</p>
        </article>
        <article>
            <img src="images/sportsdrinken.png" alt="Sportsdrinken">
            <p>Sportsdrinken</p>
        </article>
    </section>
    <article class="order-button-container">
        <a href="reserveren.php" class="order-button">Bestel nu</a>
    </article>
    </main> 
        <?php
        include "footer.php"
        ?>
    </body>
    </html>