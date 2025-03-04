FROM php:8.1-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo_mysql

# Configuración de Apache (opcional)
COPY . /var/www/html/

# Establecer permisos (opcional)
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto de Apache
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]