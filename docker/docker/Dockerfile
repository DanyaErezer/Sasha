FROM php:8.2-fpm

# Устанавливаем нужные пакеты
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создаём пользователя с правами 1000
RUN groupadd -g 1000 wwwgroup && useradd -u 1000 -g wwwgroup wwwuser

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

CMD ["php-fpm"]
