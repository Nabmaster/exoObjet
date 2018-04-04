<?php

namespace Modele;
use PDO;

class CategorieManager extends \Lib\EntiteManager
{

    public function getListing()
    {
        $sql = 'SELECT * FROM categorie ORDER BY nom';
        $result = $this->pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Categorie::class);
        $categories = $result->fetchAll();
        return $categories;
    }
}
