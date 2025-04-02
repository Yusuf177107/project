function toggleMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('show-menu');
}

document.addEventListener('DOMContentLoaded', () => {
    const articles = document.querySelectorAll('main section article');
    const orderButton = document.querySelector('.order-button');

    if (orderButton) {
        orderButton.addEventListener('click', (event) => {
            const selectedItems = document.querySelectorAll('main section article.selected');

            if (selectedItems.length === 0) {
                alert('Selecteer eerst een of meer voedsel om te reserveren!');
            } else {
                window.location.href = 'reserveren.php';
            }
        });
    }

    articles.forEach(article => {
        article.addEventListener('click', () => {
            article.classList.toggle('selected');
        });
    });
});
