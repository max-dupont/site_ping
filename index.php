<?php
session_start();
// require_once("utils/fonctions_PHP.php");
require_once("models/api.php");
if(!isset($_REQUEST['uc']))
	$_SESSION['uc'] = 'accueil';
else
	$_SESSION['uc'] = $_REQUEST['uc'];
// include("controllers/entete.php") ;
include("views/template.php") ;
$api = ApiSitePing::getApiSitePing();
switch($_SESSION['uc'])
{
	case 'accueil':
		{
            include("views/accueil.php");
            break;
        }
	case 'actus':
		{
            $actus=$api->getTournaments();
            for ($i=0; $i < sizeof($actus); $i++) {
                if ($actus[$i]['imagesUrls'] && $actus[$i]['imagesName']) {
                    $urls = explode(",", $actus[$i]['imagesUrls']);
                    $names = explode(",", $actus[$i]['imagesName']);
                } else {
                    $urls = [];
                    $names = [];
                } 
                for ($j=0; $j < sizeof($names); $j++) { 
                    $actus[$i]['images'][$j]['name'] = $names[$j];
                    $actus[$i]['images'][$j]['url'] = $urls[$j];
                }
                var_dump($events[$i]);
            }
            include("views/actus.php");
            break;
        }
		
	case 'club':
		{
            include("controllers/club.php");
            break;
        }
		
	case 'competitions':
		{
            include("controllers/competitions.php");
            break;
        }

    case 'animations':
        {
            $events=$api->getEvents();
            for ($i=0; $i < sizeof($events); $i++) {
                if ($events[$i]['imagesUrls'] && $events[$i]['imagesName']) {
                    $urls = explode(",", $events[$i]['imagesUrls']);
                    $names = explode(",", $events[$i]['imagesName']);
                } else {
                    $urls = [];
                    $names = [];
                } 
                for ($j=0; $j < sizeof($names); $j++) { 
                    $events[$i]['images'][$j]['name'] = $names[$j];
                    $events[$i]['images'][$j]['url'] = $urls[$j];
                }
                var_dump($events[$i]);
            }
            include("views/animations.php");
            break;
        }

	case 'partenaires':
		{
            include("views/partenaires.php");
            break;
        }

    case 'contact':
		{
            include("views/contact.php");
            break;
        }

    case 'administration':
		{
            include("views/administration.php");
            break;
        }
}
include("views/footer.php") ;

// include("views/pied.php") ;
// require_once("utils/fonctions_JS.php");
?>