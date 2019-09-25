 <?php
 $uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
 $header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."header.html");

  switch ($uri_case[2]){
  	 case "":
        $header = str_replace("*linkhome*","<li class='active_link'><span xml:lang='en'>Home</span></li>",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."home.php";
        break;
  }
require_once 'head.php';
echo $header;
require_once $page;
require_once 'footer.php';
  ?>