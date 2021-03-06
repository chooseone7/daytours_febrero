<?php

//connection variables

$host= 'localhost';
$user = 'root';
$password =  'admin';

//create mysql connection
$mysql = new mysqli($host, $user, $password);

if($mysqi->connect_errno){
    printf("Connection failed : %s\n", $mysqli->connect_error);
    die();
}

//create the database
if(!mysqli->query('CREATE DATABASE accounts')){
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE `accounts`.`users`(
`id` INT NOT NULL AUTO_INCREMENT,
`first_name` VARCHAR(50) NOT NULL,
`last_name` VARCHAR(100) NOT NULL,
`password` VARCHAR(100) NOT NULL,
`hash` VARCHAR(32) NOT NULL,
`activo` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
);') or die($mysqli->error);

?>