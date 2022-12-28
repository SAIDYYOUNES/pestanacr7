<?php


require_once '../models/reservation.model.php';
session_start();
        class ADD_reservation{
        
        
        public function add_reservation($data){
              
            $result=reservation::addreservation($data);
        }
        public function getreservations($id){
            return reservation::getAllreservations($id);
            
        }
        public function getreservation($id){
            
            
            
            $reservations = reservation::getOnereservation($id);
            return $reservations;
            header('location:updatereservation.php');
            
        }
       
        
        public function delete_reservation(){
            $id = array(
                'id' => $_POST['id']
            );
            reservation::delete_reservation($id);
            
        }
       
        public function update_reservation( $data_update){
           
            $result=reservation::update_reservation($data_update);
        
        }
    }
    $data = new ADD_reservation();
    $id = array(
        'id' => $_SESSION['id']
    );
$reservations = $data->getreservations($id);




if (isset($_POST['addreservation'])) {
    if(str_starts_with($_POST['type'], 'suite'))
    {
        $data = array(
                   
            'persons_number' =>$_POST['persons_number'],
            'persons_info' =>$_POST['persons_info'],   
            'type'=>$_POST['type'] ,
            'room_id'=>$_POST['room_id'],
            'check_in'=>$_POST['check_in'],
            'check_out'=>$_POST['check_out'],
            'user_id'=>$_SESSION['id'],
            
            
        );
        // print_r($data);
        
        $reservation = new ADD_reservation();
    $reservation->add_reservation($data);
    header('location:test.php');
}
if(str_starts_with($_POST['type'], 'chambre(lit single')){
        $data = array(
            'persons_number' =>"1",
            'persons_info' =>$_SESSION['fullname'],
            'type'=>$_POST['type'] ,
            'room_id'=>$_POST['room_id'],
            'check_in'=>$_POST['check_in'],
            'check_out'=>$_POST['check_out'],
            'user_id'=>$_SESSION['id'],
            
        );
        // print_r($data);
        
        $reservation = new ADD_reservation();
    $reservation->add_reservation($data);
    header('location:test.php');
}
if(str_starts_with($_POST['type'], 'chambre(lit double')){
        $data = array(
                   
            'persons_number' =>"2",
            'persons_info' =>$_SESSION['fullname']. ' ' .$_POST['p1'],   
            'type'=>$_POST['type'] ,
            'room_id'=>$_POST['room_id'],
            'check_in'=>$_POST['check_in'],
            'check_out'=>$_POST['check_out'],
            'user_id'=>$_SESSION['id'],);
            // print_r($data);

        $reservation = new ADD_reservation();
    $reservation->add_reservation($data);
    header('location:test.php');
}
    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_reservation();
    $delete->delete_reservation();
    header('location:mesreservation.php');

}

if (isset($_POST['update_reservation'])) {
    
        $update = new ADD_reservation();
        $update->update_reservation( $data_update);
        header('location:mesreservation.php');
   
}

        
   
    



