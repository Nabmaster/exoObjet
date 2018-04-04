<?php
namespace Lib;
/**
 *
 */
abstract class Controleur
{
/**
 *
 */
protected $app;

public function __construct($app)
{
  $this->app = $app;
}
public function Action($action)
{
  $methode = $action.'Action';
  if (!method_exists($this, $methode))
    throw new HTTPErrorException("Action non definie pour ce module", 404);
    $this->$methode();
}
protected abstract function listingAction();

protected  function Render($vue, $data = []){
  extract ($data);
  ob_start();
  include __DIR__ . '/../Vue/' . $vue;
  $contenu = ob_get_clean();
  include __DIR__ . '/../Vue/' . $this->app->getLayout();
}

}
