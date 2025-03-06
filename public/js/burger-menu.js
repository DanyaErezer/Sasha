document.getElementById('burger-menu').addEventListener('click', function() {
    // Переключаем класс 'active' для меню
    document.getElementById('nav-menu').classList.toggle('active');

    // Получаем заголовок
    const siteTitle = document.getElementById('site-title');

    // Переключаем класс 'burger-open' для заголовка
    siteTitle.classList.toggle('burger-open');
});
