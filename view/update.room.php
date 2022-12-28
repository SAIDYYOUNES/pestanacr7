<?php
require_once '../controller/rooms.controller.php';
session_start();

if(!isset(($_SESSION['email']))){
  header('location:admin.login.php');
}

$id['id']=$_GET['id'];
$data = new ADD_room();
$room = $data->getroom($id);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="./css.css">
        <title>
        Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
        </title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <script src="https://cdn.tailwindcss.com"></script>    <!--Replace with your tailwind.css once created-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
        
    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
        <!--Nav-->
        <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
            
                CR7|PESTANA
            </a>
            </div>
            <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="toggleColour inline-block py-2 px-4  font-bold no-underline" href="index.html">Home</a>
                </li>
                
            </ul>
            <button
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            
                >
                <a href="Dashboard.php">dashboard</a>
            </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
    <!--Hero-->
    <div class="pt-24">
        <div class="bg-grey-lighter min-h-screen flex justify-center ">
            <div class="container pb-7 flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-9/12">
                    <form  method="POST">
                            <h1 class="mb-8 text-3xl text-center">Update room</h1>
                            <label for="">Room type:</label>
                            <?php foreach($room as $roo){?>
                                <h3 class="font-bold block border border-grey-light w-full p-3 rounded mb-4">previous selected type :<?php echo $roo['type'] ?></h3>

                                <select required onchange="suitetype(value)" name="rtype" id="" class="block border border-grey-light w-full p-3 rounded mb-4">
                            <option value=""></option>
                            <option value="chambre(lit single)">chambre(lit single)</option>
                            <option value="chambre(lit double)">chambre(lit double)</option>
                            <option value="suite">suite</option>
                        </select>
                        <div id="suitetype" class="hidden">
                            <label for="">suite type:</label>
                            <select name="stype"  class="block border border-grey-light w-full p-3 rounded mb-4">
                                <option value=""></option>
                                <option value="Standard">Standard</option>
                                <option value="Junior">Junior</option>
                                <option value="Presidential suite">Presidential suite</option>
                                <option value="Penthouse suites">Penthouse suites</option>
                                <option value="Honeymoon suites">Honeymoon suites</option>
                                <option value="Bridal suites">Bridal suites</option>
                            </select>
                        </div>
                        
                        
                            
<label for="">pic 1 :</label>
<div class="flex justify-between">
                        <input 
                            type="file"   
                            class="block border border-grey-light w-8/12 p-3 rounded mb-4"
                            name="pic1"

                            
                            />
                            <img class="w-3/12 h-3/12" src="../img/<?php echo $roo['pic1'] ?>" alt="">
                        </div>
                            <label for="">pic 2 :</label>
                            <div class="flex justify-between">
                        <input 
                            type="file"  
                            class="block border border-grey-light w-8/12 p-3 rounded mb-4"
                            name="pic2"
                            
                            />
                            <img class="w-3/12 h-3/12" src="../img/<?php echo $roo['pic2'] ?>" alt="">
                        </div>
                            <label for="">pic 3 :</label>
                        <div class="flex justify-between">
                        <input 
                            type="file"  
                            class="block border border-grey-light w-8/12 p-3 rounded mb-4"
                            name="pic3"
                            
                            />
                            <img class="w-3/12 h-3/12" src="../img/<?php echo $roo['pic3'] ?>" alt="">
                        </div>
                            <label for="">room services</label>
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="descr"
                            placeholder="les service inclus au offre"
                            value="<?php echo $roo['descr'] ?>"
                            />
                            <label for="">room price</label>
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="price"
                            value="<?php echo $roo['price'] ?>"
                            />
                            <label for="">room etat:</label>
                        
                            <h3 class="font-bold block border border-grey-light w-full p-3 rounded mb-4">previous selected type :<?php echo $roo['etat'] ?></h3>

                            <select name="etat" id=""  class="block border border-grey-light w-full p-3 rounded mb-4">
                                
                                <option value="non_reserver">non reserver</option>
                                <option value="hors-service">hors-service</option>
                            </select>
                            <?php 
                         }?>

                        <div class="flex justify-center">
                        <button
                            type="submit"
                            name="update_room"
                            class="w-7/12 text-center py-3 rounded bg-gray-800 text-white hover:bg-green-dark focus:outline-none my-1"
                        >update room</button>
                        </div>

                        

                    </form>
                    
                </div>

                
            </div>
        </div>
        
    </div>
        
    
        
        <script src="./js.js"></script>
    </body>
    </html>

