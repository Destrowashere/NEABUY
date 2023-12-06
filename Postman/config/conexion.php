<?php
class Conectar{
    protected $dbh;
     // mysql:host=127.0.0.1:3307;dbname=neabuybonitoo","root", 
    protected function Conexion(){
        try {
            $conectar = $this->dbh = new PDO("mysql:host=;dbname=nearbuybonitoo","root","");
            return $conectar;
        } catch (Exception $e) {
            print "!Error BD¡: " . $e->getMessage() . "<br/>";
            die();
        }
      
    }
    public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
    }

   
}
?>
