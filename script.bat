composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
php bin/console doctrine:mapping:import 'App\Entity' annotation --path=src/Entity
::Enlever les accolades à namespace 'App/Entity'

::https://stackoverflow.com/questions/48572008/symfony-4-namespace-issue-when-generating-entities-with-doctrine
::https://symfony.com/doc/current/doctrine/reverse_engineering.html
::https://symfony.com/doc/current/doctrine.html