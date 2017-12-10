<!DOCTYPE html>

<link href="/modules/bgenstyle.css" type="text/css" rel="stylesheet" media="screen">
<script>
var firstNames = ["John", "Frasier", "Jennifer", "April", "Victor", "Steph", "Conner", "Landon", "Laif", "Gabby", "Ivy", "Tony", "Akatika"];
var secondNames = ["Sanderson", "Johnson", "Smith", "Taylor", "Thorsson", "Huffman", "Gunderson", "Marion", "Malikihana"];
var occNames = ["Black Smith", "Horse Trainer", "Shop Keeper", "Bartender", "Mercenary", "Guard", "Leather Worker", "Farier", "Butcher"];
var adj = ["Thin", "Frail", "Fat", "Willowy", "Strong", "Nimble", "Lithe", "Bulky", "Delicate"];
var hair = ["Black", "Red", "Blonde", "Sandy", "Brown", "No", "Grey", "White", "Purple"];
var charNameVisible = 0;

document.onkeypress = function (e) {
    e = e || window.event;
    if (e.keyCode == 13) {
      if (!charNameVisible) {
       charNameVisible = 1;
      var charName = getcharName();
        document.getElementById("window").getElementsByTagName("cursor")[0].innerHTML = "";
        document.getElementById("charName").innerHTML = charName;
        document.getElementById("charName").style.opacity = 1;
        document.getElementById("clear").style.opacity = 1;
      } else {
        charNameVisible = 0;
        document.getElementById("charName").style.opacity = 0;
        document.getElementById("clear").style.opacity = 0;
        document.getElementById("window").getElementsByTagName("cursor")[0].innerHTML = "_";
      }
    }
};

function getcharName() {
	var firstName = firstNames[Math.floor(Math.random() * firstNames.length)];
	var secondName = secondNames[Math.floor(Math.random() * secondNames.length)];
	var occName = occNames[Math.floor(Math.random() * occNames.length)];
	var adjs = adj[Math.floor(Math.random() * adj.length)];
	var hairc = hair[Math.floor(Math.random() * hair.length)];
	return "Your Character " + firstName + " " + secondName + " is a " + adjs + " " + occName + " with " + hairc + " hair.";
}
function checkSupport() {
  if (typeof(Storage) !== "undefined") {
  localStorage.setItem("good", "Welcome to the Random character generator. This is a tool used to create background characters for use in writing. Please enjoy using this and have fun with some of the crazy combinations.");
    document.getElementById("window2").innerHTML = localStorage.getItem("good");
}
 else {
    document.getElementById("window2").innerHTML = "LocalStorage isn't supported on your browser.  You Need to run Firefox 3.5 or greater, Internet Exporer 8.0 or greater, Chrome 4.0 or greater or Safari 4.0 or greater. Please update your browser and come back.";
  }
}
function doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("window3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "code.txt", true);
  xhttp.send();
}
</script>
<body onLoad="checkSupport()">

<div id="topbar"><b>Random Character Creator</b>
</div>
<div id="generator">
<div id="header">
  </div>
  <div id="window"><cursor>_</cursor><br><br>
    <div id="charName">Character</div>
    <div id="clear"><br></div>
  </div>
</div>
<div id="div1">
<div id="header2">
</div>
<div id="window2">
</div>
</div>
<div id="doc">
<div id="header3">
</div>
<div id="window3"><br>
<button type="button" id="button" onClick="doc()"> Instructions </button>
</div>
</div>

</body>
</html>
