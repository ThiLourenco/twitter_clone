<?php

namespace app;

class Connection {

    public static function getDb() {
        try {
            
            $conn = new \PDO(
                'mysql:host=localhost;dbname=twitter_clone;charset=utf8',
                'root',
                'senha'
            );

            return $conn;                        

        } catch (\PDOException $e) {
            echo 'Erro: '. getMenssege();
           
        }
    }
}

?>