"use strict";

window.onload= function(){
    var l_button = document.getElementById("lookup");
    var text_field = document.getElementById("country");
    var site = document.getElementById("result");
    var xhttp;

    l_button.addEventListener('click', function(e) {
        e.preventDefault();

         xhttp = new XMLHttpRequest();
        var search_value = text_field.value;
        xhttp.onreadystatechange = loadResponse;
        xhttp.open('GET',"http://localhost/info2180-lab5/world.php?query"+search_value+"" );
        xhttp.send();
  });


  function loadResponse() {
    if (xhttp.readyState === XMLHttpRequest.DONE) {
      if (xhttp.status === 200) {
        var response = xhttp.responseText;
        site.innerHTML = response;
      } else{
          alert("There is a problem with request.");
      }
    }
}  

















}