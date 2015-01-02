<?php


define( 'WEB_ROOT', rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' ) );
define( 'INCLUDES_ROOT', 'includes/' );

function Show404Error()
{

     include( INCLUDES_ROOT . '404.php' );

}

include( INCLUDES_ROOT . 'header.php' );

$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if(count($elements) == 2)        {               // No path elements means home
     include( INCLUDES_ROOT . 'home.php' );
  
}
else switch($elements[1])             // Pop off first item and switch
{
    case 'Some-text-goes-here':
        ShowPicture($elements); // passes rest of parameters to internal function
        break;
	case 'about':
		include(INCLUDE_ROOT . 'about.php');
		break;
    case 'cfp':
		include (INCLUDES_ROOT . 'cfp.php');
		break;
	 case 'committee':
		include (INCLUDES_ROOT . 'committee.php');
		break;
	 case 'registration':
	  include( INCLUDES_ROOT . 'registration.php');
        break;
	 case 'venue':
	  include( INCLUDES_ROOT . 'venue.php');
        break;
    case 'program':
	  include( INCLUDES_ROOT . 'program.php');
        break;
	 case 'posters':
	  include( INCLUDES_ROOT . 'posters.php');
        break;
	 case 'workshops':
	  include( INCLUDES_ROOT . 'workshops.php');
        break;
	 case 'sponsors':
	  include( INCLUDES_ROOT . 'sponsors.php');
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        Show404Error();
}

include( INCLUDES_ROOT . 'footer.php' );

?>