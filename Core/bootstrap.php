<?php
// el fitxer bootstrap s'encarrega de configurar i inicialitzar l'entorn de l'aplicació
// carregar les configuracion, inicialitzar les dependencies com la base de dades o el router

use Core\App;
use Dotenv\Dotenv;
use Core\Database\Connection;
use Core\Database\Database;
use Core\Route;

// carregar la gestió per a l'enrutament

// creant una variable carreguem el fitxer de rutes
$routes = require '../routes.php';

// creem variable per carregar les variables d'entorn
$dotenv = new Dotenv(__DIR__ . '/../'); // Ensure this path is correct for your .env file
$dotenv->load(); // Load environment variables

// enllacem l'arxiu config al contenidor com a config on tenim les variables d'entorn
App::bind('con', null); // Assuming you want to bind a null value, adjust as needed
App::bind('config', require '../config.php'); // Use the correct relative path

// enllacem instancia de database
App::bind('database', new Database(
    Connection::make(
        App::get('config')['database']
    )
));

// enllacem instancia rutes
App::bind('router', (new Route())->define($routes));
