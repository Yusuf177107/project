function toggleMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('show-menu');
}

document.addEventListener('DOMContentLoaded', () => {
    const articles = document.querySelectorAll('main section article');
    const orderButton = document.querySelector('.order-button');

    articles.forEach(article => {
        article.addEventListener('click', () => {
            // Toggle selection class
            article.classList.toggle('selected');
        });
    });

    orderButton.addEventListener('click', (event) => {
        const selectedItems = document.querySelectorAll('main section article.selected');

        if (selectedItems.length === 0) {
            event.preventDefault(); 
            alert('Selecteer eerst een of meer voedsel om te reserveren!');
        } else {
            // Redirect to the reservation page
            window.location.href = 'reserveren.php';
        }
    });
});

// Deze staat ook in reserveren.php want hier werkt die niet

// function showKinderen(){
// let toonKinderen = document.getElementById("kinderen");
// if (toonKinderen.style.display === "none" || toonKinderen.style.display === "") {
//     toonKinderen.style.display = "block";
// } else {
//     toonKinderen.style.display = "none";
// }   
// }

