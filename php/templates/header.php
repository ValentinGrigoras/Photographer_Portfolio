  <?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
 $uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
 $header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."header.html");
$page="";
  switch ($uri_case[2]){
  	 case "":
        $header = str_replace("*linkHome*","<li class='active_link'><span xml:lang='en'>Home</span></li>",$header);
        $header = str_replace("*linkWork*","<li><a href='./work'><span xml:lang='it'>Lavori</span></a></li>",$header);
        $header = str_replace("*linkAboutMe*","<li><a href='0/about'><span xml:lang='it'>Su di me</span></a></li>",$header);
        $header = str_replace("*linkContact*","<li><a href='contact'><span xml:lang='it'>Contattami</span></a></li>",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pages".'/'."home.php";
        break;
  }
require_once 'head.php';
echo $header;
require_once $page;
require_once 'footer.php';
  ?>