<?php

$bdd = new PDO('mysql:dbname=agence_voyage;host=127.0.0.1','root', '');
$queryExec = $bdd->query("SELECT * FROM circuit");
$circuit = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM client");
$client = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM composer");
$composer = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM etape");
$etape = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM lieuxavisiter");
$lieuxavisiter = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM lieuxavisiter");
$lieuxavisiter = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM role");
$role = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM utilisateur");
$utilisateur = $queryExec->fetchAll();



?>