<?php
session_start();
require_once '../models/admin.model.php';
    class login{
       
        public function login(){
            
        $email = $_POST['email'];
        $psw = $_POST['password'];
        
            $result=admin::get_admin($email);
            
            // foreach($result as $admin){
            
            if($result->email===$email && $result->password=== $psw){
                
                $_SESSION["login"] = true;
                
                $_SESSION['email']=$result->email; 
                header('location:Dashboard.php');
            
                    
            }else{
                
                echo '<script>alert("wrong password or email")</script>';
            }
        // }
        }
        
    
    
}
    if(isset($_POST['admin_login']) ){

        $admin= new login();
        $admin->login();
        
        
        
    }
    // $email = "younes";
    // $psw = $_POST['password'];
    // $admin= new login();
    // $admin->login($email,$psw);
    

    ?>