<?php
        require_once '../database/db_connection.php';
        class admin{
        
        static public function get_admin($email){
                
                
                        $db=Database::connect()->prepare("SELECT * FROM admin WHERE email = :email");
                $db->bindParam(':email',$email);
        $db->execute();
        return $db->fetch(PDO::FETCH_OBJ);

                

        }
        }


        