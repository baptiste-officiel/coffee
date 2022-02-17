<?php

// host : mysql-69240-0.cloudclusters.net
// port : 15630
// username : admin 
// password : 46r2WkZw


$bdd = new PDO("mysql:dbname=abclight;
host=mysql-69240-0.cloudclusters.net:15630;
charset=utf8",
"admin",
"46r2WkZw");


// var_dump($bdd);





$res = $bdd->query("SELECT * FROM waiter");


// var_dump($res->fetchAll());

$waiter = $res->fetchAll();

foreach($waiter as $name){
    echo $name['name'] . "<br>";
}