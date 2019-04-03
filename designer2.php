<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>BEAUTIFUL RESPONSIVE WEB SITES</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">BUILT WITH W3.CSS</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Responsive</h3><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Built-in responsiveness</p>
  <p>Mobile first fluid grid</p>
  <p>Fits any screen sizes</p>
  <p>PC Tablet and Mobile</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Standard CSS</h3><br>
  <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Standard CSS only</p>
  <p>Easy to learn</p>
  <p>No need for jQuery</p>
  <p>No JavaScript library</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Design</h3><br>
  <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Paper like design</p>
  <p>Bold colors and shadows</p>
  <p>Equal across platforms</p>
  <p>Equal across devices</p>
  </div>
</div>
</div>

<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Color Classes</h2>
</div>

<div class="w3-row">
  <div class="w3-col w3-container m2 w3-red"><p>Red</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>Blue</p></div>
  <div class="w3-col w3-container m2 w3-blue-grey"><p>Blue Grey</p></div>
  <div class="w3-col w3-container m2 w3-teal"><p>Teal</p></div>
  <div class="w3-col w3-container m2 w3-yellow"><p>Yellow</p></div>
  <div class="w3-col w3-container m2 w3-orange"><p>Orange</p></div>
</div>

<hr>
<div class="w3-center">
  <h2>Built-In Responsiveness</h2>
  <p class="w3-large">Resize the page to see the effect!</p>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-blue w3-border">
    <h5>w3-half</h5>  
    <p>The w3-half class uses half (50%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-half w3-container">
    <h5>w3-half</h5>  
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-third w3-container w3-green">
    <h5>w3-third</h5>  
    <p>The w3-third class uses one third (33.33%) of the screen widow.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>  
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>  
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-quarter w3-container w3-red">
    <h5>w3-quarter</h5>  
    <p>The w3-quarter class uses one quarter (25%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
</div> 
     
<div class="w3-center">
  <h2>Containers</h2>
  <p>Use containers to create headers, sections and footers.</p>
</div>   

<header class="w3-container w3-blue-grey">
  <h2>Header</h2>
</header>

<div class="w3-padding w3-white w3-display-container">
  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright"><i class="fa fa-remove"></i></span>
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom,
  with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia,
  its history going back to its founding by the Romans, who named it Londinium.</p>
  <p>By the way, you can add a close icon to all containers if you want the ability to hide them. Look to your right!</p>
</div>

<footer class="w3-container w3-blue-grey">
  <h5>Footer</h5>
  <p class="w3-opacity">Footer information goes here</p>
</footer>

<hr>
<div class="w3-center">
  <h2>Color Themes</h2>
  <p>The color themes have been designed to work harmoniously with each other.</p>
</div>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-indigo">
    <h3>Theme Indigo</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-indigo">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-indigo w3-large"><span class="w3-right">Next</span></div>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-theme">
    <h3>Theme</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-theme">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-theme w3-large"><span class="w3-right">Next</span></div>
</div>
</div>
</div>

<div class="w3-container w3-center">
  <hr>
  <h3>Paper-like Cards with Shadows</h3>
</div>

<div class="w3-row-padding"> 

<div class="w3-third">
<div class="w3-card">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-4</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-4</p>
  </div>
</div>
</div>
</div>

<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>Tables</h2>
    <p w3-class="w3-large">Don't worry. W3.CSS takes care of your tables.</p>
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>First Name</th>
  <th>Last Name</th>
  <th>Points</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
</tr>
<tr class="w3-white">
  <td>Eve</td>
  <td>Jackson</td>
  <td>94</td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 class="w3-center">Forms and Lists</h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4">
  <h2>Input Form</h2>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Name</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Email</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Subject</label>
  </div>

  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label>Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label>Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label>Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label>Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label>Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label> Don't know (Disabled)</label>
  </div>
  </div>
</form>
</div>
<div class="w3-half">
<div class="w3-card-4 w3-container">
<h2>Lists</h2>
<ul class="w3-ul w3-margin-bottom">
  <li>Jill</li>
  <li>Eve</li>
  <li>Adam</li>
</ul>
<br>
<ul class="w3-ul w3-border w3-hoverable">
  <li class="w3-theme">Jill</li>
  <li>Eve</li>
  <li>Adam</li>
  <li>Steve</li>
</ul>
<br>
</div>
</div>
</div>
<hr>

<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">

<div class="w3-light-gray">
  <div id="myBar" class="w3-center w3-padding w3-theme" style="width:5%">5%</div>
</div><br>
<button class="w3-btn w3-theme" onclick="move()">Click Me</button> 
</div>
<hr>

<h2 class="w3-center">Slideshows</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="/w3images/snow.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/lights.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/mountains.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/forest.jpg" style="width:100%">

<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>

<div class="w3-container">
<hr>
<h2 class="w3-center">Navigation</h2>

<div class="w3-bar w3-theme">
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Link 1</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      Dropdown <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 2</a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>
  
<hr>
<h2 class="w3-center">Accordions</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 2</button>
<div id="Demo2" class="w3-hide">
  <a href="#" class="w3-button w3-block w3-left-align">Link 1</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 2</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 3</button>
<div id="Demo3" class="w3-hide w3-black">
  <div class="w3-container">
    <p>Accordion with Images:</p>
    <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
    <p>French Alps</p>
  </div>
</div>

<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>

<hr>
<h2 class="w3-center">Buttons</h2>
<div class="w3-center">
  <br>
  <a class="w3-button w3-theme">Button</a>
  <a class="w3-button w3-theme">Button</a>
  <a class="w3-button w3-theme-d3 w3-disabled">Button</a>
  <br><br>
  <a class="w3-button w3-circle w3-large w3-black"><i class="fa fa-plus"></i></a>
  <a class="w3-button w3-circle w3-large w3-theme"><i class="fa fa-plus"></i></a>  
  <a class="w3-button w3-circle w3-large w3-card-4"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-theme">Dropdown <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>

</div>

<hr>
<div class="w3-center">
  <h2>Pagination</h2>
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">«</a>
      <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">5</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">»</a>
    </div>
  </div>
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
<?php
session_start();
 $now = time();	
	if(!isset($_SESSION['logger_id']) || $now > $_SESSION['expire'])
		{
			header("location:login.php");
			exit;
		} 
		define('ACCESS_SUBFILES',true);

include("includes/DbConfig.php");

include("includes/classes/general.php");
if(isset($_POST['submit'])){
	$data=$_POST;
	if($data['status']=='Individual' && !strlen(trim($data['authorised_signatory_pan']))) $msg['pan']=" *Enter PAN ";
	//if($data['status']=='Individual' && !strlen(trim($data['father_name']))) $msg['father_name']=" *Enter Father Name";
	if($data['status']=='Individual' && !strlen(trim($data['gender']))) $msg['gender']=" *Select Gender";
	if(!preg_match('/^[0-9]{12}$/D',$data['aadhar_num'])) $msg['aadhar_num']=" *Enter Valid Aadhar Number";
//	if(!strlen(trim($data['father_name']))) $msg['father_name']=" *Enter Father Name";
 	if(!strlen(trim($data['income_nature']))) $msg['income_nature']=" *Enter Income Nature";
	
	//if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$data['email']))$msg['valid_email']=" *Enter Valid Email";
	
	/*foreach($data['username'] as $key=>$val){
	   if($data['username'][$key]<>'' && $data['password'][$key]<>'' && $data['log_phone'][$key]<>''){
	   $select = " Select * from company where username='".dbvalueprepare($data['username'][$key])."' password='".dbvalueprepare($data['password'][$key])."' ";
	   
	   fetchNum
	    $update2="Insert into company_login set company='".dbvalueprepare($clast_insert_id)."',
																	username='".dbvalueprepare($data['username'][$key])."',
																	phone='".dbvalueprepare($data['log_phone'][$key])."',
																	invoice_notification='".dbvalueprepare($data['invoice_notification'][$key])."',
																	task_notification='".dbvalueprepare($data['task_notification'][$key])."',
																	ticket_notification='".dbvalueprepare($data['ticket_notification'][$key])."',
																	password='".dbvalueprepare($data['password'][$key])."' ";
	   }
	} */
	
	
 
 	if(count($msg)==0){
			$filing_associate=implode(",",$data['filing_associate']);
			$company_sub_filing=implode(",",$data['sub_id']);
			$company_main_filing=implode(",",$data['main_id']);
			$insert_query_field="Insert Into company set company_name='".dbvalueprepare($data['company_name'])."', 
														incoropration='".dbvalueprepare($data['incoropration'])."',
														father_name='".dbvalueprepare($data['father_name'])."',
														aadhar_num='".dbvalueprepare($data['aadhar_num'])."',
														authorised_signatory_pan='".dbvalueprepare($data['authorised_signatory_pan'])."',
														income_nature='".dbvalueprepare($data['income_nature'])."',
														status='".dbvalueprepare($data['status'])."',
														address='".dbvalueprepare($data['address'])."',
														pin_code='".dbvalueprepare($data['pin_code'])."',
														resident='".dbvalueprepare($data['resident'])."',
														gender='".dbvalueprepare($data['gender'])."',
														ar_designation='".dbvalueprepare($data['ar_designation'])."',
														ar_dob='".dbvalueprepare($data['ar_dob'])."',
														ar_name='".dbvalueprepare($data['ar_name'])."',
														reg_no='".dbvalueprepare($data['reg_no'])."',
														gst='".dbvalueprepare($data['gst'])."',
														client_code='".dbvalueprepare($data['client_code'])."',
														filing_associate='".dbvalueprepare($filing_associate)."',
														company_main_filing='".dbvalueprepare($company_main_filing)."',
														company_sub_filing='".dbvalueprepare($company_sub_filing)."'";
												$result=$obj_db->get_qresult($insert_query_field);
				if(!$clast_insert_id) $clast_insert_id = $obj_db->insert_id();
				
			if($clast_insert_id ){	
			
					if($data['payment_type']=='' && $data['start_date']=='' && $data['start_month']=='' && $data['amount']==''){
						}
						else {
							 $update1="Insert into company_payment set company='".dbvalueprepare($clast_insert_id)."',
																	payment_type='".dbvalueprepare($data['payment_type'])."',
																	start_month='".dbvalueprepare($data['start_month'])."',
																	start_date='".dbvalueprepare($data['start_date'])."',
																	remarks='".dbvalueprepare($data['remarks'])."',
																	amount='".dbvalueprepare($data['amount'])."' ";
					
										$res=$obj_db->get_qresult($update1);
						}
												
					foreach($data['name'] as $key=>$val){
						if($data['name'][$key]=='' && $data['designation'][$key]=='' && $data['email'][$key]=='' && $data['phone'][$key]==''){
						}
						else {
							 $update1="Insert into company_other set company='".dbvalueprepare($clast_insert_id)."',
																	type='contact',
																	name='".dbvalueprepare($data['name'][$key])."',
																	designation_account='".dbvalueprepare($data['designation'][$key])."',
																	email_ifsc='".dbvalueprepare($data['email'][$key])."',
																	phone_address='".dbvalueprepare($data['phone'][$key])."' ";
					
										$res=$obj_db->get_qresult($update1);
						}
					}
					foreach($data['bank'] as $key=>$val){
						if($data['bank'][$key]=='' && $data['account'][$key]=='' && $data['ifsc'][$key]=='' && $data['paddress'][$key]==''){
						}else{
							 $update1="Insert into company_other set company='".dbvalueprepare($clast_insert_id)."',
																	type='bank',
																	name='".dbvalueprepare($data['bank'][$key])."',
																	designation_account='".dbvalueprepare($data['account'][$key])."',
																	email_ifsc='".dbvalueprepare($data['ifsc'][$key])."',
																	phone_address='".dbvalueprepare($data['paddress'][$key])."' ";
					
										$res=$obj_db->get_qresult($update1);
						}
					}
					
					foreach($data['username'] as $key=>$val){
						if($data['username'][$key]<>'' && $data['password'][$key]<>'' && $data['log_phone'][$key]<>''){
							 $update2="Insert into company_login set company='".dbvalueprepare($clast_insert_id)."',
																	username='".dbvalueprepare($data['username'][$key])."',
																	phone='".dbvalueprepare($data['log_phone'][$key])."',
																	invoice_notification='".dbvalueprepare($data['invoice_notification'][$key])."',
																	task_notification='".dbvalueprepare($data['task_notification'][$key])."',
																	ticket_notification='".dbvalueprepare($data['ticket_notification'][$key])."',
																	password='".dbvalueprepare($data['password'][$key])."' ";
					
										$res=$obj_db->get_qresult($update2);
						}
					}
					
					foreach($data['portal_username'] as $key=>$val){
						if($data['portal_username'][$key]<>'' && $data['portal_password'][$key]<>'' && $data['portal'][$key]<>''){
							 $update3="Insert into company_portal set company='".dbvalueprepare($clast_insert_id)."',
																	username='".dbvalueprepare($data['portal_username'][$key])."',
																	portal='".dbvalueprepare($data['portal'][$key])."',
																	password='".dbvalueprepare($data['portal_password'][$key])."' ";
					
										$res=$obj_db->get_qresult($update3);
						}
					}
					
					if($_FILES['logo']['name']) {
									
										$ext=substr(strrchr($_FILES['logo']['name'],"."),1);
										$ext=strtolower($ext);
										$img_gal="images/logos/logo_".$clast_insert_id.".jpg";
										move_uploaded_file($_FILES['logo']['tmp_name'], $img_gal);
										 $update_pic = " update company set profile='".$img_gal."' where id=".(int)$clast_insert_id;
										$res1=$obj_db->get_qresult($update_pic);
													
								  }
			}
	//exit;
			redirect_page('company.php');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="fav.png">
  <title>CARRYMARK | TODAY</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link href="dist/css/bootstrap-combined.min.css" rel="stylesheet">
  <link href="dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <!-- jPList core js and css  -->
  <link href="dist/css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />
  <link href="dist/css/jplist.core.min.css" rel="stylesheet" type="text/css" />
<style>        

.box

{

	box-shadow:none;

}  
#Error{color:#FF0000;}

</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 <?php include"header.php" ?>

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>Add Company</h1> <a href="company.php" type="button" class="btn btn-primary">Back</a>

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="col-sm-12">

      	<div>
        <?php $data=$_POST;
		if($_GET['id']) {  $sql="Select * from company where id=".$_GET['id']; 
		$result= $obj_db->fetchRow($sql);}
		if($data=='') $data=$result; ?>
<form class="addcompany1" method="post" enctype="multipart/form-data">
            <div class="company">

        	<div class="row">

            	<div class="col-sm-12">
                    <div class="panel with-nav-tabs panel-success" style="padding:15px; margin-bottom:0px;">
                    	<div class="col-sm-12">
                        <div class="form-group inner-group">
                                     <label class="col-sm-3 control-label">Status<span id="Error">*</span><span>:</span></label>
                                    <div class="col-sm-3 control-label"> <select class="form-control" name="status" required onchange="change(this.value);">
                                    <option value="">---Select---</option>
                                         	<option <?php if($data['status']=='Company') echo "Selected"; ?>>Company</option>
                                            <option <?php if($data['status']=='Individual') echo "Selected" ;?>>Individual</option>
                                            <option <?php if($data['status']=='HUF') echo "Selected"; ?>>HUF</option>
                                            <option <?php if($data['status']=='AOP') echo "Selected"; ?>>AOP</option>
                                            <option <?php if($data['status']=='BOI') echo "Selected" ;?>>BOI</option>
                                            <option <?php if($data['status']=='Trust') echo "Selected"; ?>>Trust</option>
                                            <option <?php if($data['status']=='AJP') echo "Selected"; ?>>AJP</option>
                                             <option <?php if($data['status']=='Firm') echo "Selected"; ?>>Firm</option>
                                              <option <?php if($data['status']=='Government') echo "Selected"; ?>>Government</option>
                                         </select></div>
                                    <label class="col-sm-3 control-label label-status">Residential Status<span id="Error">*</span> <span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                    <select class="form-control" name="resident" id="" required>
                                         	 <option value="">---Select---</option>
                                         	<option <?php if($data['resident']=='Resident') echo "Selected"; ?>>Resident</option>
                                            <option <?php if($data['resident']=='ROR') echo "Selected"; ?>>ROR</option>
                                            <option <?php if($data['resident']=='NR') echo "Selected"; ?>>NR</option>
                                         </select>
                                    </div>
                                  </div>                                      
                        	
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Company Name<span><span id="Error">*</span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text" class="form-control" required name="company_name" value="<?php echo $data['company_name']; ?>"></div>
                                      <label class="col-sm-3 control-label label-dobincorporation">DOB / Incoropration<span><span id="Error">*</span>:</span></label>
                                    <div class="col-sm-3 control-label">
										<?php /*?><input type="text" required class="form-control" name="incoropration" value="<?php echo $data['incoropration']; ?>"<?php */?>
                                        
                                         <div class="">
                                      		<div id="datetimepicker1" class="input-append date">
                                            <input data-format="dd/MM/yyyy hh:mm:ss" name="incoropration" type="text" value="<?php echo $data['incoropration']; ?>" 
                                            style="height:35px;" required></input>
                                            <span class="add-on"  style="height:35px;">
                                              <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                                              </i>
                                            </span>
                                          </div>
                                        </div>
                                    </div>
                                  </div> 
                                   <div class="form-group" id="aadhar_select">
                                   
                                     <label class="col-sm-3 control-label">Aadhar No<span><span id="Error">*</span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text"  class="form-control" name="aadhar_num" maxlength="12" value="<?php echo $data['aadhar_num']; ?>"><span id="Error"><?php echo $msg['aadhar_num']; ?></span></div>
                                     <label class="col-sm-3 control-label label-fathername">Father's Name<span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text"  class="form-control" name="father_name" value="<?php echo $data['father_name']; ?>"><span id="Error"><?php echo $msg['father_name']; ?></span></div>
                                  </div> 
                                  <div class="form-group">
                                  
                                     <label class="col-sm-3 control-label">Income Nature<span id="Error">*</span><span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text" required class="form-control" name="income_nature" value="<?php echo $data['income_nature']; ?>"><span id="Error"><?php echo $msg['income_nature']; ?></span></div>
                                    <label class="col-sm-3 control-label label-authorisedpan"> PAN<span><span id="Error">*</span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text"  class="form-control" name="authorised_signatory_pan" value="<?php echo $data['authorised_signatory_pan']; ?>"><span id="Error"><?php echo $msg['pan']; ?></span></div>
                                  </div>               
                                                 
                                                
                                  <div class="form-group inner-group">
                                    
                                    <label class="col-sm-3 control-label">Client Code <span id="Error">*</span><span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                        <input type="text" required class="form-control" name="client_code" value="<?php echo $data['client_code']; ?>">
                                    </div>
                                    </div>
                                    <div id="gen_select" class="form-group">
                                    	<label class="col-sm-3 control-label" id="gen_select">Gender<span>:</span></label>
                                        <div class="col-sm-3 control-label" > <select class="form-control gender-selection" name="gender" id="" >
                                                <option value="">---Select---</option>
                                                <option <?php if($data['gender']=='Male') echo "Selected" ?>>Male</option>
                                                <option <?php if($data['gender']=='Female') echo "Selected" ?>>Female</option>
                                             </select><span id="Error"><?php echo $msg['gender']; ?></span></div>
                                  </div>   
                                  
                                  <div class="form-group inner-group" id="desig">
                                     
                                    <label class="col-sm-3 control-label">Filing Associate to <span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                        <ul>
                                        <?php $sql_partners=$obj_db->get_qresult("select * from partners where id<>0"); 
                                        while($partner_result=$obj_db->fetchArray($sql_partners)){?>
                                           <li><input type="checkbox" name="filing_associate[]" value="<?php echo $partner_result['id']; ?>" <?php if($data['filing_associate'][0]==$partner_result['id']) echo "checked"; ?> /><?php echo $partner_result['title']; ?></li><?php } ?>
                                        
                                        </ul>
                                    </div>
                                     <label class="col-sm-3 control-label label-registrationno">Registration No <span>:</span></label>
                                    <div class="col-sm-3 control-label"> <input type="text"  class="form-control" name="reg_no" value="<?php echo $data['reg_no']; ?>"> </div>
                                  </div>         
                                  <?php /*?><div class="form-group inner-group" id="arr">
                                     
                                    <label class="col-sm-3 control-label">AR DOB <span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                        <input type="text"  class="form-control" name="ar_dob" value="<?php echo $data['ar_dob']; ?>">
                                    </div>
                                    <label class="col-sm-3 control-label label-arname" >AR Name <span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                       <input type="text"  class="form-control" name="ar_name" value="<?php echo $data['ar_name']; ?>">
                                    </div>
                                  </div><?php */?>  
                                  <?php /*?>  <div class="form-group inner-group" id="desig1">                                    
                                    <label class="col-sm-3 control-label">AR Father's Name<span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text" class="form-control" name="authorised_sign_father" value="<?php echo $data['authorised_sign_father']; ?>"></div>
                                       <label class="col-sm-3 control-label">Authorised Signatory DOB<span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text"  class="form-control" name="authorised_signatory" value="<?php echo $data['authorised_signatory']; ?>"></div>
                                    
                                  </div>        
                                  <div class="form-group inner-group">
                                   
                                    <label class="col-sm-3 control-label">IFSC Code<span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text" class="form-control"></div>
                                    
                                  </div>    <?php */?>          
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Address <span id="Error">*</span><span>:</span></label>
                                    <div class="col-sm-3 control-label"><textarea class="form-control" rows="1" name="address" required><?php echo $data['address']; ?></textarea></div>
                                     <label class="col-sm-3 control-label label-pincode">PIN Code<span id="Error">*</span><span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text" required class="form-control" name="pin_code" value="<?php echo $data['pin_code']; ?>"></div>
                                  </div> 
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">GST<span>:</span></label>
                                    <div class="col-sm-3 control-label"><input type="text"  class="form-control" name="gst" value="<?php echo $data['gst']; ?>"></div>
                                   
                                    <label class="col-sm-3 control-label label-uploadlogo">Upload Logo<span>:</span></label>
                                    <div class="col-sm-3 logo">
                                        <input type="file" name="logo" class="form-control" style="width:100%;" />
                                        <!-- <img src="images/bhel-logo.png" class="img-thumbnail" style="width:142px;">-->
                                    </div>
                                  </div>
                           
                                  <?php /*?><div class="form-group">
                                   <label class="col-sm-3 control-label">Filing Associate to <span>:</span></label>
                                    <div class="col-sm-3 control-label">
                                        <ul>
                                        <?php $sql_partners=$obj_db->get_qresult("select * from partners where id<>0"); 
                                        while($partner_result=$obj_db->fetchArray($sql_partners)){?>
                                           <li><input type="checkbox" name="filing_associate[]" value="<?php echo $partner_result['id']; ?>" <?php if($data['filing_associate'][0]==$partner_result['id']) echo "checked"; ?> /><?php echo $partner_result['title']; ?></li><?php } ?>
                                        
                                        </ul>
                                    </div>
                                  </div><?php */?>
                    			<div class="authorised-representative">
                                    <h3>Authorised Representative</h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-4">
                                                <label>AR Designation</label>
                                                <input type="text"  class="form-control" name="ar_designation" value="<?php echo $data['ar_designation']; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>AR Name</label>
                                               <input type="text"  class="form-control" name="ar_name" value="<?php echo $data['ar_name']; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>AR DOB</label>
                                                <input type="text"  class="form-control" name="ar_dob" value="<?php echo $data['ar_dob']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                              
                          </div>
                      
                	</div>
                     <section class="content-header" style="padding:15px 0px;">
                      <h1>Contact Data</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success multi-field-wrapper" style="padding:15px; margin-bottom:0px;">
                    <!--<form id="taskForm" method="post" class="multi-fields">-->
                       <div class="row contact-form">
                       	<div class="col-sm-12">                        
                         <div class="col-sm-3 form-group">
                             <label class="control-label">Name</label>
                             <input type="text" class="form-control" name="name[]" value="<?php echo $data['name'][0]; ?>" />
                         </div>
                          <div class="col-sm-3 form-group">
                              <label class="control-label">Designation</label>
                              <input type="text" class="form-control" name="designation[]" value="<?php echo $data['designation'][0]; ?>" />
                         </div>
                          <div class="col-sm-3 form-group">
                             <label class="control-label">Email</label>
                             <input type="text" class="form-control" name="email[]"  value="<?php echo $data['email'][0]; ?>"/><span id="Error"><?php echo $msg['valid_email']; ?></span>
                         </div>
                          <div class="col-sm-2 form-group">
                              <label class="control-label">Phone</label>
                              <input type="text" class="form-control"  name="phone[]" value="<?php echo $data['phone'][0]; ?>"   />
                         </div>
                          <div class="col-sm-1 form-group">
                              <label class="control-label empty-label">&nbsp;</label>
                              <!--<a href="javascript:void(0)" class="add-field"><i class="fa fa-plus"></i></a>-->
                              <a href="#" onClick="addFormField1(); return false;" class="add-field"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>	
                      </div>
                    <input type="hidden" id="cid" value="<?php echo ++$m; ?>">
				 	<div id="divTxt1"> 
	             	 </div> 
                       <!--<div class="contact-form multi-field">
                         <div class="col-sm-3 form-group">
                             <label class="control-label">Name</label>
                             <input type="text" class="form-control" />
                         </div>
                          <div class="col-sm-3 form-group">
                              <label class="control-label">Designation</label>
                              <input type="text" class="form-control" />
                         </div>
                          <div class="col-sm-3 form-group">
                             <label class="control-label">Email</label>
                             <input type="text" class="form-control" />
                         </div>
                          <div class="col-sm-2 form-group">
                              <label class="control-label">Phone</label>
                              <input type="text" class="form-control"  />
                         </div>
                          <div class="col-sm-1 form-group">
                              <a href="javascript:void(0)" class="remove-field"><i class="fa fa-times"></i></a>
                        </div>
                      </div>-->
                  
                      
                      <!-- </form>-->
                     </div>
                     
                      <section class="content-header" style="padding:15px 0px;">
                      <h1>Bank Data</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success multi-field-wrapper" style="padding:15px; margin-bottom:0px;">
                  <!--  <form id="taskForm" method="post" class="multi-fields">-->
                       <div class="row contact-form multi-field">
                         <div class="col-sm-12">
                         <div class="col-sm-3 form-group">
                             <label class="control-label">Bank Name</label>
                             <input type="text" class="form-control" name="bank[]"  value="<?php echo $data['bank'][0]; ?>" />
                         </div>
                          <div class="col-sm-3 form-group">
                              <label class="control-label">Account No</label>
                              <input type="text" class="form-control" name="account[]"  value="<?php echo $data['account'][0]; ?>"  />
                         </div>
                          <div class="col-sm-3 form-group">
                             <label class="control-label">IFSC Code</label>
                             <input type="text" class="form-control" name="ifsc[]"  value="<?php echo $data['ifsc'][0]; ?>" />
                         </div>
                          <div class="col-sm-2 form-group">
                              <label class="control-label">Address</label>
                              <input type="text" class="form-control" name="paddress[]"  value="<?php echo $data['paddress'][0]; ?>"  />
                         </div>
                          <div class="col-sm-1 form-group">
                              <label class="control-label empty-label">&nbsp;</label>
                             <a href="#" onClick="addFormField2(); return false;" class="add-field"><i class="fa fa-plus"></i></a>
                        </div>
                         </div>
                      </div>
                    <input type="hidden" id="bid" value="<?php echo ++$n; ?>">
				 	<div id="divTxt2"> 
	             	 </div> 
                      
                      <!-- </form>-->
                     </div>
                     
                      <section class="content-header" style="padding:15px 0px;">
                      <h1>Login Data</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success" style="padding:15px; margin-bottom:0px;">
                  <!--  <form id="taskForm" method="post">-->
                       <div class="row contact-form row">
                         <div class="col-sm-12">
                         <div class="col-sm-3 form-group">
                             <label class="control-label">User Name</label>
                             <input type="text" class="form-control" name="username[]" value="<?php echo $data['username'][0]; ?>"  />
                         </div>
                          <div class="col-sm-3 form-group">
                              <label class="control-label">Password</label>
                              <input type="password" class="form-control"  name="password[]" value="<?php echo $data['password'][0]; ?>"  />
                         </div>
                         <div class="col-sm-3 form-group">
                              <label class="control-label">Phone</label>
                              <input type="text" class="form-control"  name="log_phone[]" value="<?php echo $data['log_phone'][0]; ?>"  />
                         </div>
                         <div class="col-sm-3 form-group">
                              <label class="control-label">Notifications</label> <br />
                              <input type="checkbox"  name="task_notification[]" value="1"  /> <b>Task</b>
                              <input type="checkbox"  name="ticket_notification[]" value="1"  /> <b>Ticket</b>
                              <input type="checkbox"  name="invoice_notification[]" value="1"  /> <b>Invoice</b>
                             
                         </div>
                         <div class="col-sm-1 form-group">
                              <label class="control-label empty-label">&nbsp;</label>
                             <a href="#" onClick="addFormField3(); return false;" class="add-field"><i class="fa fa-plus"></i></a>
                        </div>
                         </div>
                      </div>
                      
                      
                     <input type="hidden" id="uid" value="<?php echo ++$l; ?>">
				 	<div id="divTxt3"> 
	             	 </div>
                      
                    <!--   </form>-->
                     </div>
                     
                     <section class="content-header" style="padding:15px 0px;">
                      <h1>Portal Data</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success" style="padding:15px; margin-bottom:0px;">
                  <!--  <form id="taskForm" method="post">-->
                       <div class="row contact-form row">
                         <div class="col-sm-12">
                         <div class="col-sm-3 form-group">
                             <label class="control-label">User Name</label>
                             <input type="text" class="form-control" name="portal_username[]" value="<?php echo $data['portal_username'][0]; ?>"  />
                         </div>
                          <div class="col-sm-3 form-group">
                              <label class="control-label">Password</label>
                              <input type="password" class="form-control"  name="portal_password[]" value="<?php echo $data['portal_password'][0]; ?>"  />
                         </div>
                         <div class="col-sm-3 form-group">
                              <label class="control-label">Portal</label>
                              <input type="text" class="form-control"  name="portal[]" value="<?php echo $data['portal'][0]; ?>"  />
                         </div>
                         <div class="col-sm-1 form-group">
                              <label class="control-label empty-label">&nbsp;</label>
                             <a href="#" onClick="addFormField4(); return false;" class="add-field"><i class="fa fa-plus"></i></a>
                        </div>
                         </div>
                      </div>
                      
                      
                     <input type="hidden" id="pid" value="<?php echo ++$p; ?>">
				 	<div id="divTxt4"> 
	             	 </div>
                      
                    <!--   </form>-->
                     </div>
                   		
                        <section class="content-header" style="padding:15px 0px;">
                      <h1>Payment Data</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success multi-field-wrapper" style="padding:15px; margin-bottom:0px;">
                    <!--<form id="taskForm" method="post" class="multi-fields">-->
                       <div class="row contact-form">
                         <div class="col-sm-12">
                         <div class="col-sm-4 form-group">
                             <label class="control-label">Type</label>
                            <select name="payment_type" class="form-control" required onchange="payment(this.value)">
                            	<option value="">---Select---</option>
                                <option value="Half yearly" <?php if($data['payment_type']=='Half yearly') echo "Selected"; ?>>Half yearly</option>
                                <option value="Monthly"<?php if($data['payment_type']=='Monthly') echo "Selected"; ?>>Monthly</option>
                                <option value="Custom"<?php if($data['payment_type']=='Custom') echo "Selected"; ?>>Custom</option>
                            </select>
                         </div>
                          <div class="col-sm-3 form-group" id="st_month">
                              <label class="control-label">Starting month</label>
                            
                              <select name="start_month" class="form-control">
                                <option  value='1' <?php if($data['start_month']=='1') echo "Selected";  ?>>Janaury</option>
                                <option value='2' <?php if($data['start_month']=='2') echo "Selected";  ?>>February</option>
                                <option value='3' <?php if($data['start_month']=='3') echo "Selected";  ?>>March</option>
                                <option value='4' <?php if($data['start_month']=='4') echo "Selected";  ?>>April</option>
                                <option value='5' <?php if($data['start_month']=='5') echo "Selected";  ?>>May</option>
                                <option value='6' <?php if($data['start_month']=='6') echo "Selected";  ?>>June</option>
                                <option value='7' <?php if($data['start_month']=='7') echo "Selected";  ?>>July</option>
                                <option value='8' <?php if($data['start_month']=='8') echo "Selected";  ?>>August</option>
                                <option value='9' <?php if($data['start_month']=='9') echo "Selected";  ?>>September</option>
                                <option value='10' <?php if($data['start_month']=='10') echo "Selected";  ?>>October</option>
                                <option value='11' <?php if($data['start_month']=='11') echo "Selected";  ?>>November</option>
                                <option value='12'<?php if($data['start_month']=='12') echo "Selected";  ?>>December</option>
                              </select>
                         </div>
                          <div class="col-sm-3 form-group" id="st_date">
                             <label class="control-label">Starting Date</label>
                            
                              <select name="start_date" class="form-control">
                              <?php for($i=1; $i<=31; $i++){ ?>
                              <option value="<?php echo  $i; ?>" <?php if($data['start_date']==$i) echo "Selected";  ?>><?php echo  $i; ?></option>
                              <?php } ?>
                              </select>
                         </div>
                          <div class="col-sm-2 form-group">
                              <label class="control-label">Amount </label>
                              <input type="text" required class="form-control"  name="amount" value="<?php echo $data['amount']; ?>"   />
                         </div>
                          <div class="col-sm-2 form-group">
                              <label class="control-label">Remarks </label>
                              <input type="text"  class="form-control"  name="remarks" value="<?php echo $data['remarks']; ?>"   />
                         </div>
                         </div>                          
                      </div>
                      
                     </div>
                    
                    <section class="content-header" style="padding:15px 0px;">
                      <h1>Company Filing</h1>
                    </section>
                     <div class="panel with-nav-tabs panel-success company-files" style="padding:15px;">
                            <div class="documents">
                                <ul class="col-sm-4">
                                 <?php $main="select * from filing where id<>0 order by id asc";
									$main_res=$obj_db->get_qresult($main); $n=0; $m=0;
									while($main_result=$obj_db->fetchArray($main_res)){ $n++;?>
                                     <?php  $sub="select * from sub_filing where file=".$main_result['id']." order by id asc";
									   		$num=$obj_db->fetchNum($sub);  ?>
                                      
                                       <?php if($num==0){ ?>
                                        <li> <b><input type="checkbox" name="main_id[]" value="<?php echo  $main_result['id'];?>"><?php echo  $main_result['title'];?></b></li>
                                        <?php } else { ?>
                                          <li><b><?php echo  $main_result['title'];?></b>
                                         <?php $sub_res=$obj_db->get_qresult($sub); 
												while($sub_result=$obj_db->fetchArray($sub_res)){ $m++; ?>
										  <ol>
                                            <li>
                                                <b><input type="checkbox" name="sub_id[]" value="<?php echo  $sub_result['id'];?>"><?php echo  $sub_result['name'];?></b>
                                                <?php /*?><ul>
                                                <?php $doc="select * from documents where sub_file=".$sub_result['id']." order by id asc";
									   				$doc_res=$obj_db->get_qresult($doc); 
													 while($doc_result=$obj_db->fetchArray($doc_res)){  ?>
                                                    <li><?php echo $doc_result['name'] ;?></li>
                                                    <?php } ?>
                                                </ul><?php */?>
                                            </li>
                                         </ol>
                                         <?php }} ?>
                                       
                                         <?php }  ?>  
                                           </li>
                                </ul>
                            </div>                            
                            <!--<a href="company.php" class="btn btn-primary">Submit</a>-->
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary"  />
                        </div>
                    </div>
                    
            </div>
        </div>	
       </form>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.php" ?>
</div>

<!-- ./wrapper -->



<!-- jQuery 3 -->




<script src=" bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->

<script src=" bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->

<script src=" dist/js/adminlte.min.js"></script>		

		<script src="dist/js/jplist.core.min.js"></script>	

	

		<!-- filter dropdown bundle -->

		<script src="dist/js/jplist.filter-dropdown-bundle.min.js"></script>

	

		<!-- jPList start -->

		<script>

		$('document').ready(function(){

		

			$('#demo').jplist({				

				itemsBox: '.list' 

				,itemPath: '.list-item' 

				,panelPath: '.jplist-panel'	

			});

		});

		</script>
        
        
         <script type="text/javascript"
         src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript"
         src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
        </script>
        <script type="text/javascript">
          $('#datetimepicker1').datetimepicker({
          });
        </script>
        
       <!-- <script>
	$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
		</script>-->
        <script >
		function addFormField1() {



		var id = document.getElementById("cid").value;

		var feet = ""; 

		if($("#feet").val()!=null) feet=$("#feet").val();



		$("#divTxt1").append("<div id='crow" + id + "'><div class='row contact-form multi-field'><div class='col-sm-12'><div class='col-sm-3 form-group'> <input type='text' class='form-control' name='name[]' /></div><div class='col-sm-3 form-group'>  <input type='text' class='form-control'  name='designation[]' /></div><div class='col-sm-3 form-group'> <input type='text' class='form-control'  name='email[]'  /></div> <div class='col-sm-2 form-group'><input type='text' class='form-control'  name='phone[]'   /></div><div class='col-sm-1 form-group'> <a href='#' onClick='removeFormField1(\"#crow" + id + "\"); return false;' class='remove-field'><i class='fa fa-times'></i></a></div></div></div></div>");



		id = parseInt(id) + 1;

		console.log('id: ', id);

		document.getElementById("cid").value = id;



	}



	function removeFormField1(id) {

		$(id).remove();

		var id = document.getElementById("cid").value;

		id = (id - 1);

		document.getElementById("cid").value = id;

		;

	}

		function addFormField2() {



		var id = document.getElementById("bid").value;

		var feet = ""; 

		if($("#feet").val()!=null) feet=$("#feet").val();



		$("#divTxt2").append("<div id='brow" + id + "' ><div class='row contact-form multi-field'><div class='col-sm-12'><div class='col-sm-3 form-group'> <input type='text' class='form-control'  name='bank[]'  /></div><div class='col-sm-3 form-group'>  <input type='text' class='form-control'  name='account[]'  /></div><div class='col-sm-3 form-group'> <input type='text' class='form-control'  name='ifsc[]' /></div> <div class='col-sm-2 form-group'><input type='text' class='form-control'  name='paddress[]'  /></div><div class='col-sm-1 form-group'> <a href='#' onClick='removeFormField2(\"#brow" + id + "\"); return false;' class='remove-field'><i class='fa fa-times'></i></a></div></div></div></div>");



		id = parseInt(id) + 1;

		console.log('id: ', id);

		document.getElementById("bid").value = id;



	}



	function removeFormField2(id) {

		$(id).remove();

		var id = document.getElementById("bid").value;

		id = (id - 1);

		document.getElementById("bid").value = id;

		;

	}
	
	function addFormField3() {



		var id = document.getElementById("uid").value;

		var feet = ""; 

		if($("#feet").val()!=null) feet=$("#feet").val();



		$("#divTxt3").append("<div id='urow" + id + "' ><div class='row contact-form'><div class='col-sm-12'><div class='col-sm-3 form-group'><input type='text' class='form-control' name='username[]'  /></div><div class='col-sm-3 form-group'><input type='password' class='form-control'  name='password[]'  /> </div><div class='col-sm-3 form-group'><input type='text' class='form-control'  name='log_phone[]'  /> </div> <div class='col-sm-3 form-group'><input type='checkbox'  name='task_notification[]' value='1'  /> <b> Task </b><input type='checkbox'  name='ticket_notification[]' value='1'  /> <b> Ticket </b> <input type='checkbox'  name='invoice_notification[]' value='1'  /> <b> Invoice </b></div><div class='col-sm-1 form-group'><a href='#' onClick='removeFormField3(\"#urow" + id + "\"); return false;' class='remove-field'><i class='fa fa-times'></i></a></div></div></div></div>");



		id = parseInt(id) + 1;

		console.log('id: ', id);

		document.getElementById("uid").value = id;



	}



	function removeFormField3(id) {

		$(id).remove();

		var id = document.getElementById("uid").value;

		id = (id - 1);

		document.getElementById("uid").value = id;

		;

	}
	
	
	function addFormField4() {



		var id = document.getElementById("pid").value;

		var feet = ""; 

		if($("#feet").val()!=null) feet=$("#feet").val();



		$("#divTxt4").append("<div id='prow" + id + "' ><div class='row contact-form'><div class='col-sm-12'><div class='col-sm-3 form-group'><input type='text' class='form-control' name='portal_username[]'  /></div><div class='col-sm-3 form-group'><input type='password' class='form-control'  name='portal_password[]'  /> </div><div class='col-sm-3 form-group'><input type='text' class='form-control'  name='portal[]'  /> </div><div class='col-sm-1 form-group'><a href='#' onClick='removeFormField4(\"#prow" + id + "\"); return false;' class='remove-field'><i class='fa fa-times'></i></a></div></div></div></div>");



		id = parseInt(id) + 1;

		console.log('id: ', id);

		document.getElementById("pid").value = id;



	}



	function removeFormField4(id) {

		$(id).remove();

		var id = document.getElementById("pid").value;

		id = (id - 1);

		document.getElementById("pid").value = id;

		;

	}
	
		</script>
    <script>
	function change(val){
		var x=val;
		if(x=='Individual'){
			$("#desig").hide();
			$("#desig1").hide();
			$("#arr").hide();
			$("#aadhar_select").show();
			$("#gen_select").show();
		}else{
			$("#desig").show();
			$("#desig1").show();
			$("#arr").show();
			$("#aadhar_select").hide();
			$("#gen_select").hide();
		}
	}
	
	function payment(val){
		var x=val;
		if(x=='Custom'){
			$("#st_date").hide();
			$("#st_month").hide();
			
		}else{
			$("#st_date").show();
			$("#st_month").show();
		}
	}
	</script>

</html>