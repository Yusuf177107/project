function showKinderen(){
    let toonKinderen = document.getElementById("kinderen");
    if (toonKinderen.style.display === "none" || toonKinderen.style.display === "") {
        toonKinderen.style.display = "block";
    } else {
        toonKinderen.style.display = "none";
    }   
    }