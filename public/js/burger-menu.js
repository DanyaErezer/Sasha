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


