<!DOCTYPE html> 
 <head>
 <meta name="author" content="Kristopher Huffman">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/modules/mystyle.css" type="text/css" rel="stylesheet" media="screen">
  </head>
  
    <nav>
        <ul>
  					<li><a href="/index.php">RETRUND.COM</a></li>
 					
                    
		</ul>
     </nav>

     <script>
	var cntClick = 0;
var cntIt = 0;

function jsOnLoad() {
  console.log("Load event");
  document.getElementById("p1").innerHTML = "You have loaded the page. This is a sample of something that was done onLoad event";
  loadTouch();
  loadTransition();
  loadAnimation();
}

function mouseOver() {
  document.getElementById("mouse").innerHTML = "Mouse Over";
}

function mouseOut() {
  document.getElementById("mouse").innerHTML = "Mouse Out of Bounds";
}

function clicker() {
  cntClick = cntClick + 1;
  document.getElementById("onclick").innerHTML = " On Click Count: " + cntClick;
}

function loadTouch() {
  console.log("Adding listenters");
  document.getElementById("touch").addEventListener("touchstart", startTouch);
  document.getElementById("touch").addEventListener("touchmove", function(){
    document.getElementById("touch").innerHTML = "Move";
  })
  document.getElementById("touch").addEventListener("touchend", function(){
    document.getElementById("touch").innerHTML = "End";
  })
  document.getElementById("touch").addEventListener("touchcancel", function(){
    document.getElementById("touch").innerHTML = "Cancel";
  })
  document.getElementById("touch").addEventListener("touchenter", function(){
    document.getElementById("touch").innerHTML = "Enter";
  })
  document.getElementById("touch").addEventListener("touchleave", function(){
    document.getElementById("touch").innerHTML = "Leave ";
  })
}

function startTouch() {
  document.getElementById("touch").innerHTML = "Start";
}

function enlargeBox() {
  var box = document.getElementsByClassName('trigger')[0];
  box.classList.add('triggerEnlarge'); 
  box.classList.remove('triggerSmall');
}

function smallBox() {
  var box = document.getElementsByClassName('trigger')[0]; 
  box.classList.add('triggerSmall');
  box.classList.remove('triggerEnlarge');
}

function loadTransition(event) {
	console.log("transition load");
	document.getElementById("trigger").addEventListener("transitionend", getPropertyEnd);
}
function getPropertyEnd(event) {
	document.getElementById("pTrans").innerHTML = "Transition property name: " +  event.propertyName + "<br>";
	document.getElementById("pTrans").innerHTML += "Transition elapsed time: " +  event.elapsedTime ;
}

function loadAnimation(event) {
	document.getElementById("animation").addEventListener("animationend", getAnimationEnd);
	document.getElementById("animation").addEventListener("animationiteration", animationIter);
}

function animationIter(event) {
	cntIt = cntIt + 1;
	document.getElementById("pAnimation").innerHTML = "Animation count: " + cntIt;
}

function getAnimationEnd(event) {
	document.getElementById("pAnimation").innerHTML = "<br>Animation has ended.";
}
 
	 </script>
<body onload="jsOnLoad()">
  <h1>JavaScript Events</h1>
<div onload="jsOnLoad()">
  <h2>Onload Event</h2>
  <p>Events can be triggered when a page is loaded.</p>
  <p id="p1"></p>
</div>
<div>
  <h2>Onmouseover and Onmouseout Events</h2>
  <p id="p2">Mouse over events</p>
  <div class="example" id="mouse" onmouseover="mouseOver()" onmouseout="mouseOut()"></div>
</div>
<div>
  <h2>Onclick</h2>
  <p id="p3">Click counter activated on click</p>
  <div class="example2" id="onclick" onclick="clicker()" ></div>
  
</div>
<div>
   <h2>Transition Events</h2>
   <p>Click the buttons to start the transition events</p>
   <button input="button" onclick="enlargeBox()">Enlarge and Morph</button>
   <button input="button" onclick="smallBox()">Shrink and Morph</button>
  </br>
  <div id="trigger" class="trigger"></div>
  <p id="pTrans"></p>
</div>
<div>
   <h2>Animation Events</h2>
   <div class="animation2" id="animation"></div>
   <p id="pAnimation"></p>
</div>
<div>
  <h2>Touch Events</h2>
  <p>Touch event box</p>
  <div id="touch" class="example3" onload="loadTouch()" ontouchstart="startTouch()" ></div>
</div>

      
      
     <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
  </body>
</html>
