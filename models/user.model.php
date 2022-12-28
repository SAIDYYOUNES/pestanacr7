<?php
require_once '../database/db_connection.php';
class user {

static public function add_user($data){
    $db=Database::connect()->prepare('INSERT INTO users( `fullname`, `email`, `password`, `b-d`, `phone`)
                                    VALUES(:fullname , :email, :password ,:bd ,:phone)');
        $db->bindParam( ':fullname',$data['fullname']);
        $db->bindParam( ':email',$data['email']);
        $db->bindParam( ':password',$data['password']);
        $db->bindParam( ':b_d',$data['b_d']);
        $db->bindParam( ':phone',$data['phone']);

        
            $db->execute();
            header('location:login.php');
        
}

static public function get_user($email){
            
            
    $db=Database::connect()->prepare("SELECT * FROM users WHERE email = :email");
    $db->bindParam(':email',$email);
    $db->execute();
    return $db->fetch(PDO::FETCH_OBJ);



}
}