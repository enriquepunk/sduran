<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1); 
require 'vendor/autoload.php'; 

Twig_Autoloader::register();  
$app = new \Slim\Slim();  
$loader = new Twig_Loader_Filesystem('templates');  
$twig = new Twig_Environment($loader, array(  /*'cache' => 'cache',*/ ));  
//BASE URL
define('BASE_URL', 'http://punklabs.ninja/sduran/');  //Sobreescribir por la ruta de su proyecto.

$languages = array('es','en');
if(isset($_GET['lang'])){
    if(in_array($_GET['lang'], $languages)) {
        $_SESSION['lang'] = $_GET['lang'];
    }
}
if(isset($_SESSION['lang'])){
    define('LANG', in_array($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'es');    
}
else{
    define('LANG','es');
}
$lang_redirect="http://".$_SERVER['HTTP_HOST'].$app->request()->getPath();

$data=array(
    'BASE_URL' => constant('BASE_URL'),
    'REDIRECT_URL' => $lang_redirect,
    'LANG' => LANG,
);

$app->get('/', function() use ($twig,$data) { 
	$data["my_title"] = "home";
         if (LANG=="es") {
            print_r('español');
         }
         else{
             print_r('ingles');
         }
    echo $twig->render('home.html',$data);  
});

$app->get('/biografia', function() use ($twig,$data){  
    $data["my_title"] = "Biografia";
    
    echo $twig->render('biografia.html',$data);  
});
$app->get('/calendario', function() use ($twig,$data){  
    $data["my_title"] = "Biografia";
    echo $twig->render('calendario.html',$data);  
});

$app->get('/contacto', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('contacto.html',$data);  
});
$app->get('/fan-zone', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('fan-zone.html',$data);  
});
$app->get('/sdr', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('sdr.html',$data);  
});

$app->get('/multimedia', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('multimedia.html',$data);  
});
$app->get('/videos', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('videos.html',$data);  
});
$app->get('/imagenes', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('imagenes.html',$data);  
});
$app->get('/enlaces', function() use ($twig,$data){  
    $data["my_title"] = "Contacto";
    echo $twig->render('enlaces.html',$data);  
});

$app->run();  