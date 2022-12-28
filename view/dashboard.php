
<?php
require_once '../controller/rooms.controller.php';


session_start();

if(!isset(($_SESSION['email']))){
  header('location:admin.login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="./css.css">
    <script src="https://cdn.tailwindcss.com"></script>    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #8a8989 0%, #3b3a3a 100%);
      }
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
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
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
          <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          
            >
            <a href="../controller/logout.php">Log out</a>
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-20">
        <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
       
        <a href="rooms.php">
          <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">add new room</button>
        </a>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-11/12 text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 ">id |</th>
                    <th class="text-left p-3 ">type</th>
                    <th class="text-left p-3 ">price</th>
                    <th class="text-left p-3 ">services</th>
                    <th class="text-left p-3 ">pic1</th>
                    <th class="text-left p-3 ">pic2</th>
                    <th class="text-left p-3 ">pic3</th>
                    <th class="text-left p-3 ">etat</th>
                    <th></th>
                </tr>
                <?php foreach($rooms as $room){?>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['id'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['type'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['price']."$" ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['descr'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['pic1'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['pic2'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['pic3'] ?></h3>
                    <td class="p-3 "><h3   class="bg-transparent"><?php echo $room['etat'] ?></h3>
                    
                    <form method="post">
                      <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                    <td class="p-3  flex justify-end"><a href="./update.room.php?id=<?php echo $room['id'] ?>"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">update</button></a><button type="button" name="delete" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>

                    </form>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>
        
    </div>
    
            <script src="./js.js"></script>
    </body>
    </html>


