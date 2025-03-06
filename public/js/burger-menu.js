document.getElementById('burger-menu').addEventListener('click', function(event) {
    // Останавливаем всплытие события, чтобы клик по бургеру не закрывал меню
    event.stopPropagation();

    // Переключаем класс 'active' для меню
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.toggle('active');

    // Получаем заголовок
    const siteTitle = document.getElementById('site-title');

    // Переключаем класс 'burger-open' для заголовка
    siteTitle.classList.toggle('burger-open');
});

// Закрываем бургер-меню при клике вне меню
document.addEventListener('click', function(event) {
    const navMenu = document.getElementById('nav-menu');
    const burgerMenu = document.getElementById('burger-menu');

    // Проверяем, открыто ли меню и кликнули ли мы вне бургер-меню и самого меню
    if (navMenu.classList.contains('active') && !burgerMenu.contains(event.target) && !navMenu.contains(event.target)) {
        navMenu.classList.remove('active'); // Закрываем меню
        const siteTitle = document.getElementById('site-title');
        siteTitle.classList.remove('burger-open'); // Возвращаем заголовок на место
    }
});
