<?php
namespace Lib;
/**
 *
 *
 */
abstract class Application
{
    /**
     *
     * @var string
     */
    protected $name;
    /**
     *
     * @var string
     */
    protected $layout;

    /**
     *
     *
     */
    //const $racine = 'exoObjet/';


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
     /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }
     /**
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

  public abstract function run();

  protected function getCotroleur($module)
  {
    $nomControleur = '\Controleur\\'.$this->name.'\\'.ucfirst($module).'Controleur';
    if (!class_exists($nomControleur))
      throw new HTTPErrorException("Module non trouvé", 404);
    return new $nomControleur($this);
  }
}
