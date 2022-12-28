<?php
require_once '../controller/reservation.controller.php';


if(!isset(($_SESSION['id']))){
  header('location:login.php');
}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css.css">
    <title>
      mes reservation
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
      

    <div class="px-3 py-4 flex justify-center">
        <table class="w-11/12 text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    
                    <th class="text-left text-black p-3 ">check-in</th>
                    <th class="text-left text-black p-3 ">chekc-out</th>
                    <th class="text-left text-black p-3 ">room-type</th>
                    <th class="text-left text-black p-3 ">persons number</th>
                    <th class="text-left text-black p-3 ">persons info</th>
                    
                    
                </tr>
                <?php if(count($reservations)===0){?>
                <tr>
                    <td>
                        <h2 class="text-black">aucun  reservation n'a encore faits</h2>
                    </td>

                </tr>
                <?php }else{
                foreach($reservations as $room){?>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 "><h3   class="text-black"><?php echo $room['check_in'] ?></h3>
                    <td class="p-3 "><h3   class="text-black"><?php echo $room['check_out'] ?></h3>
                    <td class="p-3 "><h3   class="text-black"><?php echo $room['room_type'] ?></h3>
                    <td class="p-3 "><h3   class="text-black"><?php echo $room['persons_number'] ?></h3>
                    <td class="p-3 "><h3   class="text-black"><?php echo $room['persons_info'] ?></h3>
                    
                    <form method="post">
                      <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                    <td class="p-3  flex justify-end"><a href="./update.resrvation.php?id=<?php echo $room['id'] ?>"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">update</button></a><button type="submit" name="delete" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>

                    </form>
                    </tr>
                    <?php }}?>
            </tbody>
        </table>
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

