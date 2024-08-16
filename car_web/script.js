var dropdowns = document.querySelectorAll(".dropdown");
   for (var i = 0; i < dropdowns.length; i++) {
       dropsdowns[i].addEventListener('click',function(e){
           e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");  
       }); 
   }