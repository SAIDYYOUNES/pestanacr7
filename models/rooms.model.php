<?php
    require_once '../database/db_connection.php';
  
class room{
    
    static public function addroom($data){
        $db=Database::connect()->prepare("INSERT INTO rooms( type , pic1 , pic2 ,pic3 , price , descr , etat  )
                                        VALUES( :rtype , :pic1 , :pic2 , :pic3  ,:price , :descr,'non_reserver')");
                    
    //    print_r($data);
    //    
        
        $db->bindParam(':rtype',$data['rtype']);
        $db->bindParam(':descr',$data['descr']);
        $db->bindParam(':pic1',$data['pic1']);
        $db->bindParam(':pic2',$data['pic2']);
        $db->bindParam(':pic3',$data['pic3']);
        $db->bindParam(':price',$data['price']);
        $db->execute();
}
    static public function getAllrooms(){
        $db=Database::connect()->prepare("SELECT * FROM rooms");
        $db->execute();
        $rooms=$db->fetchAll();
        $db=NULL;
        
        
        
        return $rooms;
    }
    static public function getOneroom($id){
        $db=Database::connect()->prepare("SELECT * FROM rooms WHERE id = :id");
        
        $db->bindParam(':id',$id['id']);
        $db->execute(); 
        $rooms=$db->fetchAll();
        $db=NULL;
        
        
        
        return $rooms;
    }
    static public function getAvailablerooms($available){
        $db=Database::connect()->prepare("SELECT * FROM rooms WHERE type = :rtype and etat ='non_reserver'");
        // SELECT * FROM `reservation` JOIN `rooms` ON reservation.room_id=rooms.id WHERE type = :rtype and etat ='non_reserver'or WHERE type = :rtype and etat ='reserver'and check_out> :new_check_in" ;
        
        $db->bindParam(':rtype',$available['rtype']);
        $db->execute(); 
        $Arooms=$db->fetchAll();
        $db=NULL;
        
        
        
        return $Arooms;
    }
    static public function update_room($data_update){
        $db=Database::connect()->prepare("UPDATE rooms SET type = :rtype , pic1 = :pic1 , pic2 = :pic2 , pic3 = :pic3 , price =:price , etat = :etat ,descr = :descr
                                            WHERE id = :id");

        $db->bindParam(':id',$data_update['id']);
        $db->bindParam(':rtype',$data_update['rtype']);
        $db->bindParam(':descr',$data_update['descr']);
        $db->bindParam(':pic1',$data_update['pic1']);
        $db->bindParam(':pic2',$data_update['pic2']);
        $db->bindParam(':pic3',$data_update['pic3']);
        $db->bindParam(':price',$data_update['price']);
        $db->bindParam(':etat',$data_update['etat']);
        

        $db->execute();
    }
    static public function update_sans_img($data_update){
        $db=Database::connect()->prepare("UPDATE rooms SET type = :rtype , price =:price , etat = :etat ,descr = :descr
                                            WHERE id = :id");

        $db->bindParam(':id',$data_update['id']);
        $db->bindParam(':rtype',$data_update['rtype']);
        $db->bindParam(':descr',$data_update['descr']);
        
        $db->bindParam(':price',$data_update['price']);
        $db->bindParam(':etat',$data_update['etat']);
        

        $db->execute();
        
    }

    static public function delete_room($data){
        $db=Database::connect()->prepare("DELETE FROM rooms WHERE id = :id ");
        $db->bindParam(':id',$data['id']);
        $db->execute();
    }
}

// $a =room ::getOneroom();

// print_r(room::getOneroom());