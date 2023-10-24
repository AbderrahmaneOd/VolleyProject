<?php
class Connexion
{
    private $connexion;
    public function __construct()
    {
        $host = 'localhost';
        $port = 3307;
        $dbname = 'school1';
        $login = 'root';
        try {
            $this->connexion = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    function getConnexion()
    {
        return $this->connexion;
    }
}