<?php

namespace Modele;
use PDO;

class ProduitManager extends \Lib\EntiteManager
{

    public function getProduitById($id)
    {
        $sql = 'SELECT * FROM produit WHERE id_produit = ?';
        $result = $this->pdo->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Produit::class);
        $produit = $result->fetch();
        $produit->setDate(new \DateTime($produit->getDate()));
        return $produit;


        //-----------------------------------------------------
    }
    public function getTags($id){
      //recupere les tags
      $sql = 'SELECT t.id, t.titre FROM tag t JOIN produit_tag pt ON t.id = pt.id_tag JOIN produit p ON p.id_produit = pt.id_produit AND p.id_produit = ?';
      $result = $this->pdo->prepare($sql);
      $result->bindParam(1, $id, PDO::PARAM_INT);
      $result->execute();
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $tags = $result->fetchAll();
      return $tags;
    }

    public function getProduitByCat($id)
    {
        $sql = 'SELECT * FROM produit JOIN categorie ON id_cat = id_categorie WHERE id_cat = ?';
        $result = $this->pdo->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Produit::class);
        $produits = $result->fetchAll();
        foreach ($produits as $produit) {
          $produit->setDate(new \DateTime($produit->getDate()));
        }
        return $produits;
    }
    function tagdetail($id)
    {
      global $pdo;
      $id = $_GET['id'];
      $sql = 'SELECT *
      FROM produit p
      JOIN produit_tag pt ON p.id_produit = pt.id_produit
      join tag t ON t.id = pt.id_tag
      AND t.id = ?';
      $result = $this->pdo->prepare($sql);
      $result->bindParam(1, $id, PDO::PARAM_INT);
      $result->execute();
      $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Produit::class);
      $produits = $result->fetchAll();
      return $produits;
    }
}
