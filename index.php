<?php
include_once ('api.php');

if (!isset($_GET['page'])) {
    $_GET['page'] = '/';
}
//   echo 'page: '.$_GET['page'].'<br>';
// if(isset($activeLang)){ $activeLang=$_GET['lang'];};
$locationURL=$_GET['page'];

  (isset($_GET['lang'])) ? $langURL=$_GET['lang'] : $langURL='mainlang';
//   echo $langURL;
//   echo $locationURL;

// Filtreleme fonksiyonu
function filterArray($array, $targetLang, $targetLangLink) {
    $filteredArray = array_filter($array, function($item) use ($targetLang, $targetLangLink) {
        foreach ($item->link as $link) {
            if (strcasecmp($link->lang,$targetLang==0) && $link->langlink === $targetLangLink) {
                return true;
            }
        }
        return false;
    });
    return $filteredArray;
}

// Filtreleme işlemi
$activePage = filterArray($dataPAGES, $langURL, $locationURL);


if (!empty($activePage)) {
    $activePage = reset($activePage); // İlk ve tek elemanı al
    //  print_r($activePage->blogcontent) ;
    include  $activePage->linkedpage.'.php';
} 

