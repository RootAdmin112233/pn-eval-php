<?php
session_start();
require_once('../model/model.php');

//Récupération du nom d'utilisateur


//récupération de la liste des évènements dans la base de données

$bdd = new Model();

$eventsList = $bdd->getEvents();

//var_dump($eventsList);

require_once('../view/listView.php');