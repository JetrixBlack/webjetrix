FROM php:8.3-apache

# Habilitar mod_rewrite para .htaccess
RUN a2enmod rewrite

# Instalar extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install-dom curl xml \
    && rm -rf /var/lib/apt/lists/*

# Copiar proyecto al directorio de Apache
COPY . /var/www/html/

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Apache listen en el puerto que Railway asigna
ENV APACHE_LISTEN=80

EXPOSE 80
