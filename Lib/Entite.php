<?php
/**
 *
 */
 namespace Lib;
abstract class Entite
{
  /**
   * @var integer
   */
  protected $id;

  /**
   * @var string
   */
  protected $slug;

  /**
   * @var string
   */
  protected $erreur =[];

  /**
   * @return id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return Erreur
   */
  public function getErreur()
  {
    return $this->erreur;
  }

  /**
   * @param string
   */
   public function getSlug($slug)
   {
     $this->slug = $slug;
     return $this;
   }

   /**
    * @param integer
    */
  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @param string
   */
  public function setErreur($erreur)
  {
      $this->erreur = $erreur;
      return $this;
  }
  public function setSlug()
  {
    $this->slug = $slug;
    return $this;
  }

  //fonction hydratation--------------------------
  protected function hydratation($data = [])
  {
    foreach ($data as $key => $value) {
      $setter = 'set'.ucfirst($key);    //ucfirst va mettre la valeur recupere en uper case first (premiere lettre en majuscule)
      if (method_exists($this, $setter)) {
        $this->$setter($value);
      }
    }
  }
  //----------------------------------------------

  public function __construct(array $data = [])
  {
    if ($data) {
      $this->hydratation($data);
    }
  }

  static public function slugify($text) {
          // replace non letter or digits by -
          $text = preg_replace('~[^\pL\d]+~u', '-', $text);

          // transliterate
          $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

          // remove unwanted characters
          $text = preg_replace('~[^-\w]+~', '', $text);

          // trim
          $text = trim($text, '-');

          // remove duplicate -
          $text = preg_replace('~-+~', '-', $text);

          // lowercase
          $text = strtolower($text);

          if (empty($text)) {
              return 'n-a';
          }

          return $text;
      }

}


 ?>
