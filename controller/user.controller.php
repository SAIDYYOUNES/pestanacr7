<?php
session_start();
require_once '../models/user.model.php';
    class login{
        public function sign_up() {
        
                $data=array(
                    'fullname' => $_POST['fullname'],
                    'email'    => $_POST['email'],
                    'password' => $_POST['password'],
                    'b_d'    => $_POST['b-d'],
                    'phone'    => $_POST['phone']


                );
            
            $result=user::add_user($data);
        }

        public function login(){
            
            $email = $_POST['email'];
            $psw = $_POST['password'];
            
            
                $result=user::get_user($email);
                
                
                
                if($result->email===$email && $psw===$result->password){
                    
                    $_SESSION["login"] = true;
                    
                    $_SESSION['id']=$result->id; 
                    $_SESSION['fullname']=$result->fullname; 
                    header('location:index.php');
                
                        
                }else{
                    
                    echo '<script>alert("wrong password or email")</script>';
                }
            
            }
            
        
        
    }
        if(isset($_POST['login'])){
    
            $user= new login();
            $user->login();

            
            
            
        }
        if(isset($_POST['user_add'])){
            if($_POST['password']===$_POST['confirm_password']){
                $user= new login();
                $user->sign_up();
            }else{
                echo '<script>alert(" the 2 password dont match")</script>';

            }
            

        }

        
        
    
        ?>