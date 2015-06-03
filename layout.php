<?php 
//session_start();
$languages = array('ES','EN');
if(in_array($_GET['lang'], $languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}
define('LANG', in_array($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'EN');
$lang_redirect="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];


$main_menu_en=array(
    'home'=>'Home',
    'about_us'=>'About Us',
    'admissions'=>'Admissions',
    'students_life'=>'Student Life',
    'schools'=>'Grades',
    'kinder'=>'Kinder',
    'primary'=>'Primary',
    'middle_high'=>'Middle/High School',
    'contact'=>'Contact',
    'contact_us' => 'Contact Us',
    'search'=> 'Search',
    'lang_redirect'=>$lang_redirect,
    'lang'=>LANG
    );
$main_menu_es=array(
    'home'=>'Inicio',
    'noticias'=>'Noticias',
    'biografia'=>'Biografia',
    'sdr'=>'SDR',
    'media'=>'Multimedia',
    'enlaces'=>'Enlaces',
    'calendario'=>'Calendario',
    'fan' => 'FanZone',
    'contacto' => 'Contactos',
    'lang_redirect'=>$lang_redirect,
    'lang'=>LANG
    );
$footer_en=array(
    'all_rights'=>'All rights reserved IAS/CES.2014',
    'privacy'=>'Privacy Note',
    );
$footer_es=array(
    'all_rights'=>'Todos los Derechos &reg; Reservados TED<sup>x</sup>',
    'privacy'=>'Políticas de privaciadad',
    );

//if (LANG=='ES'){
    $main_menu=$main_menu_es;
    $footer=$footer_es; 
//}
//else{
 //   $main_menu=$main_menu_en;
  //  $footer=$footer_en;
    
//}

?>
