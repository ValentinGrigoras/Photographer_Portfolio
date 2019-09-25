<?php
$head = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."head.html");

$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);

switch ($uri_case[2]){
    case "":
        $head = str_replace("*title*","Pagina iniziale | Marius Nacu Photography",$head);
        $head = str_replace("*description*","Pagina principale di Marius Nacu.",$head);
        $head = str_replace("*keywords*","Marius, nacu, foto, video",$head);
        break;
        
echo $head;
?>