<?php
require_once '../controller/reservation.controller.php';


if(!isset(($_SESSION['id']))){
  header('location:login.php');
}
if(!isset(($_GET['type']))){
  header('location:test.php');
}
$user_id=$_SESSION['id'];
$room_id = $_GET['id'];
$type= $_GET['type'];
$check_in = $_GET['check-in'];
$check_out = $_GET['check-out'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css.css">
    <title>
      Reservation
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
   
    <script src="https://cdn.tailwindcss.com"></script>    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      
    </style>
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
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden  lg:mt-0  lg:bg-transparent text-black lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="toggleColour inline-block py-2 px-4  font-bold no-underline" href="index.html">Home</a>
              </li>
            <li class="mr-3">
              <a class="toggleColour inline-block  no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
            </li>
            <li class="mr-3">
              <a class="toggleColour inline-block  no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
            </li>
          </ul>
          
          <?php
if(!isset(($_SESSION['id']))){
 
?>
          <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"          >
          <a href="login.php">Log in</a>
          </button>
        <?php  }else{ ?>
            <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"          >
          <a href="../controller/logout.php">Log out</a>
          </button>
         <?php  } ?>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        
        <div class="container max-w-screen-lg mx-auto">
    <div>
      

      <div id="form"  class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6" style="min-height: 284px;">
        
        
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                <p class="font-medium text-lg">Reservation Details</p>
                <p>Choose your reservation details</p>
                </div>
    
                <div class="lg:col-span-2">
                <div >
                <form  method="post">
                    <?php 
                    if(str_starts_with($type, 'chambre(lit double')){?>
                        
        

                    <div  class="text-black text-black md:col-span-5">
                        <label >compan info : fullname and birthday</label>
                        <input type="text" name="p1" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="fullname /birthday :JJ/MM/YY" />
                    </div>
                    
                    <?php
                    
                    
                    } ?>
                    <?php 
                    if(str_starts_with($type, 'chambre(lit single')){?>
                        
        

                    <div  class="text-black text-black md:col-span-5">
                        <h2 class="font-bold">confirm you reservation</h2>
                    </div>
                    
                    <?php
                    
                    
                    } ?>

    
    <?php 
                    if(str_starts_with($type, 'suite')){
                        ?>
                    <div id="number" class="text-black text-black md:col-span-5 ">
                        
                        <label for="email">number of persons</label>
                        <select  id="n" name="persons_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" id="">
                            <option value="">max 6 person</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <div id="info" class="pt-2 rounded ">
                            <input class="h-20 border mt-1 rounded px-4 w-full bg-gray-50" name="persons_info" id="" cols="30" rows="10" placeholder="your company informations(fullname/birthday)"/>
                        </div>
                    </div>
                <?php  }?>
                
    
                    <input name="type" type="hidden" value="<?php echo $type ?>">
                    <input name="room_id" type="hidden" value="<?php echo $room_id ?>">
                    <input name="check_in" type="hidden" value="<?php echo $check_in ?>">
                    <input name="check_out" type="hidden" value="<?php echo $check_out ?>">
                    <div class="text-black md:col-span-5 text-right">
                    <div class="inline-flex items-end">
                        <button  name="addreservation" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">reserve</button>
                    </div>
                    
                    </div>
                    </form>
    
                </div>
                </div>
            </div>
        
      </div>
    </div>

    
  </div>
      
    </div>
    

<!-- company/////////////////////////////////////////////////////////////////////////////// -->

    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-gray-800 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              <!--Icon from: http://www.potlabicons.com/ -->
              
              CR7|PESTANA
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Privacy</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://github.com/tailwindtoolbox/Landing-Page" class="no-underline hover:underline text-gray-800  ">Landing(ys)</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800  ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script src="./js.js"></script>
  </body>
</html>

