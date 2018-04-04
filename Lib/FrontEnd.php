<?php
namespace Lib;

/**
 *
 */
class FrontEnd extends Application
{

  public function __construct()
  {
    $this->layout = 'layout.html.php';
    $this->name = 'FrontEnd';
  }
  public function run()
{
  $module = (isset($_GET['module'])) ? $_GET['module'] : 'blog';
  $action = (isset($_GET['action'])) ? $_GET['action'] : 'listing';

  try {
    $controleur = $this->getCotroleur($module);
    $controleur->Action($action);
  } catch (HTTPErrorException $e) {
    var_dump($e);
  }
}


}
