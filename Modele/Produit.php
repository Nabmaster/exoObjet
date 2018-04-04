<?php
namespace Modele;

/**
 *
 */
class Produit extends \Lib\Entite
{
  protected $id;
  protected $nom;
  protected $contenu;
  protected $image;
  protected $prix;
  protected $date;


//---Getter / Setter -----------------------



    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id_produit;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id_produit = $id;

        return $this;
    }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom_produit;
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
        $this->nom_produit = $nom;

        return $this;
    }

    /**
     * Get the value of Contenu
     *
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of Contenu
     *
     * @param mixed contenu
     *
     * @return self
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param mixed image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of Prix
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of Prix
     *
     * @param mixed prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date_prod;
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
        $this->date_prod = $date;

        return $this;
    }
//---------------------------------------------------
//----constructeur------------------------
public function __construct($data = [])
{
  $this->date_prod = new \DateTime();
  parent::__construct($data);
}
//----------------------------------------
//----------------------------------------

public function dateLocale()
{
  //pour avoire la date en francais avec setocale dans app.php et utf8_encode pour avoir les accents
  return utf8_encode(strftime('%A %d %B %Y', $this->date_prod->getTimestamp()));
}
}
