# DockerProjet

Louis CHEVALLIER ©

Commandes que j’ai utilisé:

cd
mkdir DockerProjet
touch dockerfile
touch docker-compose.yml

(C’est parti pour remplir ces fichiers, création de l’image dans le docker-compose.yml et préparation des commandes à exécuter dans le dockerfile)

docker build -t imagetplouis .
(Ca mouline)
docker images (pour voir notre imagetplouis)
Docker ps (nos containers)
docker-compose up -d

Là je peux lancer phpmyadmin sur mon port 8180
Mailhog sur mon port 8025
Mais rien sur le port 1025 malheureusement

Bonne journée