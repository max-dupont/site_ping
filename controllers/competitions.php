<?php

if(!isset($_REQUEST['action']))
	$_SESSION['action'] = 'equipe1';
else
	$_SESSION['action'] = $_REQUEST['action'];

switch($_SESSION['action'])
{
	case 'seniors-equipe1':
		{
            include("views/competitions/seniors-equipe1.php");
            break;
        }
	case 'seniors-equipe2':
		{
            include("views/competitions/seniors-equipe2.php");
            break;
        }
		
	case 'seniors-equipe3':
		{
            include("views/competitions/seniors-equipe3.php");
            break;
        }
		
	case 'seniors-equipe4':
		{
            include("views/competitions/seniors-equipe4.php");
            break;
        }

    case 'seniors-equipe5':
		{
            include("views/competitions/seniors-equipe5.php");
            break;
        }

    case 'coupe-equipe1':
		{
            include("views/competitions/coupe-equipe1.php");
            break;
        }

	case 'coupe-equipe2':
		{
            include("views/competitions/coupe-equipe2.php");
            break;
        }

    case 'jeunes-equipe1':
		{
            include("views/competitions/jeunes-equipe1.php");
            break;
        }
}
?>