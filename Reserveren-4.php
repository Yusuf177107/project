<?php
        include 'header.php';
?>
    <meta name="author" content="Evrim">
    <script src="js/showpaymentform.js" defer></script>

<body>
    <main>
    <section class="stappenbalk">
 <section id="stap" class="stap actief"><span class="checkmark">✔</span> Gezelschap & Allergieën</section>
            <section id="stap 2" class="stap actief"><span class="checkmark">✔</span>Datum & Tijd</section>
            <section id="stap 3" class="stap actief"><span class="checkmark">✔</span>Gegevens</section>
            <section id="stap 4" class="stap actief">Betaling</section>
        </section>
</head>
<body>
    <section class="payment-container">
        <h2>Kies een betaalmethode</h2>
        
        <select id="paymentSelect" class="payment-method" onchange="showPaymentForm()">
            <option value="">Selecteer een methode</option>
            <option value="ideal">iDEAL</option>
            <option value="paypal">PayPal</option>
            <option value="applepay">Apple Pay</option>
            <option value="creditcard">Creditcard</option>
        </select>
        
        <section id="ideal" class="hidden">
            <p>Betaal met iDEAL:</p>
            <button onclick="alert('iDEAL betaling gestart!')">Betaal met iDEAL</button>
        </section>
        
        <section id="paypal" class="hidden">
            <p>Betaal met PayPal:</p>
            <button onclick="alert('PayPal betaling gestart!')">Betaal met PayPal</button>
        </section>
        
        <section id="applepay" class="hidden">
            <p>Betaal met Apple Pay:</p>
            <button onclick="alert('Apple Pay betaling gestart!')">Betaal met Apple Pay</button>
        </section>
        
        <section id="creditcard" class="hidden">
            <p>Vul je creditcardgegevens in:</p>
            <input type="text" placeholder="Naam op kaart"><br>
            <input type="text" placeholder="Kaartnummer"><br>
            <input type="text" placeholder="Vervaldatum (MM/JJ)"><br>
            <input type="text" placeholder="CVV"><br>
            <button onclick="alert('Creditcard betaling gestart!')">Betaal met Creditcard</button>
        </section>
    </section>
    
            </div>
        </div>
    <div class="wrapper"></div>
</body>
<?php
        include 'footer.php';
?>

