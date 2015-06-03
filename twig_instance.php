<?php
session_start();
require_once 'Twig-1.18.0/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$twig->addGlobal("session", $_SESSION);