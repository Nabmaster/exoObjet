<?php
namespace Controleur\FrontEnd;

/**
 * Class BlogControleur
 * @package Controleur
 */
class CatalogueControleur extends \Lib\Controleur
{
  protected function listingAction()
  {
    $cm = new \Modele\CategorieManager();
    $categories = $cm->getListing();
    $data = ['categories' => $categories];
    $this->Render('catalogue/listing.html.php', $data);
  }
  protected function CatdetailAction()
  {
    $id = $_GET['id'];
    $pm = new \Modele\ProduitManager();
    $produits = $pm->getProduitByCat($id);
    $data = ['produits' => $produits];
    $this->Render('catalogue/Catdetail.html.php', $data);
  }
  protected function ProddetailAction()
  {
    $id = $_GET['id'];
    $pm = new \Modele\ProduitManager();
    $produit = $pm->getProduitById($id);
    $tags=$pm->getTags($id);
    $data = ['produit' => $produit,'tags'=>$tags];
    $this->Render('catalogue/Proddetail.html.php', $data);
  }
  protected function tagDetailAction()
  {
    $id = $_GET['id'];
    $pm = new \Modele\ProduitManager();
    $produits = $pm->tagdetail($id);
    $data = ['produits' => $produits];
    $this->Render('catalogue/Catdetail.html.php', $data);
  }
}
