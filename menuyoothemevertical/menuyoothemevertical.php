<?php

/**
 * Plugin Name: Menú vertical
 * Plugin URI: https://diseñowebensevilla.org
 * Description: Plugin para insertar menú
 * Version: 1.0
 * Author: José Luis íñigio Blasco
 * Author URI: https://diseñowebensevilla.org
 * Text Domain:  Menú vertical
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */

add_shortcode( 'menu_vertical', 'custom_menu_vertical');


function custom_menu_vertical(  ) {
?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="sidenav">
    <button class="dropdown-btn">Fontanería
        <i class="fa fa-caret-down"></i>
     </button>
         <div class="dropdown-container">
        <a href="#">PVC</a>
        <a href="#">Poibutileno</a>
        <a href="#">Multicapa</a>
        <a href="#">Polietileno</a>
        <a href="#">Cobre</a>
        <a href="#">Soldadura y adhesivos</a>
        <a href="#">Canalones</a>
        </div>
        
        
        
        <button class="dropdown-btn">Aire Acondicionado
        <i class="fa fa-caret-down"></i>
     </button>
         <div class="dropdown-container">
        <a href="#">Gama doméstica</a>
        <a href="#">Accesorios</a>
       
        </div>

        <a href="#">Bombas hidraulicas</a>
        <a href="#">Saneamiento</a>
        <a href="#">Sanitarios y grifería</a>
        <a href="#">Piscinas</a>
        <a href="#">Tratamiento del agua</a>
         
    
  
  <button class="dropdown-btn">Jardinería
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
       <button class="dropdown-btn">Riego
            <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-container">
            <a href="#">Riego enterrado</a>
            <a href="#">Riego por goteo</a>
            <a href="#">Riego de superficie</a>
            <a href="#">Riego Vertical</a>
        </div>
    
        <a href="#">Climatización</a>
  
  

    <button class="dropdown-btn">Jardín
            <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-container">
            <a href="#">Acondicionamiento del Jardín</a>
            <a href="#">Control de plagas</a>
            <a href="#">Siembra y cultivo</a>
        </div>
   
   
        <a href="#">Acuático</a>
        <a href="#">Varios</a>

   </div>
          
        <a href="#">Herramientas</a>
</div>

<style>
/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: relative;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 21px;
    text-decoration: none;
    font-size: 15px;
    color: black;
    display: block;
    border: none;
    background: white;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    line-height: 15px;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  border-bottom:1px solid black;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
	
	/*vin*/
	button.dropdown-btn:after{
		    background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23666%22%20stroke-width%3D%221.1%22%20points%3D%2210%201%204%207%2010%2013%22%20%2F%3E%0A%3C%2Fsvg%3E);
	}
	button.dropdown-btn.active:after{
	background-color: white;
    color: black;
    background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23666%22%20stroke-width%3D%221.1%22%20points%3D%221%204%207%2010%2013%204%22%20%2F%3E%0A%3C%2Fsvg%3E);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    float: right;
    padding-left: 10px !important;
	}
</style>

<script>
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>



<?php

}