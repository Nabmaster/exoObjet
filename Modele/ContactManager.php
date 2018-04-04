<?php
namespace Modele;
/**
 *
 */
class ContactManager extends \Lib\EntiteManager
{
  public function createContact(Contact $contact)
  {
    $sql = 'INSERT INTO contact VALUES (null, ?, ?, ?, ?, ?, ?)';
    $result = $this->pdo->prepare($sql);
    $result->bindValue(1, $contact->getGenre());
    $result->bindValue(2, $contact->getNom());
    $result->bindValue(3, $contact->getEmail());
    $result->bindValue(4, $contact->getCategorie());
    $result->bindValue(5, $contact->getMessage());
    $result->bindValue(6, $contact->getDate()->format('Y-m-d H:m:s'));
    $result->execute();
  }
}
