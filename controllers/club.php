<?php

if(!isset($_REQUEST['action']))
	$_SESSION['action'] = 'presentation';
else
	$_SESSION['action'] = $_REQUEST['action'];

switch($_SESSION['action'])
{
	case 'presentation':
		{
            include("views/club/presentation.php");
            break;
        }
	case 'tarifs':
		{
            include("views/club/tarifs.php");
            break;
        }
		
	case 'horaires':
		{
            include("views/club/horaires.php");
            break;
        }
		
	case 'localisation':
		{
            include("views/club/localisation.php");
            break;
        }
}
?>