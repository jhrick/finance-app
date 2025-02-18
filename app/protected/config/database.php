<?php

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__."/../../../../"));
$dotenv->load();

return [
	'connectionString' => $_ENV['DATABASE_URL'],
	'emulatePrepare' => true,
	'username' => $_ENV['DATABASE_USER'],
	'password' => $_ENV['DATABASE_PASSWORD'],
	'charset' => 'utf8',
];