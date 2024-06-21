<?php 

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo"); 
                return $conectar;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }

        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }

?>
