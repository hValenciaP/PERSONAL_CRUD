<?php

    class Conectar{
        protected $dbh;
        
            protected function Conexion(){
                try {
                    //code...
                    $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud","root","");
                    return $conectar;
                } catch (Exception $e) {
                    //throw $th;
                    print "¡ERROR AL CONECTAR DB! " .$e->getMessage(). "<br>";
                }
            }
            public function set_names(){
                return $this->dbh->query("SET NAMES 'UTF8'");
            }
    }

?>