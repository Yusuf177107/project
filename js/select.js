document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll(".vacature-box");
    const volgendeButton = document.getElementById("volgende");
    boxes.forEach(box => {
        box.addEventListener("click", function() {
            boxes.forEach(b => b.classList.remove("selected"));
            this.classList.add("selected");
            volgendeButton.style.display = "block";
        });
    });
    volgendeButton.addEventListener("click", function() {
        window.location.href = "locatie.php";
    });
});