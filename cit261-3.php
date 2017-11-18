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
  <script type="text/javascript">
  var myPet;

function Pet(name,species,breed) {
	this.name = name;
	this.species = species;
	this.breed = breed;
	console.log("Name: "+ name);
}

function createPet(name,species,breed) {
	myPet = new Pet(name,species,breed);
	console.log("myPet: " + myPet.name);
	document.getElementById("area1").innerHTML = "An object named " + myPet.name + " has been created.\n";
}

function createPetString(name,species,breed) {
	strPet = "{ \"name\":\"" + name + "\", \"species\":\"" + species +  "\",\"breed\":\"" + breed
	+ "\ }";
	document.getElementById("area1").innerHTML = strPet;
	myPet = new Pet(name,species,breed);
}

function parsePet() {
	var petStr = document.getElementById("area1").innerHTML;
	var myPetObj = JSON.parse(petStr);
	console.log(myPetObj.name);
	var myLocation = document.getElementById("area2");
	myLocation.innerHTML = "Name: " + myPetObj.name + "\n";
	myLocation.innerHTML += "Species: " + myPetObj.species + "\n";
	myLocation.innerHTML += "Breed: " + myPetObj.breed + "\n";
	 
}


function requestPet() {
	
  var petObj; 
  var petStr; 
  var fileName = "pet.txt";
 
  var myLocation = document.getElementById("area3");
  var xhttp = new XMLHttpRequest(); 
  xhttp.onreadystatechange = function() { 
  if (this.readyState == 4 && this.status == 200) { 
      petObj = JSON.parse(this.responseText);
  
      myLocation.innerHTML = "Name: " + petObj.name + "\n";
      myLocation.innerHTML += "Species: " + petObj.species + "\n";
      myLocation.innerHTML += "Breed: " + petObj.breed + "\n";
      
    }
  };
  xhttp.open("GET", fileName, true);
  xhttp.send();
}


function stringifyPet() {
	var petStr = JSON.stringify(myPet);
	console.log(petStr);
	document.getElementById("area4").innerHTML = "Here is the stringified object:\n";
	document.getElementById("area4").innerHTML += petStr + "\n";
}
  </script>
  <h1>JSON Parse</h1>
  <div>
	<h2>Using JSON.parse() with strings.</h2>
	<p>Please create a pet below:</p>
	Pet Name: <input type="text" id="petName" value="Floater"><br>
	Species: <input type="text" id="species" value="Fish"><br>
	Breed: <input type="text" id="breed" value="Gold Fish"><br>
	<button type="button" onclick="createPetString(petName.value,species.value,breed.value)">Make a Pet</button>
	<br>String that represents a pet object: <pre id="area1"></pre>
	<p>After an object has been created we can parse it using JSON.parse()</p>
	<button type="button" onclick="parsePet(petName.value,species.value,breed.value)">Parse object</button><br>
	<pre id="area2"></pre>
  </div>
  <div>
	<h2>Using JSON.parse() from server</h2>
	<p>We will need to make an XMLHttpRequest to the server for the next step to work.</p>
	<button type="button" onclick="requestPet()">Make Request</button><br>
	<pre id="area3"></pre>
  </div>
  <h1>Stringify</h1>
  <div>
	<h2>Stringify changes an object into a json string and sends it to the server.</h2>
	<p>This step makes the object into a string.</p>
	<button type="button" onclick="stringifyPet()">Stringify You Pet</button><br>
	<pre id="area4"></pre>
  </div>
   <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
  </body>
</html>