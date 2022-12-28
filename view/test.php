<?php
require_once '../controller/rooms.controller.php';
session_start();

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
      Reservation
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>
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
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Make your reservation!
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Start your vacation in Marrakech by making your reservation!
          </p>
          <a href="#form">
            <button class="mx-auto lg:mx-0  bg-white text-gray-800 font-bold rounded-full  py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              check-in
            </button>
          </a>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src=" ../img/Koutoubia-Marrakech-Atlas.png" />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
      
    </div>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      

      <div id="form" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        
        <form  method="post">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">Reservation Details</p>
              <p>Choose your reservation details</p>
            </div>
  
            <div class="lg:col-span-2">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <div class="text-black md:col-span-5">
                  <label for="full_name">room type</label>
                  <select onchange="roomtype(value)"  name="rtype" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                    <option value=""></option>
                    <option value="chambre(lit single)">chambre lit single</option>
                    <option value="chambre(lit double)">chambre lit double(max 2 persons)</option>
                    <option value="suite">suite (max 6 persons)</option>
                    
                  </select>
                </div> 
                

  
                
                <div id="number" class="text-black text-black md:col-span-5 hidden">
                  <label for="email">suite type</label>
                  <select name="stype" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50  ">
                    <option value=""></option>
                    <option value="Standard">Standard</option>
                    <option value="Junior">Junior</option>
                    <option value="Presidential suite">Presidential suite</option>
                    <option value="Penthouse suites">Penthouse suites</option>
                    <option value="Honeymoon suites">Honeymoon suites</option>
                    <option value="Bridal suites">Bridal suites</option>
                  </select>
                  
                </div>
                <div class="text-black text-black md:col-span-5">
                  <label for="email">check-in</label>
                  <input type="date" name="check-in" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                </div>
  
                <div class="text-black text-black md:col-span-5 text-black">
                  <label for="address">check-out</label>
                  <input type="date" name="check-out" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""  min="2022-12-29 "/>
                </div>
  
                
                <div class="text-black md:col-span-5 text-right underline hidden">
                  <div class="flex">
                    
                    
                    <a id="aa">reserve for your company too <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg></span></a>
                  </div>
                </div>
  
                
        
                <div class="text-black md:col-span-5 text-right">
                  <div class="inline-flex items-end">
                    <button  name="search" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Search</button>
                  </div>
                </div>
  
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    
  </div>
</div>
<section>
  
  <div >
    <div class="bg-gray-100">
  <div class="p-3 px-6 min-h-48 flex flex-wrap justify-around items-center" >
  <?php
    if (isset($_POST['search'])) {
      $check_in=$_POST['check-in'];
      $check_out=$_POST['check-out'];
    $a = new ADD_room();
    $Arooms=$a->getavailable();
    // header('location:Dashboard.php');
    foreach ($Arooms as $room) { 

      ?>
    <custom-card3>
      
     
      <div class="rounded-md shadow-md sm:w-96 bg-coolGray-900 text-coolGray-100">
       
        <div class="container">
          <div class="row">
              <div class="col-12 ">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          
                      </div>
                      <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="3000">
                              <img src=" ../img/<?php echo $room['pic1'] ?>" class="d-block w-full h-72" alt="pestana Image">
                          </div>
                          <div class="carousel-item" data-bs-interval="3000">
                              <img src="../img/<?php echo $room['pic2'] ?>" class="d-block w-full h-72" alt="pestana Image">
                          </div>
                         
                          <div class="carousel-item" data-bs-interval="3000">
                              <img src=" ../img/<?php echo $room['pic3'] ?>" class="d-block w-full h-72" alt="pestana Image">
                          </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
          </div>
      </div>
        <div class="p-3" style="cursor: auto;">
          <h2 class="text-black font-bold"><?php echo $room['descr'] ?></h2>
          <p class="text-black"><?php echo $room['price'] ?>$ </p>
          <a href="reservationinfo.php?type=<?php echo $room['type'] ?>&check-in=<?php echo $check_in ?>&check-out=<?php echo $check_out ?>&id=<?php echo $room['id'] ?>"><button class="bg-black px-2 rounded">reserver</button></a>
          
          
        </div>
      </div>
     
    </custom-card3>
    <?php
    }
    
}
?>
    
    
    
    
   
    
    
  </div>
  </div>
  </div>
</section>

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
