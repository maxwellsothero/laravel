INSTALAR O LARAVEL completop
-- php composer.phar create-project laravel/laravel api-laravel
instalando laravel para api
-- php composer.phar create-project laravel/lumen api-laravel

acessando banco de dados
http


cliente acessa o route
o route acessa controller
controller acesso o repoitory
devolve pra o controler o resultado com a view

----autenticação----------

app/model/user.php

migrations
para criar a tabela event

php artisan migrate
php artisan make:migration event --create=event
php artisan migrate

--------------
na requisição  de post pra autenticar

        no header
    X-Requested-With -> XMLHttpRequest
