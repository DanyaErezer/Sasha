document.getElementById('burger-menu').addEventListener('click', function(event) {
    event.stopPropagation(); // Останавливаем всплытие события
    document.getElementById('nav-menu').classList.toggle('active');

    const siteTitle = document.getElementById('site-title');
    siteTitle.classList.toggle('burger-open');
});

// Закрываем бургер-меню при нажатии вне его
document.addEventListener('click', function(event) {
    const navMenu = document.getElementById('nav-menu');
    const burgerMenu = document.getElementById('burger-menu');

    if (navMenu.classList.contains('active') && !burgerMenu.contains(event.target)) {
        navMenu.classList.remove('active'); // Закрываем меню
        const siteTitle = document.getElementById('site-title');
        siteTitle.classList.remove('burger-open'); // Возвращаем заголовок на место
    }
});
