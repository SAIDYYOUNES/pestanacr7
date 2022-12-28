
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-400");
        }
      });
    
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
      HTMLDataListElement
      //afficher le formulaire de reservation pour company//
    // var others = document.getElementById("others");
    
    // let button = document.getElementById("aa");
    // button.addEventListener("click", () => {
    //     others.classList.toggle('hidden');
    // });
    //suite options 1
    var N = document.getElementById("number");
    var p1 =document.getElementById("p1");
    // console.log(N);
    
    function roomtype(value){
      if(value=="suite"){
        N.classList.remove('hidden');
        p1.classList.add('hidden');
      }else if(value=="chambre(lit double)"){
        N.classList.add('hidden');
        p1.classList.remove('hidden');
      }else{
        N.classList.add('hidden');
        p1.classList.add('hidden');
        }
      }
      
      function info(){
        var p = document.getElementById("n").value;
      var i = document.getElementById("info");
      if(p!=""){
        i.classList.remove('hidden');
        

      }else{
        i.classList.add('hidden');
      }}
      //suite options 2/////////////////
    //   var N1 = document.getElementById("number1");
    
    // function roomtype1(value){
    //   if(value=="suite"){
    //     N1.classList.remove('hidden');
    //   }else{
    //     N1.classList.add('hidden');

    //   }  

    //   }
    var a = document.getElementById("suitetype");
    
     function suitetype(value){
      if(value=="suite"){
        a.classList.remove('hidden');
        
      
      }else{
        a.classList.add('hidden');
        
        }
      }



    

   