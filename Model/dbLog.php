<?php
class DB
{
    
     function connection()
     {
        try {
            $data = new PDO("mysql:host=localhost;dbname=MyMeetic;", "theo", "01091996");
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        
    }
}

?>
