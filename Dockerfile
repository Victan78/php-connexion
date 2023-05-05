# Utilisez l'image PHP officielle comme image de base
FROM php:7.4-apache

# Copiez le contenu de votre application dans le conteneur
COPY . /var/www/html/

# Installez les dépendances nécessaires pour votre application
RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip \
        libzip-dev \
    && docker-php-ext-install zip \
    && a2enmod rewrite

# Définissez le point d'entrée de l'application
ENTRYPOINT ["apache2-foreground"]
