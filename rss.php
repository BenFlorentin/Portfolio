 <?php 

 require_once("magpierss/feedparser.php");

 ?>
 <div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                Le Monde Informatique -> Logiciel
            </div>
        </div>
        <div class="rss-text scroll-pane">
            <?php echo FeedParser("http://www.lemondeinformatique.fr/flux-rss/thematique/logiciel/rss.xml", 10);
            ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                01NET -> Applis et Logiciels
            </div>
        </div>
        <div class="rss-text" >
            <?php echo FeedParser("http://www.01net.com/rss/actualites/applis-logiciels/", 10);
            ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                Clubic -> Logiciels
            </div>
        </div>
        <div class="rss-text scroll-pane">
            <?php echo FeedParser("http://www.clubic.com/telecharger/actus-logiciels/actualites.rss", 10);
            ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                Developpez.com -> PHP
            </div>
        </div>
        <div class="rss-text scroll-pane">
            <?php echo FeedParser("http://php.developpez.com/index/rss", 10);
            ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                Developpez.com -> Javascript
            </div>
        </div>
        <div class="rss-text scroll-pane">
            <?php echo FeedParser("http://javascript.developpez.com/index/rss", 10);
            ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <br/>
    <div class="container-rss">
        <div class="rss-container-title">
            <div class="rss-title">
                Zdnet.fr -> Actualit&#233;s informatique
            </div>
        </div>
        <div class="rss-text scroll-pane">
            <?php echo FeedParser("http://www.zdnet.fr/feeds/rss/actualites/informatique", 10);
            ?>
        </div>
    </div>
</div>
&nbsp;
<div class="col-md-12" style="background-color: aliceblue; border-radius: 10px">
    <div class="col-md-4">
        <h3>Scrum</h3>
        <ul class="list-unstyled">
            <li><a href="http://www.groupeafg.com/methodes-agiles-scrum">M&#233;thodes agiles : Scrum</a></li>
            <li><a href="http://www.synergeek.fr/methode-agile-scrum-cest-quoi">Scrum : c&#39;est quoi ?</a></li>
            <li><a href="http://www.zdnet.fr/actualites/les-quatre-principes-cles-de-la-methode-scrum-toujours-insuffisamment-suivis-39811719.html">Les principes cl&#233;s</a></li>
        </ul>
    </diV>
    <div class="col-md-4">
        <h3>Responsive Web Design</h3>
        <ul class="list-unstyled">
            <li><a href="http://www.alsacreations.com/article/lire/1615-cest-quoi-le-responsive-web-design.html">Responsive Web Design : c&#39;est quoi ?</a></li>
        </ul>
    </div>
    <div class="col-md-4">
        <h3>Merise</h3>
        <ul class="list-unstyled">
            <li><a href="http://www.commentcamarche.net/contents/655-merise-initiation-a-la-conception-de-systemes-d-information">Initiation à la conception de systèmes d'information</a></li>
            <li><a href="http://www.commentcamarche.net/contents/658-merise-modele-conceptuel-de-la-communication">Modèle conceptuel de la communication</a></li>
            <li><a href="http://www.commentcamarche.net/contents/659-merise-modele-conceptuel-des-donnees">Modèle conceptuel des données</a></li>
            <li><a href="http://www.commentcamarche.net/contents/657-merise-contraintes-sur-roles">Contraintes sur rôles</a></li>
            <li><a href="http://www.commentcamarche.net/contents/656-merise-contraintes-sur-relations">Contraintes sur relations</a></li>
            <li><a href="http://www.commentcamarche.net/contents/660-merise-modele-conceptuel-des-traitements">Modèle conceptuel des traitements</a></li>
            <li><a href="http://www.commentcamarche.net/contents/662-merise-modele-organisationnel-des-traitements">Modèle organisationnel des traitements</a></li>
            <li><a href="http://www.commentcamarche.net/contents/661-merise-modele-logique-des-donnees">Modèle logique des données</a></li>
            <li><a href="http://www.commentcamarche.net/contents/663-merise-modele-physique-des-donnees">Modèle physique des données</a></li>
        </ul>
    </div>
</div>

