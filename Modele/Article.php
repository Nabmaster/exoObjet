<?php
namespace Modele;
/**
 *
 */
class Article extends \Lib\Entite
{
  use \Tools\Extrait;
  protected $titre, $contenu, $image, $publier;

  /**
   * @var user
   */
   protected $auteur;

  /**
   * @var \DateTime
   */
   protected $date;

  //getter------------------------------
/**
 * @return id
 */
public function getId()
{
  return $this->id;
}
/**
 * @return titre
 */
public function getTitre()
{
  return $this->titre;
}
/**
 * @return contenu
 */
public function getContenu()
{
  return $this->contenu;
}
public function getImage()
{
  return $this->image;
}
public function getDate()
{
  return $this->date;
}
//setter------------------------------
public function setTitre($titre)
{
  if (strlen($titre) <= 2) {
    $this->erreur[] .= 'titre non rempli';
  }else {
    $this->titre = $titre;
  }
  return $this;
}
public function setContenu($contenu)
{
  if (strlen($contenu) <= 2) {
    $this->erreur[] .= 'contenu non rempli';
  }else {
    $this->contenu = $contenu;
  }
  return $this;
}

public function setImage($image)
{
  $this->image = $image;
  return $this;
}
public function setAuteur($auteur)
{
  $this->auteur = $auteur;
  return $this;
}
public function setDate(\DateTime $date)
{
  $this->date = $date;
  return $this;
}
//----------------------------------------
//----constructeur------------------------
public function __construct($data = [])
{
  $this->date = new \DateTime();
  parent::__construct($data);
}
//----------------------------------------

public function dateLocale()
{
  //pour avoire la date en francais avec setocale dans app.php et utf8_encode pour avoir les accents
  return utf8_encode(strftime('%A %d %B %Y', $this->date->getTimestamp()));
}

}
