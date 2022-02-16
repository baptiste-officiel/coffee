<?php

// echo 'Hello world !';


$bdd = new PDO("mysql:dbname=coffee;
host=mysql-69240-0.cloudclusters.net:15630;
charset=utf8",
"admin",
"46r2WkZw");

$res = $bdd->query("SELECT * FROM waiter");


// var_dump($res->fetchAll());

$waiter = $res->fetchAll();

foreach($waiter as $name){
    echo $name['name'] . "<br>";
}