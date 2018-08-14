<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>La Seg TT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
    <div id="main">
    	<!-- header -->
    <!-- <div id="header"> -->
		<!-- <div id="logo"> -->
            <!-- <a href="#"> -->
                <!-- <span class="logo_span">La Seg TT</span><br /> -->
                <!-- <img src="images/logo.png" class="header_img" alt="" /> -->
                <!-- Company Slogan Goes Here -->
            <!-- </a> -->
        <!-- </div> -->
        <!-- <div class="header_imgs"> -->
        	<!-- <a href="#"><img src="images/logo.png" class="header_img" alt="" /></a> -->
            <!-- <a href="#"><img src="images/img_l2.png" class="header_img" alt="" /></a>
            <a href="#"><img src="images/img_l3.png" class="header_img" alt="" /></a>
            <a href="#"><img src="images/img_l4.png" class="header_img" alt="" /></a>
            <a href="#"><img src="images/img_l5.png" class="header_img" alt="" /></a> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- top -->
    <div class="top"  id="wrapper">
        <div class="logo" style="text-align:center">
            <img class="margin-b-10" src="images/logo.png" alt="#" />
            <img class="labels" src="images/actiping.jpg" alt="#" />
            <img class="labels" src="images/equipping.jpg" alt="#" />
        </div>
        <div class="top_img">
            <div id="wrapper">
                <div id="slider-wrapper">        
                    <div id="slider" class="nivoSlider">
                        <!-- inclure logo sur les images -->
                        <img src="images/loto.jpg" alt="#" />
                        <img src="images/jeunes.jpg" alt="#"/>
                        <img src="images/jeunes1.jpg" alt="#" />
                        <img src="images/titres.jpg" alt="#" />
                        <img src="images/tournoi_secteur.jpg" alt="#" />
                    </div>        
                </div>
            </div>
            <script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
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
            <?php
            if (1===1) {
                ?>
                    <li class="dropdown active">
                <?php
            } else {
                ?>
                    <li class="dropdown">
                <?php
            }
            ?>
            <!-- <li class="dropdown active"> -->
                <a href="javascript:void(0)" class="dropbtn">Accueil</a>
            </li>
            <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Actualités</a>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Club</a>
                    <div class="dropdown-content">
                            <a href="#">Présentation</a>
                            <a href="#">Inscription / Tarifs</a>
                            <a href="#">Horaires / Dates</a>
                            <a href="#">Localisation</a>
                    </div>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Compétitions</a>
                    <div class="dropdown-content" style="width:202px" >
                        <!-- <a>Séniors -->
                            <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                                <a style="width: 100%;">Séniors</a>
                                <li><a href="#" style="float:left; padding: 5px">D2-A</a></li>
                                <li><a href="#" style="float:left; padding: 5px">D3-A</a></li>
                                <li><a href="#" style="float:left; padding: 5px">D3-B</a></li>
                                <li><a href="#" style="float:left; padding: 5px">D3-C</a></li>
                                <li><a href="#" style="float:left; padding: 5px">D4-A</a></li>
                            </ul>
                        <!-- </a> -->
                            <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                                <a style="width: 100%;">Jeunes</a>
                                <li><a href="#" style="padding: 5px">ÉQUIPE 1 / D3-A</a></li>
                            </ul>
                            <ul style="background-color:#f9f9f9;color:black;border-radius: inherit;">
                                <a style="width: 100%;">Coupe de l'anjou</a>
                                <li><a href="#" style="padding: 5px">ÉQUIPE 1 / C3-A</a></li>
                                <li><a href="#" style="padding: 5px">ÉQUIPE 2 / C3-B</a></li>
                            </ul>
                    </div>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Animations</a>
                    <div class="dropdown-content">
                        <a href="#">Repas de fin de saison 2018</a>
                        <a href="#">Ping palet 2018</a>
                        <a href="#">Loto 2018</a>
                    </div>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Partenaires</a>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Contact</a>
            </li>
            <li class="dropdown">
                    <a href="#" class="dropbtn">Administration</a>
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
                    <script src="test/moment-locale.js"></script>
                    <script src="tests/index.js"></script>
                    <link href="tests/index.css" rel="stylesheet" type="text/css" />
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
                <div id="right">
                	<div id="right_row1">
                        <!-- <div class="right_box"> -->
                            <h4>Repas de fin d'année 2018</h4>
                          <img src="images/loto.jpg" class="right_box_img" alt="" /><br />
                            <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
                            Fusce </span>
                            <div class="read_more"><a href="#">Lire l'article</a></div>
                        <!-- </div> -->
                      <!-- <div style="width:19px; float:left; height:10px;"></div>
                        <div class="right_box">
                            <h4>Praesent eu purus</h4>
                            <img src="images/right_box_img2.png" class="right_box_img" alt="" /><br />
                            <span class="span_lh">In hac habitasse platea dictumst. Fusce tempus erat non erat sodales</span>
                            <div class="read_more"><a href="#">Lire l'article</a></div>
                        </div>
                        <div style="width:19px; float:left; height:10px;"></div>
                        <div class="right_box" style="width: 227px;">
                            <h4>Sed sollicitudin leo</h4>
                            <img src="images/right_box_img3.png" class="right_box_img" alt="" /><br />
                            <span class="span_lh">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per </span>
                            <div class="read_more"><a href="#">Lire l'article</a></div>
                        </div> -->
                	</div>
                    <div class="div_line" style=" height: 20px;"></div>
                    <div id="right_row1" style="text-align:center">
                    	<!-- <div id="right_row2_left"> -->
                        	<h5>La SEG TT</h5>
                            <!-- <img src="images/phot1.png" class="phot" alt="" /> -->
                            <span class="span_lh">
                                    Bienvenue sur le site de la Seg TT, le club de tennis de table de la Séguinière.
                                    <br>Adhérents, supporters, partenaires, ce site est le votre.
                                    Vous pouvez participer à son animation en nous envoyant vos commentaires, photos ou informations concernant le club via notre formulaire de contact.
                                    <br>Nous sommes à l’écoute de vos remarques.
                                    <br><b>Venez supporter la SEGTT pour une ambiance toujours exceptionnelle.</b>
                                    <br>Le championnat jeune a lieu le samedi après-midi
                                        tandis que le championnat sénior a lieu le dimanche matin.
                                    <br>(voir calendrier à gauche)
                                    <br>
                                    <a href="https://www.facebook.com/La-Seg-TT-124926477608075/" style="color:white; font-weight:bold;" >
                                        <img src="images/bottom_fish2.png" style="zoom:15%">
                                        Facebook
                                    </a>
                            </span>
                            <embed src="./images/planning.pdf" style="float:left; margin:2% auto" width="100%" height="350px" type='application/pdf'/>
                        <!-- </div> -->
                        <!-- <div id="right_row2_right">
                        	<h5>Company News</h5>
                            <span class="span_lh">
                            	<span class="span_data">Apr. 10, 2012</span><br />
                                <strong>Duis a molestie massa.</strong><br />
								Nullam imperdiet vulputate volutpat. Nunc consectetur mattis accumsan. Etiam adipiscing leo in risus semper ac lacinia
                            </span>
                            <div style=" height: 15px; width: 100%"></div>
                            <div class="div_line" style=" height: 15px;"></div>
                            <span class="span_lh">
                            	<span class="span_data">Apr. 11, 2012</span><br />
                                <strong>Sed sodales accumsan fermentum.</strong><br />
								Mauris tortor tortor, rutrum in lacinia ac, consequat quis nisi. Vestibulum non tortor
                            </span>
                        </div> -->
                    	<div style="clear: both; width: 100%;"></div>
                    </div>
                </div>
            	<div style="clear: both; width: 100%;"></div>
            </div>
        </div>
    </div>

   <!-- bottom -->
   
    <!-- <div id="bottom">
        <div class="bottom_box bottom_box1">
        	<h1>About Us</h1>
            <img src="images/phot2.png" alt="" />
            <div style=" height: 5px; width: 100%"></div>
            <span class="span_lh">Proin adipiscing fringilla nibh id hendrerit. Duis accumsan, arcu ac porta sus</span>
        </div>
        <div class="bottom_box bottom_box2">
        	<h1>Services</h1>
            <ul class="bottom_ul">
                <li><a href="#">interdum</a></li>
                <li><a href="#">pulvinar</a></li>
                <li><a href="#">adipiscing</a></li>
                <li><a href="#">vestibulum</a></li>
                <li><a href="#">tempus</a></li>
                <li><a href="#">euismod </a></li>
            </ul>
        </div>
        <div class="bottom_box bottom_box3">
        	<h1>Follow Us</h1>
            <div class="bottom_box3_text">
                <div class="bottom_box3_link bottom_box3_link1"><a href="#">Subscribe to Blog</a></div>
                <div class="bottom_box3_link bottom_box3_link2"><a href="#">Be a fan on Facebook</a></div>
                <div class="bottom_box3_link bottom_box3_link3"><a href="#">RSS Feed</a></div>
                <div class="bottom_box3_link bottom_box3_link4"><a href="#">Follow us on Twitter</a></div>
            </div>
        </div>
        <div class="bottom_box bottom_box4">
        	<h1>Contact Information</h1>
            <div class="contact_text">
            	1234 SomeStreet<br />
				Brooklyn, NY 11201<br />
                Phone:  1(234) 567 8910<br />
                Fax: 1(234) 567 8910<br />
                E-mail: <a class="contact_a" href="#">companyname@yahoo.com</a>
            </div>
        </div>
        <div style="clear: both; width: 100%; height:15px;"></div>
    </div> -->
    <div id="footer">
            <p>Copyright  2012. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
            <p><!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Free Website Templates</a>, coded by <a href="http://www.myfreecsstemplates.com/" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
            <p>Updated by Maxime DUPONT</p>
        </div>
    </div>
</body>
</html>
