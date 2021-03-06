<?php

/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
|
| Dito kayo mag create ng connection.
| Pwede dito multiple connection.
| as is lang yung "$db[]", wag nyo babaguhen
| 
| Kung anong sinet nyong index yun ang gagamiten nyong connection name
| e.g.
| $db["connection_name"]
| $this->connection_name->prepare();
|
| Yung mga index name wag nyo din papalitan:
| hostname,database,username,password,charset,dbdriver
|
| Kaya kung mag aad kayo connection
| I copy paste nyo nalang.
|
| -nagmamahal
| -Developer
*/

$db['conn'] = array(
	'hostname' 		=> 'localhost',
	'database' 		=> 'test',
	'username'		=> 'postgres',
	'password'		=> 'admin',
	'charset' 		=> 'utf8',
	'dbdriver'		=> 'pgsql'
);

$db['conn2'] = array(
	'hostname' 		=> 'localhost',
	'database' 		=> 'test',
	'username'		=> 'root',
	'password'		=> 'superkey',
	'charset' 		=> 'utf8',
	'dbdriver'		=> 'mysql'
);

