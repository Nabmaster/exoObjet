<?php
namespace Controleur\FrontEnd;

/**
 *
 */
class ContactControleur extends \Lib\Controleur
{
  public function listingAction()
  {
    $cm = new \Modele\CategorieManager();
    $categories= $cm->getListing();
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      $contact = new \Modele\Contact($_POST);
      //var_dump($contact);
      if ($contact->getErreur() != []) {
        $message = implode('<br />', $contact->getErreur());
        $this->render('contact/index.html.php',['categories' => $categories, 'message' => $message]);
        exit;
      }

      $cm = new \Modele\ContactManager;
      $cm->createContact($contact);
      $this->render('contact/success.html.php');
      exit;
    }
    $this->render('contact/index.html.php', ['categories'=>$categories]);
  }
}
