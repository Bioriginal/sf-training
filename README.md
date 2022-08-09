# Symfony Docker

## Voir les instructions du repo

    https://github.com/dunglas/symfony-docker

## Commandes utiles

    php bin/console debug:autowiring doctrine

## Webpack encore
    yarn watch

## Se connecter en ssh
    docker compose exec php sh

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




#### Fixtures
        Fixtures: 
            composer require orm-fixtures --dev
            Executer les fixtures
            bin/console doctrine:fixture:load
    Faker: permet de générer du faux texte


### Doctrine extensions
    https://github.com/doctrine-extensions/DoctrineExtensions
    Gedmo doctrines extensions:
    composer require gedmo/doctrine-extensions
    StofDoctrineExtenionsBundle: Raccourcis utiles pour les slug  et timestamp (createdAt, updatedAt)
    composer require stof/doctrine-extensions-bundle:^v1.7.0
    puis config dans config/packages/stof_doctrine_extensions.yaml pour activer sluggable et timestamp

### Foundry
    Générer des datas avec Foundry
    https://symfonycasts.com/screencast/symfony-doctrine/foundry#play
    
    composer require zenstruck/foundry --dev

    bin/console make:factory

### Param converter doctrine

    Il faut installer ce bundle:
    composer require sensio/framework-extra-bundle
    
### Doctrine relations

    Par défaut, en lazy loading. La requête se fait seulement au moment de l'accès à la propriété.
    via un foreach ou un count ou length dans twig par exemple..

    Fetch: Eager: faire la requête dès l'accès à la relation
           Extra_Lazy: Dans le cas ou l'on a que besoin du count/slice/contains, la requête count se fera au lieu de charger la collection
           bêtement et de compter le nombre de résultats, ce qui peut être un pb de perf.


    Doctrine Criteria: permet de faire une sorte  de DQL dans l'entity et d'y accéder avec élégance dans le template.

    n+1 problem: Si l'on ajoute pas la jointure vers la relation ainsi que le addSelect dans la query, doctrine va faire une requête pour chaque élément de la 
    collection.
   
    




