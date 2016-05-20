<?php
// on inclut la classe magpierss
require_once("magpierss/rss_fetch.inc");
 
// la fonction FeedParser() va extraire le contenu pour l'afficher
// elle prend en paramètre $url_feed, l'url du flux RSS et $nb_items_affiches, le 
//nombre d'éléments (items) à afficher
function FeedParser($url_feed, $nb_items_affiches) {
 
    // lecture du fichier distant (flux XML)
    $rss = fetch_rss($url_feed);
    $html="";
 
    // si le parcours du fichier se passe bien, on lit les élements (items)
    if (is_array($rss->items))  
    {
 
        // on ne garde que les $nb_items_affiches premiers éléments (items), 
//nombre défini dans l'en-tête de la fonction
        $items = array_slice($rss->items, 0, $nb_items_affiches);


 
        // on fait une boucle sur les informations : pour chaque item, récupérer 
//$titre...et afficher
        foreach($items as $item) 
        {

            if(isset($item['dc']['date']))
            {
                $pubdate = $item['dc']['date'];
            }
            else
            {
                $pubdate = $item['pubdate'];
            }


            // on mémorise les informations de chaque item dans des variables
            $titre = $item["title"];
            $lien = $item["link"];
            $description = '<div class="feed-item">
            					'.$item["description"];
 
 
            // la date utilisée pour les flux RSS est au format timestamp, il faut 
//donc formater la date
            // conversion au format jj/mm/aa. pour plus d'informations, vous conférer 
//au tutorial sur les timestamp
            $date = date("d/m/y",strtotime($pubdate)).'</div>';         
 
            // on affiche le titre de chaque item
            $html .= "<a href=\"".$lien."\" title=\"".$titre."\" target=\"_blank\">
".$titre."</a><br><br>\n";
 
            // puis la date et la description
            $html .= "<span class=\"text-faded\">$description <br/><br/> $date </span><br clear=\"left\">\n";
        } // fin de la boucle
 
        // on retourne la variable $html au programme (elle contient le code HTML 
//pour l'affichage du flux)
        return $html;
    } // fin du traitement du fichier
} // fin de la fonction FeedParser()
?>