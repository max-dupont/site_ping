<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe API
 * pour l'application SitePing
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monApi de type API 
 * $monApiGsb qui contiendra l'unique instance de la classe
 *
*/
class ApiSitePing
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=site_ping';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monApi;
		private static $monApiSitePing = null;
/**
 * Constructeur privé, crée l'instance de API qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		ApiSitePing::$monApi = new PDO(ApiSitePing::$serveur.';'.ApiSitePing::$bdd, ApiSitePing::$user, ApiSitePing::$mdp); 
			ApiSitePing::$monApi->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		ApiSitePing::$monApi = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instanceApiSitePing = ApiSitePing::getApiSitePing();
 * @return l'unique objet de la classe ApiSitePing
 */
	public  static function getApiSitePing()
	{
		if(ApiSitePing::$monApiSitePing == null)
		{
			ApiSitePing::$monApiSitePing= new ApiSitePing();
		}
		return ApiSitePing::$monApiSitePing;  
	}

	public function getUsers()
	{
		$req = "select login, password from users";
		$res = ApiSitePing::$monApi->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }
    

    /**select login, password, type, title, GROUP_CONCAT(files.NOM) as imagesName, GROUP_CONCAT(files.URL) as imagesUrls
        from user
        join article on article.ID_AUTEUR=user.ID
        join article_image on article.ID=article_image.ID_1
        join files on article_image.ID=files.ID
        GROUP BY article.ID
        imagesUrls.explode(,)*/
    public function getTournaments()
	{
		$req = "select login, password, type, texte, title, GROUP_CONCAT(files.NOM) as imagesName, GROUP_CONCAT(files.URL) as imagesUrls
                from user
                join article on article.ID_AUTEUR=user.ID
                join article_image on article.ID=article_image.ID_1
                join files on article_image.ID=files.ID
                where type ='tournament'
                GROUP BY article.ID
                order by created desc limit 5";
		$res = ApiSitePing::$monApi->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }
    
    public function getEvents()
	{
		$req = "select login, password, type, texte, title, GROUP_CONCAT(files.NOM) as imagesName, GROUP_CONCAT(files.URL) as imagesUrls
                from user
                join article on article.ID_AUTEUR=user.ID
                join article_image on article.ID=article_image.ID_1
                join files on article_image.ID=files.ID
                where type ='event'
                GROUP BY article.ID
                order by created desc limit 5";
		$res = ApiSitePing::$monApi->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	// public function setHebergement($nom, $type, $nbChambre1, $nbChambre2, $tel, $adresse, $cp, $ville, $mail)
	// {
	// 	$req = "insert into hebergement(NOMHEB, NBCHAMBRE1PLACE, NBCHAMBRE2PLACES, TYPE, TELHEB, ADRESSE, VILLE, CP, MAIL) values ('$nom','$nbChambre1','$nbChambre2','$type','$tel','$adresse','$ville','$cp', '$mail')";
	// 	$res = ApiSitePing::$monApi->exec($req);
	// }
	// public function getUnHebergement($id)
	// {
	// 	$req = "select * from hebergement WHERE IDHEB='$id'";
	// 	$res = ApiSitePing::$monApi->query($req);
	// 	$uneLigne = $res->fetch();
	// 	return $uneLigne;
	// }
	
}
?>