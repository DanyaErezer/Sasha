document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const navMenu = document.getElementById('nav-menu');
    const siteTitle = document.getElementById('site-title');

    // Открытие/закрытие бургер-меню
    burgerMenu.addEventListener('click', function (event) {
        event.stopPropagation(); // Останавливаем всплытие
        navMenu.classList.toggle('active');
        siteTitle.classList.toggle('burger-open');
    });

    // Обработка кликов на ссылки внутри меню
    document.querySelectorAll('#nav-menu a').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.stopPropagation(); // Останавливаем всплытие
            // Закрываем меню после клика на ссылку
            navMenu.classList.remove('active');
            siteTitle.classList.remove('burger-open');
        });
    });

    // Закрытие меню при клике вне его области
    document.addEventListener('click', function (event) {
        if (!navMenu.contains(event.target) && !burgerMenu.contains(event.target)) {
            navMenu.classList.remove('active');
            siteTitle.classList.remove('burger-open');
        }
    });
});
