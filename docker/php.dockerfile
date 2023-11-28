FROM php:8.1-apache

# Arguments defined in docker-compose.yml
ARG user
ARG uid


RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    --no-install-recommends --allow-unauthenticated --fix-missing

# INSTALA EXTENSIONES DE PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN apt-get install -y \
    libzip-dev \
    --no-install-recommends --allow-unauthenticated --fix-missing
RUN docker-php-ext-install zip

RUN apt-get install -y \
    software-properties-common \
    npm


# COPIA EL CONTENIDO DEL SITIO AL SERVIDOR
COPY ./ /var/www/html

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

RUN chown root:www-data /var/www/html -R
RUN chmod 775 /var/www/html -R

# COPIA EL ARCHIVO DE CONFIGURACION
COPY ./docker/config/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/config/config.env /var/www/html/config.env

# HABILITA EL REWRITE
RUN a2enmod rewrite

# COPIA EL ARCHIVO DE CONFIGURACION DEL APACHE
# COPY ./docker/apache/000-default.txt /apache2/sites-available/000-default.conf

#USER $user
WORKDIR /var/www/html
USER root

RUN composer install
# RUN cp .env.example .env
RUN mv config.env .env
RUN php artisan key:generate
RUN npm install
RUN npm run build
RUN php artisan storage:link
# Correr los siguientes comandos con la imagen en ejecucion
# docker-compose exec gastceesto-app composer install
# docker-compose exec gastceesto-app cp .env.example .env
# docker-compose exec gastceesto-app php artisan key:generate
