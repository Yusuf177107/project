function toonTijd() {
    let tijd = document.getElementById("tijd").value;
    let datum = document.getElementById("datum").value;
    let btn = document.getElementById("next");
    let errorMessage = document.getElementById("error-message");

    if (!tijd) {
        errorMessage.innerText = "Selecteer een tijd voordat u doorgaat.";
        return; 
    } else {
        errorMessage.innerText = ""; 
    }

    let geselecteerdeDatum = new Date(`${datum}T${tijd}:00`);
    let nu = new Date();

    if (geselecteerdeDatum <= nu) {
        errorMessage.innerText = "U kunt niet reserveren in verleden.";
        btn.style.display = "none"; 
        return; 
    }

    let startTime = new Date(`1970-01-01T23:00:00`);
    let endTime = new Date(`1970-01-01T07:00:00`);

    if (geselecteerdeDatum.getHours() >= startTime.getHours() || geselecteerdeDatum.getHours() < endTime.getHours()) {
        errorMessage.innerText = "Restaurant is gesloten tussen 23:00 en 07:00.";
        btn.style.display = "none";
    } else {
        errorMessage.innerText = ""; 
        document.getElementById("geselecteerde-tijd").innerText = "Geselecteerde tijd:" + datum + " " + tijd;
        btn.style.display = "block";
    }
}
function toonDatum() {
    let datum = document.getElementById("datum").value;
    let errorMessage = document.getElementById("error-message");

    if (!datum) {
        errorMessage.innerText = "Please select a date before proceeding.";
        return; 
    } else {
        errorMessage.innerText = ""; 
    }
    
    let toonKinderen = document.getElementById("tijdZien");
    if (toonKinderen.style.display === "none" || toonKinderen.style.display === "") {
        toonKinderen.style.display = "block";
    } else {
        toonKinderen.style.display = "none";
    }   
}