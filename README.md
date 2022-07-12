# Symfony Docker

## Voir les instructions du repo

    https://github.com/dunglas/symfony-docker

## Commandes utiles

    php bin/console debug:autowiring doctrine

## Webpack encore
    yarn watch

## Doctrine

    https://symfonycasts.com/screencast/symfony-doctrine/install
    https://symfonycasts.com/screencast/doctrine-queries

    bin/console doctrine:database:create
    bin/console doctrine:database:drop --force

    bin/console make:entity Article 
    bin/console make:migration
    bin/console doctrine:migrations:migrate
    bin/console doctrine:migrations:list
    php bin/console doctrine:query:sql "Select * from Article;"
    Param converter: https://symfonycasts.com/screencast/symfony-doctrine/param-converter#play

### Doctrine extensions
#### Fixtures et Foundry
        Fixtures: 
            composer require orm-fixtures --dev
            Executer les fixtures
            bin/console doctrine:fixture:load
        générer des datas avec Foundry https://symfonycasts.com/screencast/symfony-doctrine/foundry#play
    
    Faker: permet de générer du faux texte
    https://github.com/doctrine-extensions/DoctrineExtensions
    Gedmo doctrines extensions:
    composer require gedmo/doctrine-extensions
    StofDoctrineExtenionsBundle: Raccourcis utiles pour les slug  et timestamp (createdAt, updatedAt)
    composer require stof/doctrine-extensions-bundle:^v1.7.0
    puis config dans config/packages/stof_doctrine_extensions.yaml pour activer sluggable et timestamp
    




