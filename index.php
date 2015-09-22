<?php 
session_start();
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1); 
require 'vendor/autoload.php'; 
Twig_Autoloader::register();  
$app = new \Slim\Slim();  
$loader = new Twig_Loader_Filesystem('templates');  
$twig = new Twig_Environment($loader, array(  /*'cache' => 'cache',*/ ));  
$twig->addExtension(new Twig_Extensions_Extension_Text());
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

include 'conection.php';
include 'content.php';

$app->get('/', function() use ($twig,$data,$desarrollos,$content,$app) {
    
    $con = new Conexion();
    $con->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = 'SELECT
        p1.*,
        wm2.meta_value
    FROM
        wp_posts p1
    LEFT JOIN
        wp_postmeta wm1
        ON (
            wm1.post_id = p1.id
            AND wm1.meta_value IS NOT NULL
            AND wm1.meta_key = "_thumbnail_id"             
        )
    LEFT JOIN
        wp_postmeta wm2
        ON (
            wm1.meta_value = wm2.post_id
            AND wm2.meta_key = "_wp_attached_file"
            AND wm2.meta_value IS NOT NULL 
        )
    WHERE
        p1.post_status="publish"
        AND p1.post_type="post"
    ORDER BY
        p1.post_date ASC
    LIMIT 1';
    
    $sth = $con->conexion->prepare($query);
    $sth->execute();
    $post = $sth->fetch(PDO::FETCH_OBJ);

    $data["page"] = $content["home"];
    $data["desarrollos"] = $desarrollos;
    $data["blog"] = $post;
    echo $twig->render('home.html',$data);  
})->name('home');

// if (LANG=="es") {
//     $nos='/nosotros';

// }
// else{
//     $nos='/en/about-us';
// }

$app->get('/biografia', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('biografia.html',$data);  
})->name('about');

$app->get('/calendario', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('calendario.html',$data);  
})->name('about');

$app->get('/contacto', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('contacto.html',$data);  
})->name('about');

$app->get('/fan-zone', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('fan-zone.html',$data);  
})->name('about');

$app->get('/sdr', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('sdr.html',$data);  
})->name('about');


$app->get('/multimedia', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('multimedia.html',$data);  
})->name('about');


$app->get('/videos', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('videos.html',$data);  
})->name('about');

$app->get('/imagenes', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('imagenes.html',$data);  
})->name('about');

$app->get('/contacto', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('contacto.html',$data);  
})->name('about');

$app->get('/enlaces', function() use ($twig,$data,$content){ 
    $data["page"] = $content["about"];
    $data["my_title"] = "about";
    echo $twig->render('enlaces.html',$data);  
})->name('about');





// $x = $app->request()->get('lang');
// if (isset($x)) {
//     $app->response->redirect($app->urlFor('home'), 303);
// }
$app->run();  
