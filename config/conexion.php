<?php
    class conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g9_20","G9_20","uqyq1RfY");
                return $conectar;
            }catch(Exception $e){
                print "Error BD!: " . $e->getMessage() . "<br/r>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>