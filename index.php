<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Using Medoo namespace
use Medoo\Medoo;

// Initialize
$database = new Medoo([
  'database_type' => 'mysql',
  'database_name' => $_ENV['DATABASE_NAME'],
  'server' => $_ENV['DATABASE_SERVER'],
  'port' => $_ENV['DATABASE_PORT'],
  'username' => $_ENV['DATABASE_USERNAME'],
  'password' => $_ENV['DATABASE_PASSWORD'],
]);

// TODO
// - [ ] select
// - [ ] insert
// - [ ] update
// - [ ] delete

$users = $database->select("users", [
  "username",
  "email"
]);

echo "<pre>";
print_r($users);
echo "</pre>";
echo "test";
