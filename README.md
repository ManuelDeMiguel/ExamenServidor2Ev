Crear proyecto de Laravel:
    laravel new examen


Crear migration, seeder, controller, model y factory:
    php artisan make:model Alumno -a


Crear tabla alumnos:
    php artisan migrate:refresh

Poblar tabla alumnos:
    php artisan migrate --seed


Instalar breeze:
    composer require laravel/breeze
    php artisan breeze:install
    npm install

Acceso a visualizacion del proyecto y sus estilos:
    php artisan serve &
    npm run dev
    
