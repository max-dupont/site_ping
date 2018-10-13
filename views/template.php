<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>La Seg TT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="utils/slider/nivo-slider.css" type="text/css" media="screen" />
<script src="common.js"></script>

</head>
<body>
    <div id="main">
    	<!-- header -->
    <!-- <div id="header"> -->
		<!-- <div id="logo"> -->
            <!-- <a href="#"> -->
                <!-- <span class="logo_span">La Seg TT</span><br /> -->
                <!-- <img src="utils/images/logo.png" class="header_img" alt="" /> -->
                <!-- Company Slogan Goes Here -->
            <!-- </a> -->
        <!-- </div> -->
        <!-- <div class="header_imgs"> -->
        	<!-- <a href="#"><img src="utils/images/logo.png" class="header_img" alt="" /></a> -->
            <!-- <a href="#"><img src="utils/images/img_l2.png" class="header_img" alt="" /></a>
            <a href="#"><img src="utils/images/img_l3.png" class="header_img" alt="" /></a>
            <a href="#"><img src="utils/images/img_l4.png" class="header_img" alt="" /></a>
            <a href="#"><img src="utils/images/img_l5.png" class="header_img" alt="" /></a> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- top -->
    <div class="top"  id="wrapper">
        <div class="logo" style="text-align:center">
            <img class="margin-b-10" src="utils/images/logo.png" alt="#" />
            <img class="labels" src="utils/images/actiping.jpg" alt="#" />
            <img class="labels" src="utils/images/equipping.jpg" alt="#" />
        </div>
        <div class="top_img">
            <script src="utils/jquery-latest.min.js"></script>
            <script src="utils/slider2.0/js/jquery.film_roll.js"></script>
            <script>
                (function() {
                jQuery(function() {
                this.film_rolls || (this.film_rolls = []);
                this.film_rolls['demo'] = new FilmRoll({
                container: '#demo',
                // height: 275,
                width: 500
                });
                return true;
                });
                }).call(this);
            </script>
            <div id='demo' style="height: 100%" >
                <div><a href="index.php?uc=animations"><img src="utils/images/loto.jpg" alt="#" /></a></div>
                <div><a href="index.php?uc=actus"><img src="utils/images/jeunes.jpg" alt="#"/></a></div>
                <div><a href="index.php?uc=actus"><img src="utils/images/jeunes1.jpg" alt="#" /></a></div>
                <div><a href="index.php?uc=actus"><img src="utils/images/titres.jpg" alt="#" /></a></div>
                <div><a href="index.php?uc=actus"><img src="utils/images/tournoi_secteur.jpg" alt="#" /></a></div>
            </div>
        </div>
        <div style="clear: both; padding-top: 40px;"></div>
    </div>
    <div class="nav">
        <ul>
            <!-- accueil -->
            <?php
            if ($_SESSION['uc']==='accueil') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                <a href="index.php?uc=accueil" class="dropbtn">Accueil</a>
            </li>

            <!-- actus -->
            <?php
            if ($_SESSION['uc']==='actus') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                <a href="index.php?uc=actus" class="dropbtn">Actualités</a>
            </li>

            <!-- club -->
            <?php
            if ($_SESSION['uc']==='club') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                <a href="#" class="dropbtn">Club</a>
                <div class="dropdown-content">
                        <a href="index.php?uc=club&action=presentation">Présentation</a>
                        <a href="index.php?uc=club&action=tarifs">Inscription</a>
                        <a href="index.php?uc=club&action=horaires">Dates</a>
                        <a href="index.php?uc=club&action=localisation">Localisation</a>
                </div>
            </li>
            <?php
            if ($_SESSION['uc']==='competitions') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                <a href="#" class="dropbtn">Compétitions</a>
                <div class="dropdown-content" style="width:202px" >
                    <!-- <a>Séniors -->
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Séniors</a>
                            <li><a href="index.php?uc=competitions&action=seniors-equipe1" style="float:left; padding: 5px">D2-F</a></li>
                            <li><a href="index.php?uc=competitions&action=seniors-equipe2" style="float:left; padding: 5px">D3-H</a></li>
                            <li><a href="index.php?uc=competitions&action=seniors-equipe3" style="float:left; padding: 5px">D3-I</a></li>
                            <li><a href="index.php?uc=competitions&action=seniors-equipe4" style="float:left; padding: 5px">D3-J</a></li>
                            <li><a href="index.php?uc=competitions&action=seniors-equipe5" style="float:left; padding: 5px">D4-H</a></li>
                        </ul>
                    <!-- </a> -->
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Jeunes</a>
                            <li><a href="index.php?uc=competitions&action=jeunes-equipe1" style="padding: 5px">ÉQUIPE 1 / D2-A</a></li>
                        </ul>
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Coupe de l'anjou</a>
                            <!-- <li><a href="#" style="padding: 5px">ÉQUIPE 1 / C3-A</a></li> -->
                            <!-- <li><a href="#" style="padding: 5px">ÉQUIPE 2 / C3-B</a></li> -->
                        </ul>
                </div>
            </li>
            <?php
            if ($_SESSION['uc']==='animations') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                <a href="index.php?uc=animations" class="dropbtn">Animations</a>
            </li>
            <?php
            if ($_SESSION['uc']==='partenaires') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                    <a href="index.php?uc=partenaires" class="dropbtn">Partenaires</a>
            </li>
            <?php
            if ($_SESSION['uc']==='contact') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                    <a href="index.php?uc=contact" class="dropbtn">Contact</a>
            </li>
            <?php
            if ($_SESSION['uc']==='administration') {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
                    <a href="index.php?uc=administration" class="dropbtn">Administration</a>
                    <!-- <a href="#" class="dropbtn">Administration</a> -->
            </li>
        </ul> 
    </div>
    
    <!-- content -->
    
    <div id="content">
    	<div id="content_top">
        	<div id="content_bott">
            	<div id="left">
                	<div class="left_title" style=" border:1px solid white">Actualités</div>
                    <ul class="left_ul">
                        <li><a href="index.php?uc=animations">Repas de fin d'année 2018</a></li>
                        <li><a href="index.php?uc=actus">Finale des tournois de secteur</a></li>
                        <li><a href="index.php?uc=actus">Séniors : Journée 7 Phase 2</a></li>
                        <li><a href="index.php?uc=actus">Jeunes : Journée 5 Phase 2</a></li>
                        <li><a href="index.php?uc=animations">LOTO</a></li>
                    </ul>
                    <!-- <div class="left_title">Partners</div>
                    <ul class="left_ul2">
                        <li><a href="#">Fusce dictum suscipit velit</a></li>
                        <li><a href="#">Phasellus vehicula sollicitudin </a></li>
                        <li><a href="#">Donec commodo justo at eros </a></li>
                        <li><a href="#">In hac habitasse platea dictumst.</a></li>
                        <li><a href="#">Fusce tempus erat non erat</a></li>
                    </ul> -->
                    <!-- <div class="div_line" style=" height: 20px;"></div> -->
                    <div style="border-top: 3px solid #333; border-style: dotted;"></div>

                    <!-- <ul> -->
                        <div id="calendar" style=" border:1px solid white; border-radius:25px" ></div>
                    <!-- </ul> -->
                    <div style="border-top: 3px solid #333; border-style: dotted;"></div>
                    
                    <meta charset="UTF-8">
                    <script src="utils/calendar/moment-locale.js"></script>
                    <script src="utils/calendar/index.js"></script>
                    <link href="utils/calendar/index.css" rel="stylesheet" type="text/css" />
                    <ul style="background-color: rgb(255, 18, 18);">
                        <div style="padding:10% 5% 10% 5%; font-size:12px;text-align:center" >
                            <!-- <table style="width: 100%; padding:5%; border:1px solid white; border-radius:10px; background-color:#333; color:white">
                                <tr>
                                    <td style="text-align:left;">En ligne :</td>
                                    <td style="text-align:right;">0007</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left;">Visites aujourd'hui :</td>
                                    <td style="text-align:right;">0015</td>                                    
                                </tr>
                                <tr>
                                    <td style="text-align:left;">Visites totales :</td>
                                    <td style="text-align:right;">0030</td>
                                </tr>
                            </table> -->
                            <img src="http://services.supportduweb.com/cpt_global/120228-8.png"/>
                        </div>
                    </ul>
                    <ul>
                        <!-- <div style="height: 200px; width:100%; background-color:red"></div> -->
                    </ul>
                </div>