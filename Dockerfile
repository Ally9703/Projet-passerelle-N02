# Utilisez l'image officielle PHP Apache comme point de départ
FROM php:7.4-apache

# Copiez les fichiers source de votre application dans le répertoire /var/www/html du conteneur
COPY . /var/www/html

# Exposez le port 80 sur lequel Apache écoute
EXPOSE 80
# Installez les dépendances nécessaires (par exemple, l'extension mysqli)
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Définissez les variables d'environnement pour la connexion à la base de données MySQL
ENV DB_HOST=mysql \
    DB_USER=root \
    DB_PASSWORD=secret \
    DB_NAME=gestioncompte

# Démarrez Apache lorsque le conteneur est lancé
CMD ["apache2-foreground"]