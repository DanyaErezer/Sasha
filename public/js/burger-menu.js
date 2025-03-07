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

// Добавляем обработчик клика на ссылки внутри меню
document.querySelectorAll('#nav-menu a').forEach(function(link) {
    link.addEventListener('click', function(event) {
        // Останавливаем всплытие события, чтобы клик по ссылке не закрывал меню
        event.stopPropagation();
    });
});

// Добавляем обработчик клика на документ, чтобы закрыть меню при клике вне его
document.addEventListener('click', function(event) {
    const navMenu = document.getElementById('nav-menu');
    const burgerMenu = document.getElementById('burger-menu');

    // Проверяем, был ли клик вне меню и бургера
    if (!navMenu.contains(event.target) && !burgerMenu.contains(event.target)) {
        navMenu.classList.remove('active');
        document.getElementById('site-title').classList.remove('burger-open');
    }
});
