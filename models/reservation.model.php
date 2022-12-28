<?php
    require_once '../database/db_connection.php';
    // session_start();
    class reservation{
        static public function addreservation($data){
            $db=Database::connect()->prepare("INSERT INTO reservation(  room_type , user_id , check_in ,check_out , room_id ,persons_number, persons_info  )
            VALUES( :rtype , :user_id , :check_in ,:check_out , :room_id ,:persons_number ,:persons_info )");
            $db->bindParam(':rtype',$data['type']);
            $db->bindParam(':check_in',$data['check_in']);
            $db->bindParam(':check_out',$data['check_out']);
            $db->bindParam(':user_id',$data['user_id']);
            $db->bindParam(':room_id',$data['room_id']);
            $db->bindParam(':persons_number',$data['persons_number']);
            $db->bindParam(':persons_info',$data['persons_info']);
            
            $db->execute();
            
                $db1=Database::connect()->prepare("UPDATE rooms SET  etat = 'reserver'
                                                    WHERE id = :room_id");
            $db1->bindParam(':room_id',$data['room_id']);
           
            $db1->execute();
            
        }
       
    static public function getAllreservations($id){
        $db=Database::connect()->prepare("SELECT * FROM reservation WHERE user_id = :id ");
        $db->bindParam(':id',$id['id']);
        $db->execute();
    //      if($db->rowCount()>0)
    //    { 
        $reservations=$db->fetchAll();
        $db=NULL;
        
        
        
        return $reservations;
        // echo(count($reservations));
    // }else{
    //         $reservations = array(
    //             'check_in'=>"aucun reservation",
    //                 'check_out'=>"aucun reservation",
    //                 'room_type'=>"aucun reservation",
    //                 'persons_number'=>"aucun reservation",
    //                 'persons_info'=>"aucun reservation",
    //         )  ;
    //         return $reservations; 
    //     }
     }
    static public function getOnereservation($id){
        $db=Database::connect()->prepare("SELECT * FROM reservation WHERE id = :id");
        
        $db->bindParam(':id',$id['id']);
        $db->execute(); 
        $reservation=$db->fetchAll();
        $db=NULL;
        
        
        
        return $reservation;
    }
    
    // static public function update_reservation($data_update){
    //     $db=Database::connect()->prepare("UPDATE reservation SET type = :rtype , pic1 = :pic1 , pic2 = :pic2 , pic3 = :pic3 , price =:price , etat = :etat ,descr = :descr
    //                                         WHERE id = :id");

    //     $db->bindParam(':id',$data_update['id']);
    //     $db->bindParam(':rtype',$data_update['rtype']);
    //     $db->bindParam(':descr',$data_update['descr']);
    //     $db->bindParam(':pic1',$data_update['pic1']);
    //     $db->bindParam(':pic2',$data_update['pic2']);
    //     $db->bindParam(':pic3',$data_update['pic3']);
    //     $db->bindParam(':price',$data_update['price']);
    //     $db->bindParam(':etat',$data_update['etat']);
        

    //     $db->execute();
    // }
    

    static public function delete_reservation($data){
        $db=Database::connect()->prepare("DELETE FROM reservation WHERE id = :id ");
        $db->bindParam(':id',$data['id']);
        $db->execute();
        
        $db1=Database::connect()->prepare("UPDATE rooms SET  etat = 'non_reserver'
        WHERE id = :room_id");
$db1->bindParam(':room_id',$data['room_id']);

$db1->execute();
    }
}
