# e-commerce-back

<h3>Prérequi:</h3>

*Prérequis sur votre machine pour le bon fonctionnement de ce projet :

PHP Version 7.4.11 Installer PHP -- Mettre à jour PHP en 8
MySQL Installer MySQL ou Installer MariaDB
Symfony version 6.1.2 avec le CLI(Binaire) Symfony Installer Symfony -- Installer Binaire Symfony
Composer Installer Composer
Npm Installer Npm
Yarn Installer Yarn

<h3>Installation:</h3>

Après avoir cloné le projet avec git clone https://github.com/DimitriKft/myp_symfony.git

Exécutez la commande cd WacFest pour vous rendre dans le dossier depuis le terminal.

Ensuite, dans l'ordre taper les commandes dans votre terminal :

1 composer install afin d'installer toutes les dépendances composer du projet.

2 installer la base de donnée MySQL. Pour paramétrer la création de votre base de donnée, rdv dans le fichier .env du projet, et modifier la variable d'environnement selon vos paramètres :

DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7&charset=utf8mb4"

Puis exécuter la création de la base de donnée avec la commande : symfony console doctrine:database:create

3 Exécuter la migration en base de donnée : symfony console doctrine:migration:migrate

4 Vous pouvez maintenant accéder à votre portfolio en vous connectant au serveur : symfony server:start

<h3>Démarrage</h3>

