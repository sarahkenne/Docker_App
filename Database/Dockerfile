# Utilise l'image officielle MySQL 8.0
FROM mysql:8.0
# Variables d'environnement pour définir le nom de l'utilisateur MySQL et le mot de passe
ENV MYSQL_ROOT_PASSWORD=root

# Crée la base de données spécifiée lors du démarrage du conteneur
ENV MYSQL_DATABASE=users

# Copie un script SQL dans le conteneur pour qu'il soit exécuté lors du démarrage
COPY users.sql /docker-entrypoint-initdb.d/

# Expose le port MySQL par défaut
EXPOSE 3306
