<!DOCTYPE html>

<link href="/modules/bgenstyle.css" type="text/css" rel="stylesheet" media="screen">
<script>
var firstNames = ["John", "Frasier", "Jennifer", "April", "Victor", "Steph", "Conner", "Landon", "Laif", "Gabby", "Ivy", "Tony", "Akatika"];
var secondNames = ["Sanderson", "Johnson", "Smith", "Taylor", "Thorsson", "Huffman", "Gunderson", "Marion", "Charm"];
var occNames = ["Black Smith", "Horse Trainer", "Shop Keeper", "Bartender", "Mercenary", "Guard", "Leather Worker", "Farier", "Butcher"];
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
	return "Your Character " + firstName + " " + secondName + " is a " + occName;
}
function checkSupport() {
  var myObj = document.getElementById("div1").onloadstart;
  // check storage
  if (typeof(Storage) !== "undefined") {
    myObj.innerHTML = "Everything checks out, local storage is enabled, you are good to go.";
  } else {
    myObj.innerHTML = "LocalStorage isn't supported on your browser.  You Need to run Firefox 3.5 or greater, Internet Exporer 8.0 or greater, Chrome 4.0 or greater or Safari 4.0 or greater. Please update your browser and come back.";
  }
}
</script>
<body>

<div id="topbar"><b>Character Creator</b></div>
<div id="generator">
<div id="header">
  </div>
  <div id="window">Press &lt;ENTER&gt; to generate your Character<cursor>_</cursor><br><br>
    <div id="charName">Character</div>
    <div id="clear"><br>Press &lt;ENTER&gt; again to clear</div>
  </div>
</div>
<div id="div1">
</div>
</body>
</html>
