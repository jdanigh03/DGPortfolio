FROM php:8.2-apache

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# Copiar los archivos del proyecto al directorio de Apache
COPY . /var/www/html/

# Establecer permisos adecuados para Apache
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Comando por defecto para iniciar Apache en primer plano
CMD ["apache2-foreground"]
