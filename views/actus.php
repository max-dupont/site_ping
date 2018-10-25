<div id="right">
    <h5>Actualités</h5>
    <?php
        for ($i=0; $i < sizeof($actus); $i++) { 
    ?>
    <div id="miniArticle<?php echo $i; ?>" class="right_row1" style ="display:block">
        <h4><?php echo $actus[$i]['title'] ?></h4>
        <img src="utils/images/loto.jpg" class="right_box_img" alt="" /><br />
        <span class="span_lh">
            <?php echo substr($actus[$i]['texte'], 0, 500), '...'; ?>
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle<?php echo $i; ?>', 'article<?php echo $i; ?>')">Lire l'article</button></div>
    </div>
    <div id="article<?php echo $i; ?>" style="display:none">
        <h4><?php echo $actus[$i]['title'] ?></h4>
        <img src="utils/images/loto.jpg" style="float:left;padding-right:15px;height:180px" alt="" /><br />
        <span class="span_lh">
            <?php echo $actus[$i]['texte'] ?>
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle<?php echo $i; ?>', 'article<?php echo $i; ?>')">Fermer</button></div>
    </div>
    <?php
            if ($i !== sizeof($actus)-1) {
            ?>
                <div class="div_line" style=" height: 20px;"></div>
            <?php
            }
        }
    ?>
    <!-- <div id="miniArticle2" class="right_row1">
        <h4>Finale des tournois de secteur</h4>
        <img src="utils/images/tournoi_secteur.jpg" class="right_box_img" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle2', 'article2')">Lire l'article</button></div>
    </div>
    <div id="article2" style="height:225px; display:none">
        <h4>Finale des tournois de secteur</h4>
        <img src="utils/images/tournoi_secteur.jpg" style="float:left;padding-right:15px;height:180px" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle2', 'article2')">Fermer</button></div>
    </div>
    <div class="div_line" style=" height: 20px;"></div>
    <div id="miniArticle3" class="right_row1">
        <h4>Séniors : Journée 7 - Phase 2</h4>
        <img src="utils/images/loto.jpg" class="right_box_img" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle3', 'article3')">Lire l'article</button></div>
    </div>
    <div id="article3" style="height:225px; display:none">
        <h4>Séniors : Journée 7 - Phase 2</h4>
        <img src="utils/images/loto.jpg" style="float:left;padding-right:15px;height:180px" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle3', 'article3')">Fermer</button></div>
    </div>
    <div class="div_line" style=" height: 20px;"></div>
    <div id="miniArticle4" class="right_row1">
        <h4>Jeunes : Journée 5 - Phase 2</h4>
        <img src="utils/images/jeunes1.jpg" class="right_box_img" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle4', 'article4')">Lire l'article</button></div>
    </div>
    <div id="article4" style="height:225px; display:none">
        <h4>Jeunes : Journée 5 - Phase 2</h4>
        <img src="utils/images/jeunes1.jpg" style="float:left;padding-right:15px;height:180px" alt="" /><br />
        <span class="span_lh">Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Vivamus auctor sem nec est porttitor nec rutrum turpis facilisis.
            Fusce
        </span>
        <div class="read_more"><button onclick="showArticle('miniArticle4', 'article4')">Fermer</button></div>
    </div> -->
    <!-- <div class="div_line" style=" height: 20px;"></div> -->
</div>