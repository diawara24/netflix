<?php


// classe non instanciable mais seulement héritée
abstract class BDD
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=mvc;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if(self::$pdo === null)
            self::setBdd();
        
        return self::$pdo;
    }
}

?>