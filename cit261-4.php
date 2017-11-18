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
  function getCharacter() {
  var character = document.getElementById("character").value;
  var info =  document.getElementById("info");
  var url = "https://swapi.co/api/people/?search=" + character;
  var xhttp = new XMLHttpRequest(); // create xmlhttprequest object
xhttp.onreadystatechange = function() { // evaluate function every time xmlhttprequest object changes
    if (this.readyState == 4 && this.status == 200) { // when readyState is 4 and status = 200 a response from server is ready
      myResult = xhttp.responseText;
      // parse data
      var charData = JSON.parse(myResult);
      // display information
      info.innerHTML = "Name: "+ charData.results[0].name + "<br>";
      info.innerHTML += "Gender: "+ charData.results[0].gender + "<br>";
      info.innerHTML += "Skin Color: "+ charData.results[0].skin_color + "<br>";
      info.innerHTML += "Mass: "+ charData.results[0].mass + "<br>";
      info.innerHTML += "Eye Color: "+ charData.results[0].eye_color + "<br>";
      info.innerHTML += "Hair Color: "+ charData.results[0].hair_color + "<br>";
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
  </script>
  
  <h1>Using XMLHTTPRequest to Consume a JSON Web Service</h1>
<div>
  <p>The following information comes from <a href= "https://swapi.co/">swapi.co</a> a starwars database designed to be used in programming projects.</p>
  <p>You can search for any character planet or starship</>
  <p>For this example I have only included character search parameters.</p>
  <p>Please use a name of a character from StarWars</p>
  search: <input type="text" id="character" value = "Han Solo"><br><br>
  <button input="button" onclick="getCharacter()">Get Character Data</button> <br>
  <div id="info"></div>
</div>
  <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
  </body>
</html>