<?php
/**
 * Connection to MongoDB
 * 
 * $connection = new MongoClient(); // connects to localhost:27017
 * 
 * For remote host connection
 * 
 * $connection = new MongoClient( "mongodb://example.com" ); // connect to a remote host (default port: 27017)
 * $connection = new MongoClient( "mongodb://example.com:65432" ); // connect to a remote host at a given port
 * 
 * Connection using database username and password
 * 
 * $connectionUrl = sprintf('mongodb://%s:%d/%s', $host, $port, $database);
 * $connection = new Mongo($connectionUrl, array('username' => $username, 'password' => $password));
 */ 
$connection = new MongoClient();

/**
 * Select database named "test"
 */ 
$db = $connection->test;
?>
