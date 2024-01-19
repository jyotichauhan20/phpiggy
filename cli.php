<?php

include __DIR__ . '/src/Framework/Database.php';
include __DIR__ . '/vendor/autoload.php';


use Framework\Database;
use App\Config\Paths;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->load(); 

$database = new Database($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);


// $db = new Database('mysql', [
//     'host' => 'localhost',
//     'port' => 3306,
//     'dbname' => 'phpiggy',

// ], 'root', '');

$sqlFile = file_get_contents('./database.sql');
$db->query($sqlFile);
