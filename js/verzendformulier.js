function verzendFormulier() {
    document.getElementById("naamError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("telefoonError").innerText = "";
    document.getElementById("berichtError").innerText = "";
    document.getElementById("succesMelding").innerText = "";

    let naam = document.getElementById("naam").value.trim();
    let email = document.getElementById("email").value.trim();
    let telefoon = document.getElementById("telefoon").value.trim();
    let bericht = document.getElementById("bericht").value.trim();
    let geldig = true;

    if (naam === "") {
        document.getElementById("naamError").innerText = "Naam is verplicht.";
        geldig = false;
    }
    if (email === "" || !email.includes("@")) {
        document.getElementById("emailError").innerText = "Voer een geldig e-mailadres in.";
        geldig = false;
    }
    if (telefoon !== "" && !/^\d{10}$/.test(telefoon)) {
        document.getElementById("telefoonError").innerText = "Voer een geldig 10-cijferig telefoonnummer in.";
        geldig = false;
    }
    if (bericht === "") {
        document.getElementById("berichtError").innerText = "Bericht mag niet leeg zijn.";
        geldig = false;
    }

    if (geldig) {
        document.getElementById("succesMelding").innerText = "Formulier succesvol verzonden!";
        window.location.href = "reserveren-4.php";
    }
}