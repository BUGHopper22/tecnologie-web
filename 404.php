<?php
    require_once('php/functions.php');	//è un include di function
    $contentActualPage=file_get_contents('content/404.html');
    BuildPage("404",$contentActualPage);	//funzione di buildpage dentro al file function
?>