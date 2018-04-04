<?php
/**
 * User: Nab
 * Date: 06/02/2018
 * Time: 10:57
 */
namespace Controleur\FrontEnd;

/**
 * Class BlogControleur
 * @package Controleur
 */
class BlogControleur extends \Lib\Controleur
{
  protected function listingAction()
  {
    $am = new \Modele\ArticleManager();
    $articles = $am->getListing();
    $data = ['articles' => $articles];
    $this->Render('blog/listing.html.php', $data);
  }
  protected function detailAction()
  {
    $id = $_GET['id'];
    $am = new \Modele\ArticleManager();
    $article = $am->getArticleById($id);
    $data = ['article' => $article];
    $this->Render('blog/detail.html.php', $data);
  }
}
