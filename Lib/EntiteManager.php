<?php
namespace Lib;
/**
 *
 */
abstract class EntiteManager
{
  /**
   * @var \PDO
   */
  protected $pdo;

  function __construct()
  {
    $this->pdo = PDOFactory::getPdo();
  }
}
