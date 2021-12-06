function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
          if (this.status == 200) {
            elmnt.innerHTML = this.responseText;
          }
          if (this.status == 404) {
            elmnt.innerHTML = "Page not found.";
          }
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      };
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
includeHTML();



	jQuery(document).ready(function() {

    var pick=false;
    $("#searchButton").click(function(e){
      pick=!pick;
      console.log(pick)
      if(pick==true){
        $("#searchbar").addClass("Search-container");
        $("#searchbar").removeClass("hid")
          }
          else{
          $("#searchbar").removeClass("Search-container")
          $("#searchbar").addClass("hid");
          }
    })

    $("#closeSearch").click(function(e){
      pick=false;
      $("#searchbar").removeClass("Search-container")
          $("#searchbar").addClass("hid");

    })

    window.setTimeout(function(){
      $("#about").removeClass("activenav")
      $("#admission").removeClass("activenav")
      $("#learning").removeClass("activenav")
      $("#student").removeClass("activenav")
      $("#protection").removeClass("activenav")
      $("#gallery").removeClass("activenav")
      $("#news").removeClass("activenav")

      if($("#tag").val() =="about")
      {
        $("#about").addClass("activenav")

      }
      if($("#tag").val() =="admission")
      {
        $("#admission").addClass("activenav")
      }
      if( $("#tag").val()=="learning")
      {
        $("#learning").addClass("activenav")
      }

      if($("#tag").val() =="student")
      {
        $("#student").addClass("activenav")
      }


      if($("#tag").val() =="children")
      {
        $("#children").addClass("activenav")
      }


      if($("#tag").val() =="gallery")
      {
        $("#gallery").addClass("activenav")
      }


      if($("#tag").val() =="news")
      {
        $("#news").addClass("activenav")
      }



   },200);

  });





























  //for mobile nav


  function openNav() {
    document.getElementById("mySidenav").style.width = "80%";


  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";

  
  }
//mobilenav

 /* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
 function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



function myFunction2() {
  document.getElementById("myDropdown222").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}




function myFunction3() {
  document.getElementById("myDropdown333").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}





