<?php
/*--------------------BEGINNING OF THE CONNECTION PROCESS------------------*/
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); //may need to set DB_PASS as 'root'
define('DB_DATABASE', 'review_db'); //make sure to set your database
//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
//make sure connection is good or die
if ($connection->connect_errno) 
{
  die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
}
/*-----------------------END OF CONNECTION PROCESS------------------------*/
/*----------------------DATABASE QUERYING FUNCTIONS-----------------------*/
//SELECT - used when expecting single OR multiple results
//returns an array that contains one or more associative arrays


//SELECT - used when expecting a single result
//returns an associative array


//used to run INSERT/DELETE/UPDATE, queries that don't return a value
//returns a value, the id of the most recently inserted record in your database


//returns an escaped string. EG, the string "That's crazy!" will be returned as "That\'s crazy!"
//also helps secure your database against SQL injection


?>