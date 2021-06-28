<?php
function get_membres($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT id, pseudo, password, email, DATE_FORMAT(date_inscription, \'%d/%m/%Y à %Hh%imin%ss\') AS date_inscription_fr, signature FROM membres ORDER BY date_inscription DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $membres = $req->fetchAll();
    
    
    return $membres;
}
