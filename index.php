<?php
session_start();
// require_once("utils/fonctions_PHP.php");
// require_once("utils/class.pdoChampionnatGym.php");
if(!isset($_REQUEST['uc']))
	$_SESSION['uc'] = 'accueil';
else
	$_SESSION['uc'] = $_REQUEST['uc'];
// include("controllers/entete.php") ;
include("views/template.php") ;
// $pdo = PdoChampionnatGym::getPdoChampionnatGym();
switch($_SESSION['uc'])
{
	case 'accueil':
		{
            include("views/accueil.php");
            break;
        }
	case 'actus':
		{
            include("views/actus.php");
            break;
        }
		
	case 'club':
		{
            include("views/club.php");
            break;
        }
		
	case 'competitions':
		{
            include("views/competitions.php");
            break;
        }

    case 'animations':
        {
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