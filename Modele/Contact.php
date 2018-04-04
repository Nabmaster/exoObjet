<?php
namespace Modele;

/**
 *
 */
class Contact extends \Lib\Entite
{
  private $date;
  private $nom;
  private $genre;
  private $categorie;
  private $email;
  private $message;


//--------getter/setter----------------------------
    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     *
     * @param mixed date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        if (strlen($nom) < 3) {
          $this->erreur[] = 'Entrer un nom valide';
        }else {
          $this->nom = $nom;
          return $this;
        }
    }

    /**
     * Get the value of Genre
     *
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of Genre
     *
     * @param mixed genre
     *
     * @return self
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Get the value of Categorie
     *
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of Categorie
     *
     * @param mixed categorie
     *
     * @return self
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
      if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $this->erreur[] = 'Mauvais format Email';
      }else{
        $this->email = htmlspecialchars($_POST['email']);
        return $this;
      }
    }

    /**
     * Get the value of Message
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set the value of Message
     *
     * @param mixed message
     *
     * @return self
     */
    public function setMessage($message)
    {
      if (strlen($message) < 3) {
        $this->erreur[] = 'Entrer un message';
      }else {
        $this->message = $message;
        return $this;
      }
    }
//-----------------------------------------------------
    public function verifGenre(array $data)
    {
      if (array_key_exists('genre', $data)) {
        return true;
      }else {
        $this->erreur[] = 'choisir genre';
        return false;
      }
    }
    public function verifCategorie(array $data)
    {
      if ($_POST['categorie'] != 'Categorie') {
      return true;
    }else {
      $this->erreur[] = 'choisir categorie';
      return false;
    }
  }
//----constructeur----------------------------------------
    public function __construct(array $data = [])
    {
      $this->date = new \DateTime();
      $this->verifCategorie($data);
      $this->verifGenre($data);
      parent::__construct($data);
    }
//---------------------------------------------------------

}
