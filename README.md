# Symfony Docker

## Voir les instructions du repo

    https://github.com/dunglas/symfony-docker

## Commandes utiles

    php bin/console debug:autowiring doctrine

## Doctrine

    https://symfonycasts.com/screencast/symfony-doctrine/install
    https://symfonycasts.com/screencast/doctrine-queries

    bin/console doctrine:database:create
    bin/console doctrine:database:drop --force

    bin/console make:entity Article 
    bin/console make:migration
    bin/console doctrine:migrations:migrate
    bin/console doctrine:migrations:list
    Param converter: https://symfonycasts.com/screencast/symfony-doctrine/param-converter#play

### Doctrine extensions
    Fixtures: générer des datas avec Foundry https://symfonycasts.com/screencast/symfony-doctrine/foundry#play
        composer require orm-fixtures --dev
    Faker: permet de générer du faux texte
    https://github.com/doctrine-extensions/DoctrineExtensions
    Gedmo doctrines extensions:
    composer require gedmo/doctrine-extensions
    StofDoctrineExtenionsBundle: Raccourcis utiles pour les slug  et timestamp (createdAt, updatedAt)




