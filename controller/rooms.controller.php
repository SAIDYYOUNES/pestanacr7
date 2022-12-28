<?php

// use post as GlobalPost;

require_once '../models/rooms.model.php';
        class ADD_room{
        
        
        public function add_room(){
                $data = array(
                
                'rtype'=>$_POST['rtype'] . ' ' .$_POST['stype'],
                'descr'=>$_POST['descr'],
                'pic1'=>$_POST['pic1'],
                'pic2'=>$_POST['pic2'],
                'pic3'=>$_POST['pic3'],
                'price'=>$_POST['price'],
            );
            
            $result=room::addroom($data);
        }
        public function getrooms(){
            return room::getAllrooms();
            
        }
        public function getroom($id){
            
            
            
            $rooms = room::getOneroom($id);
            return $rooms;
            header('location:updateroom.php');
            
        }
        public function getavailable(){
            if(isset($_POST['stype'])){

            $available = array(
                
                'rtype'=>$_POST['rtype'] . ' ' .$_POST['stype'],
                
                

            );}else{
                $available = array(
                
                    'rtype'=>$_POST['rtype'],
                    
                    
    
                );

            }
            $Arooms =room::getAvailablerooms($available);
            return $Arooms;
        }
        
        public function delete_room(){
            $id = array(
                'id' => $_POST['id']
            );
            room::delete_room($id);
            
        }
        public function img_room( $data_update){
            $result=room::update_sans_img($data_update);
        }
        public function update_room( $data_update){
           
            $result=room::update_room($data_update);
        
        }
    }
    $data = new ADD_room();
$rooms = $data->getrooms();




if (isset($_POST['addroom'])) {
    $room = new ADD_room();
    $room->add_room();
    header('location:Dashboard.php');

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_room();
    $delete->delete_room();
    header('location:Dashboard.php');

}

if (isset($_POST['update_room'])) {
    if( $_POST['pic1']!=NULL AND $_POST['pic2']!=NULL AND $_POST['pic3']=!NULL){
        $data_update = array(
            'id'=>$_GET['id'],
            'rtype'=>$_POST['rtype'] . ' ' .$_POST['stype'],
            'descr'=>$_POST['descr'],
            'pic1'=>$_POST['pic1'],
            'pic2'=>$_POST['pic2'],
            'pic3'=>$_POST['pic3'],
            'price'=>$_POST['price'],
            'etat'=>$_POST['etat'],

        );
        $update = new ADD_room();
        $update->update_room( $data_update);
        header('location:Dashboard.php');
    }else{
        $data_update = array(
            'id'=>$_GET['id'],
            'rtype'=>$_POST['rtype'] . ' ' .$_POST['stype'],
            'descr'=>$_POST['descr'],
            
            'price'=>$_POST['price'],
            'etat'=>$_POST['etat'],

        );
        $update = new ADD_room();
        $update->img_room( $data_update);
        header('location:Dashboard.php');
       

    }
}

        
   
    



