<?php
namespace Lib;
use PDO;
/**
 *
 */
class PDOFactory
{
  protected static $pdo = null;
  /**
   * @return PDO
   */
  public static function getPdo()
  {
    if (self::$pdo === null) {
      self::$pdo = new PDO('mysql:host=localhost;dbname=catalogue', 'root','', [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    return self::$pdo;
  }
}
