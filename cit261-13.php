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
     <body>
     <script>
	
 var creatures = []; 

function checkSupport() {
  var myObj = document.getElementById("div1");
  if (typeof(Storage) !== "undefined") {
    myObj.innerHTML = "LocalStorage is supported with your browser.";
  } else {
    myObj.innerHTML = "LocalStorage isn't supported on your browser.  You might want to upgrade.";
  }
}

function saveNames() {
  var fName = document.getElementById("fName").value;
  var lName = document.getElementById("lName").value;
  localStorage.setItem("fName", fName);
  localStorage.setItem("lName", lName);
  var getFName = localStorage.getItem("fName");
  var getLName = localStorage.getItem("lName");
  document.getElementById("div2").innerHTML = "Retrieved name: " + getFName + " " + getLName;
}

function makeArray() {
  var a,b,c;
  a = document.getElementById("creature1").value;
  b = document.getElementById("creature2").value;
  c = document.getElementById("creature3").value;
  creatures[0] = a;
  creatures[1] = b;
  creatures[2] = c;
  document.getElementById("div3").innerHTML = "creature array created.<br>";
  for (i = 0; i < creatures.length; i++) {
    document.getElementById("div3").innerHTML +=i + ": " + creatures[i] + "<br>";
  }
  var strcreatures = JSON.stringify(creatures);
   document.getElementById("div3").innerHTML += "String from stringify: " + strcreatures + ".<br>";
  
  localStorage.setItem("creatures", strcreatures);
  var fromStorage = localStorage.getItem("creatures");
  document.getElementById("div3").innerHTML += "String retrieved from storage: " + fromStorage + ".<br>";
  
  var newcreatures = JSON.parse(fromStorage);
  document.getElementById("div3").innerHTML += "First creature in associative array: " + newcreatures[0] +  ".<br>";
}

function dragon(color,weight,name) {
  this.color = color;
  this.weight = weight;
  this.name = name;
}

function makeObject() {
  var color = document.getElementById("color").value;
  var weight = document.getElementById("weight").value;
  var name = document.getElementById("dragonName").value;
  var mydragon = new dragon(color,weight,name);
  var strdragon = JSON.stringify(mydragon);
  
  	localStorage.setItem("dragon", strdragon);
  		var fromStorage = localStorage.getItem("dragon");
  			document.getElementById("div4").innerHTML = "dragon object created.<br>";
 			 document.getElementById("div4").innerHTML = "Retrieved dragon from storage: " + fromStorage +".<br>";
  
}
	 </script>
      <h1>Local Storage API, Storing and Tretrieving Simple Data, Arrays, Associative Arrays, and Objects.</h1>
<div>
  <h2>To use local storage we need check for localStorage.</h2>
  <p>Click the button below to see if localStorage is supported on your browser.</p>
  <button input="button" onclick="checkSupport()">Check Support</button>
  <div id="div1"></div>
</div>
<div>
  <h2>Adding data to local storage</h2>
  <p>Update the information below and click the button to add it to the local storage.</p>
  First Name:<input id="fName" value="Biblo"><br>
  Last Name:<input id="lName" value="Baggins"><br>
  <button input="button" onclick="saveNames()">Save Name</button><br>
  <div id="div2"></div>
</div>
<div>
  <h2>Storing Arrays</h2>
  <p>We can store arrays as strings in local storage.  First, let us create an array of creatures for Lord of the rings.</p>
  creature 1:<input id="creature1" value="orc"><br>
  creature 2:<input id="creature2" value="eliphant"><br>
  creature 3:<input id="creature3" value="trent"><br>
  <button input="button" onclick="makeArray()">Create Array </button>
  <div id="div3"></div>
</div>
<div>
  <h2>Storing Objects</h2>
  <p>We can store objects as strings in local storage.  Lets alter the Dragon object.</p>
  Dragon color:<input id="color" value="Red"><br>
  Dragon weight:<input id="weight" value="1600"><br>
  Dragon name:<input id="dragonName" value="Smaug"><br>
  <button input="button" onclick="makeObject()">Create Object </button>
  <div id="div4"></div>
  
</div>
     
     <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
  </body>
</html>