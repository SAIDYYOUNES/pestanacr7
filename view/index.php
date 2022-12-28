<?php

session_start();


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
    <link rel="stylesheet" href="./css.css">
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
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
          <a href="login.php">Log in</a>
          </button>
        <?php  }else{ ?>
            <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
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
          <a href="./test.php">
            <button class="mx-auto lg:mx-0  bg-white text-gray-800 font-bold rounded-full  py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              check-in
            </button>
          </a>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="../img/Koutoubia-Marrakech-Atlas.png" />
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
    <div class=" bg-white container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          MARRAKECH
        </h1>
        <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
          various adventures
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <img src="../img/Koutoubia-Marrakech-Atlas.png" alt="">
            <h2 class="text-black font-bold">snow</h2>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <img src="../img/marrakech-quad-desert.jpg" alt="">
            <p class="text-black font-bold">Desert</p>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <img src="../img/Menara_Gardens.jpg" alt="">
            <p class="text-black font-bold">Nature</p>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
      </div>
    <section class=" pt-0 p-6 bg-white text-black">
      <div class="container md">
          <div class="row">
              <div class="block-content__container">
                  <div class=" px-8 block-content__detail">
                      <article>
                          <h2 class="font-bold text-3xl py-6">Un r&#234;ve pr&#234;t &#224; devenir r&#233;alit&#233; - #UnlockYourDreams</h2>
                          <div class="px-8">Le 
  <strong>Pestana CR7 Marrakech</strong> est un 
  <strong>nouvel hôtel à Marrakech</strong>, au Maroc. Situé sur la M&#160;Avenue, c’est une 
  <strong>oasis d’élégance</strong> dans l’atmosphère exotique de l’une des villes les plus emblématiques d’Afrique, aux portes du désert. 
  <br> <br> Situé à proximité du 
  <strong>centre historique de la ville</strong>, le nouveau 
  <strong>Pestana CR7 Marrakech</strong> vous offre un niveau de 
  <strong>confort exceptionnel</strong> et une <strong>atmosphère inspirée des traditions marocaines</strong>, avec de 
  <strong>vastes espaces</strong> 
  <strong>lumineux</strong> et 
  <strong>romantiques</strong>, parfaits pour un séjour de luxe. 
  <br> <br> Ses 
  <strong>174&#160;chambres et suites</strong> sont très 
  <strong>spacieuses</strong> et équipées de tout ce dont vous avez besoin pour un 
  <strong>séjour inoubliable</strong> – y compris un décor unique baigné de lumière naturelle et un téléviseur HD de 49&#160;pouces. 
  <br>
  <br>Dans les 
  <strong>restaurants du Pestana CR7 Marrakech</strong>, le choix est très varié&#160;! Vivez une expérience gastronomique aux saveurs portugaises avec une petite touche marocaine en dégustant les délicieuses 
  <strong>tapas</strong> et 
  <strong>boissons</strong> proposées au bar du rez-de-chaussée ou les plats méditerranéens servis sur le 
  <strong>Rooftop</strong>. Le 
  <strong>Rooftop</strong> est également l’espace idéal pour se détendre en plein air, dans la 
  <strong>piscine extérieure</strong> ou au 
  <strong>bar</strong>, qui offrent tous deux une incroyable 
  <strong>vue panoramique</strong> sur les montagnes de l’Atlas - le décor parfait pour cette photo épique que vous voudrez partager sur vos réseaux sociaux. En fin de journée, rien de tel que de regarder les 
  <strong>grands événements sportifs</strong> en direct dans l’incroyable 
  <strong>Sports Bar</strong>. 
  <br>
  <br>Nous savons qu’une journée bien remplie de shopping dans le souk ou une promenade en chameau dans le désert appelle un moment de détente. C’est pourquoi nous vous promettons de prendre soin de vous au 
  <strong>Spa du Pestana CR7</strong>, avec des soins de beauté et de bien-être exceptionnels.  
  <br>
  <br> Si vous venez pour le travail, nous tenons à votre disposition un espace dédié aux activités professionnelles ou personnelles avec 5&#160;
  <strong>salles de réunion</strong> équipées d’installations audiovisuelles, pour une réelle garantie de faire de chaque événement un succès. </div>
                          <meta itemprop="description" content="Le Pestana CR7 Marrakech est un nouvel h&#244;tel &#224; Marrakech, au Maroc. Situ&#233; sur la M&#160;Avenue, c’est une oasis d’&#233;l&#233;gance dans l’atmosph&#232;re exotique de l’une des villes les plus embl&#233;matiques d’Afrique, aux portes du d&#233;sert.  Situ&#233; &#224; proximit&#233; du centre historique de la ville, le nouveau Pestana CR7 Marrakech vous offre un niveau de confort exceptionnel et une atmosph&#232;re inspir&#233;e des traditions marocaines, avec de vastes espaces lumineux et romantiques, parfaits pour un s&#233;jour de luxe.  Ses 174&#160;chambres et suites sont tr&#232;s spacieuses et &#233;quip&#233;es de tout ce dont vous avez besoin pour un s&#233;jour inoubliable – y compris un d&#233;cor unique baign&#233; de lumi&#232;re naturelle et un t&#233;l&#233;viseur HD de 49&#160;pouces. Dans les restaurants du Pestana CR7 Marrakech, le choix est tr&#232;s vari&#233;&#160;! Vivez une exp&#233;rience gastronomique aux saveurs portugaises avec une petite touche marocaine en d&#233;gustant les d&#233;licieuses tapas et boissons propos&#233;es au bar du rez-de-chauss&#233;e ou les plats m&#233;diterran&#233;ens servis sur le Rooftop. Le Rooftop est &#233;galement l’espace id&#233;al pour se d&#233;tendre en plein air, dans la piscine ext&#233;rieure ou au bar, qui offrent tous deux une incroyable vue panoramique sur les montagnes de l’Atlas - le d&#233;cor parfait pour cette photo &#233;pique que vous voudrez partager sur vos r&#233;seaux sociaux. En fin de journ&#233;e, rien de tel que de regarder les grands &#233;v&#233;nements sportifs en direct dans l’incroyable Sports Bar. Nous savons qu’une journ&#233;e bien remplie de shopping dans le souk ou une promenade en chameau dans le d&#233;sert appelle un moment de d&#233;tente. C’est pourquoi nous vous promettons de prendre soin de vous au Spa du Pestana CR7, avec des soins de beaut&#233; et de bien-&#234;tre exceptionnels.  Si vous venez pour le travail, nous tenons &#224; votre disposition un espace d&#233;di&#233; aux activit&#233;s professionnelles ou personnelles avec 5&#160;salles de r&#233;union &#233;quip&#233;es d’installations audiovisuelles, pour une r&#233;elle garantie de faire de chaque &#233;v&#233;nement un succ&#232;s. " />
                          <a href="#" class="btn-link" target="_blank" data-target="#full-description"
                             data-action="openSubModal">
                              En savoir plus
                          </a>
                      </article>

                          <div class="flex justify-between">
                            <div >
                              <article class="pt-6">
                                <h2 class="font-bold">
                                    RAISONS DE CHOISIR
                                </h2>
                                <ul class="">
                                        <li><span>Situ&#233; dans un quartier privil&#233;gi&#233; de la ville, &#224; proximit&#233; du centre</span></li>
                                        <li><span>Sports Lounge &amp; Bar</span></li>
                                        <li><span>Brasserie et restaurant m&#233;diterran&#233;en</span></li>
                                        <li><span>Piscine ext&#233;rieure</span></li>
                                </ul>
                            </article>
                                                <article class="py-6">
                                <h2 class=" font-bold">
                                    PRINCIPALES COMMODIT&#201;S
                                </h2>
    
                                <ul class="flex flex-col">
                                        <li class=" flex block-content__services--item">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                                            </svg>
                                            <span>Wifi gratuit  </span>
                                        </li>
                                        <li class="flex block-content__services--item">
                                            <img src="../img/swimming-icon.svg" alt="" width="30px" height="30px">
                                            <span>Piscine</span>
                                        </li>
                                        <li class=" flex justify-arround block-content__services--item">
                                          <img src="../img/parking-icon.svg" alt="" width="30px" height="30px">
                                            <span>Parking</span>
                                        </li>
                                        <li class="flex block-content__services--item">
                                          <img src="../img/gym-dumbbell-icon.svg" alt="" width="30px" height="30px">
                                          
                                            <p>Centre de remise en forme</p>
                                        </li>
                                </ul>
                                      </article>
                            </div>
                            <div>
                              <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.4110863519895!2d-8.01919658593989!3d31.62259304925354!2m3!1f0!2f0!3f0!3m2!1i1024
                                !2i768!4f13.1!3m3!1m2!1s0xdafef31661f884f%3A0xd7ac5c7a5c685df5!2sPestana%20CR7%20Marrakech!5e0!3m2!1sfr!2sma
                                !4v1672070467053!5m2!1sfr!2sma"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                          </div>
                  </div>
  
                  
                  
  
                  <div class="block-content__detail">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="promotions-information bg-white text-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promotions-information__container">
                    <header class="promotions-information__header">
                        <h3 class="font-bold text-2xl">
                            Lieux &#224; Visiter
                        </h3>
                    </header>
                    <div class="promotions-information__article-scroll">
                        <div id="visiter" >
                                    <article class="promotions-item visible" data-brand="Pestana CR7 Lifestyle Hotels">
                                        
                                            <div class="promotions-item__header">
                                                    <figure>
                                                        <img src="https://pesweb.azureedge.net/spimg/eventguidephotos/pestana-cr7-marrakesh-dar-el-bacha.jpg?scale=downscaleonly&amp;encoder=freeimage&amp;progressive=true&amp;quality=70&amp;w=400&amp;h=200&amp;mode=crop" draggable="false" alt="" width="400" height="200">
                                                        <!-- Show only when expired -->
                                                        <div class="promotions-item__header--expired"
                                                             data-text-expired="O tempo para esta promoção expirou"></div>
                                                    </figure>

                                                <!-- Info labels -->
                                                <div class="promotions-item__labels">
                                                                                                                    </div>
                                            </div>
                                            <div class="promotions-item__content">
                                                <h3>Dar el Bacha</h3>
                                                <h4>Marrakech</h4>
                                                <div class="promotions-description-truncated">
                                                    <p>Construite en 1910, la « Maison du Pacha », surnom du palais Dar el Bacha, était la résidence de Thami El Glaoui, qui reçut le titre de Pacha de Marrakech. Un excellent exemple d’architecture marocaine, avec sa cour centrale dotée de fontaines et d’orangers, ses espaces de repos traditionnels et son hammam. Outre ses éléments typiques bien conservés, le palais témoigne également des influences de l’architecture européenne, ayant été l’un des premiers de Marrakech à présenter une décoration ostentatoire à l’extérieur.</p>
                                                </div>
                                            </div>
                                        
                                    </article>
                                    <article class="promotions-item visible" data-brand="Pestana CR7 Lifestyle Hotels">
                                        
                                            <div class="promotions-item__header">
                                                    <figure>
                                                        <img src="https://pesweb.azureedge.net/spimg/eventguidephotos/pestana-cr7-marrakesh-jardin-majorelle.jpg?scale=downscaleonly&amp;encoder=freeimage&amp;progressive=true&amp;quality=70&amp;w=400&amp;h=200&amp;mode=crop" draggable="false" alt="" width="400" height="200">
                                                        <!-- Show only when expired -->
                                                        <div class="promotions-item__header--expired"
                                                             data-text-expired="O tempo para esta promoção expirou"></div>
                                                    </figure>

                                                <!-- Info labels -->
                                                <div class="promotions-item__labels">
                                                                                                                    </div>
                                            </div>
                                            <div class="promotions-item__content">
                                                <h3>Jardin Majorelle</h3>
                                                <h4>Marrakech</h4>
                                                <div class="promotions-description-truncated">
                                                    <p>Considéré comme l’un des plus enchanteurs et mystérieux du Maroc, le Jardin botanique Majorelle de Marrakech, d’inspiration islamique, est l’œuvre de l’artiste Jacques Majorelle, qui a travaillé à sa conception pendant près de 40 ans. La propriété était la résidence de l’artiste et de son épouse. Dans les années 1980, les stylistes Yves Saint-Laurent et Pierre Bergé ont procédé à sa restauration, créant dans cet espace les Musées Berbère et Yves Saint Laurent, et, dans l’ancien atelier de Majorelle, le Musée d’Art Islamique de Marrakech.</p>
                                                </div>
                                            </div>
                                        
                                    </article>
                                    <article class="promotions-item visible" data-brand="Pestana CR7 Lifestyle Hotels">
                                        
                                            <div class="promotions-item__header">
                                                    <figure>
                                                        <img src="https://pesweb.azureedge.net/spimg/eventguidephotos/pestana-cr7-marrakesh-menara-gardens.jpg?scale=downscaleonly&amp;encoder=freeimage&amp;progressive=true&amp;quality=70&amp;w=400&amp;h=200&amp;mode=crop" draggable="false" alt="" width="400" height="200">
                                                        <!-- Show only when expired -->
                                                        <div class="promotions-item__header--expired"
                                                             data-text-expired="O tempo para esta promoção expirou"></div>
                                                    </figure>

                                                <!-- Info labels -->
                                                <div class="promotions-item__labels">
                                                                                                                    </div>
                                            </div>
                                            <div class="promotions-item__content">
                                                <h3>Menara Gardens – La M&#233;nara</h3>
                                                <h4>Marrakech</h4>
                                                <div class="promotions-description-truncated">
                                                    <p>Le jardin de la Ménara est le lieu parfait pour échapper à l’agitation de la ville. Il est possible d’y trouver un peu de calme, parmi les oliviers ou au bord de l’immense lac qui, dans la zone centrale du jardin, sert de réservoir d’eau. Idéal pour se promener ou se détendre au bord du lac, en contemplant l’horizon ou un coucher de soleil exceptionnel, le jardin est une attraction tant pour les marocains que pour les touristes à la recherche de moments de paix et de repos, loin de l’agitation vibrante du centre.</p>
                                                </div>
                                            </div>
                                        
                                    </article>
                        </div>
                    </div>
                       
                </div>
            </div>
        </div>
    </div>
</section>
  
  
  
  
  
    
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
