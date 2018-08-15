<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>La Seg TT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="utils/slider/nivo-slider.css" type="text/css" media="screen" />
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
            <div id="wrapper">
                <div id="slider-wrapper">        
                    <div id="slider" class="nivoSlider">
                        <!-- inclure logo sur les utils/images -->
                        <img src="utils/images/loto.jpg" alt="#" />
                        <img src="utils/images/jeunes.jpg" alt="#"/>
                        <img src="utils/images/jeunes1.jpg" alt="#" />
                        <img src="utils/images/titres.jpg" alt="#" />
                        <img src="utils/images/tournoi_secteur.jpg" alt="#" />
                    </div>        
                </div>
            </div>
            <script type="text/javascript" src="utils/slider/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="utils/slider/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
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
                <a href="javascript:void(0)" class="dropbtn">Club</a>
                <div class="dropdown-content">
                        <a href="index.php?uc=club">Présentation</a>
                        <a href="index.php?uc=club">Inscription / Tarifs</a>
                        <a href="index.php?uc=club">Horaires / Dates</a>
                        <a href="index.php?uc=club">Localisation</a>
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
                <a href="javascript:void(0)" class="dropbtn">Compétitions</a>
                <div class="dropdown-content" style="width:202px" >
                    <!-- <a>Séniors -->
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Séniors</a>
                            <li><a href="index.php?uc=competitions" style="float:left; padding: 5px">D2-A</a></li>
                            <li><a href="index.php?uc=competitions" style="float:left; padding: 5px">D3-A</a></li>
                            <li><a href="index.php?uc=competitions" style="float:left; padding: 5px">D3-B</a></li>
                            <li><a href="index.php?uc=competitions" style="float:left; padding: 5px">D3-C</a></li>
                            <li><a href="index.php?uc=competitions" style="float:left; padding: 5px">D4-A</a></li>
                        </ul>
                    <!-- </a> -->
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Jeunes</a>
                            <li><a href="index.php?uc=competitions" style="padding: 5px">ÉQUIPE 1 / D3-A</a></li>
                        </ul>
                        <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                            <a style="width: 100%;">Coupe de l'anjou</a>
                            <li><a href="index.php?uc=competitions" style="padding: 5px">ÉQUIPE 1 / C3-A</a></li>
                            <li><a href="index.php?uc=competitions" style="padding: 5px">ÉQUIPE 2 / C3-B</a></li>
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
                <a href="javascript:void(0)" class="dropbtn">Animations</a> <!-- max 6/7 -->
                <div class="dropdown-content">
                    <a href="index.php?uc=animations">AG 2018</a>
                    <a href="index.php?uc=animations">Repas de fin de saison 2018</a>
                    <a href="index.php?uc=animations">Ping palet 2018</a>
                </div>
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
                        <li><a href="#">Repas de fin d'année 2018</a></li>
                        <li><a href="#">Finale des tournois de secteur</a></li>
                        <li><a href="#">Séniors : Journée 7 Phase 2</a></li>
                        <li><a href="#">Jeunes : Journée 5 Phase 2</a></li>
                        <li><a href="#">Coupe de l'anjou : Journée 5</a></li>
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
                    <ul style="background-color: red;">
                        <div style="padding:10% 5% 10% 5%;  font-size:12px" >
                            <table style="padding:5%; border:1px solid white; border-radius:10px; background-color:#333; color:white">
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
                            </table>
                        </div>
                    </ul>
                    <ul>
                        <!-- <div style="height: 200px; width:100%; background-color:red"></div> -->
                    </ul>
                </div>