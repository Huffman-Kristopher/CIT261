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
var btnNum = 0; 
var pNum = 0;
var hNum = 0;

function makeElement() {
  var ranNum = Math.floor((Math.random() * 3) + 1);
  if (ranNum == 3){
    console.log("creating a button");
    var myBtn = document.createElement("BUTTON")
    btnNum++;
    var myText = document.createTextNode("New button " + btnNum);
    myBtn.appendChild(myText);
    document.getElementById("randomDiv").appendChild(myBtn);
  }
  else if(ranNum == 2){
    var myPar = document.createElement("P");
    var myText = document.createTextNode("New paragraph " + pNum);
    myPar.appendChild(myText);
    document.getElementById("randomDiv").appendChild(myPar);
  }
  else {
    var myHeader = document.createElement("H1");
    hNum++;
    var hText = document.createTextNode("New Header " + hNum);
    myHeader.appendChild(hText);
    document.getElementById("randomDiv").appendChild(myHeader);
  }
}
function appendList() {
  var myInput = document.getElementById("txtBox").value;
  var newItem = document.createElement("LI"); // 
  var myText = document.createTextNode(myInput);
  newItem.appendChild(myText);
  document.getElementById("myList").appendChild(newItem);
  updateNumber();
}

function beforeList() {
  var myInput = document.getElementById("txtBox").value;
  var myList = document.getElementById("myList");
  var newItem = document.createElement("LI");
  var myText = document.createTextNode(myInput);
  newItem.appendChild(myText);
  myList.insertBefore(newItem,myList.childNodes[0]);
  updateNumber();
}
function updateNumber() {
  var childCnt = document.getElementById("myList").getElementsByTagName("li").length;
  var mySelector = document.getElementById("removeInput");
  mySelector.max = childCnt - 1;
  mySelector.min = 0;
}

function removeItems() {
  var mySelector = document.getElementById("removeInput").value;
  var myList = document.getElementById("myList");
  console.log(mySelector);
  myList.removeChild(myList.childNodes[mySelector]);
  updateNumber();
}
  </script>
  
  <h1>DOM Manipulation</h1>
<div>
  <h2>createElement: Click the button below to create random objects.</h2>
  <button type="button" onclick="makeElement()">Create a random object!</button>
  <div id="randomDiv"></div>
</div>
<div>
  <h2>appendChild: Example using lists.</h2>
  <p> You must enter text into the box for this to work.</p>
  Append to the list: <input type="text" id="txtBox"></br>
  Append to end of list:<button type="button" onclick="appendList()">Append to End</button></br>
  InsertBefore the beginning of the list:<button type="button" onclick="beforeList()">Insert Before</button></br>
  Items in the room:</br>
  <ul id="myList">
    <li>Cat</li>
    <li>ball of yarn</li>
    <li>mouse</li>
    <li>cheese</li>
  </ul><br>
<span>Select a child node to remove from the above list:</span></br>
<p>list starts at 0.</p><br>
<input type="number" id="removeInput"></br>
<button type="button" onclick="removeItems()">Remove child</button></br>
</div>
  <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
  </body>
</html>