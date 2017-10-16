var myArray = [];


function loopString(str){
	console.log("In loopString");
	var myString = str.value;
	var strBits = myString.split(",");
	console.log("String bit count: " + strBits.length);
}


function splitString(str){
	console.log("Object string: " + str.value);
	var myString = str.value;			
	var strBits = myString.split(",");	
	var strCnt = strBits.length;
	console.log("String bit count: " + strBits.length);
	
	for (i = 0; i < strCnt; i++){
		if (i == 0){
			document.getElementById("functionResults").innerHTML = "There are " + strCnt + " objects in the string.\n";
			document.getElementById("functionResults").innerHTML += "Here are the objects that were parsed into an array:\n";
		}	
		var number = i + 1;
		// Add name to html object
		document.getElementById("functionResults").innerHTML += "\t" + number + ".) " + strBits[i] + "\n";
	}	
}


function checkBoxes(checkBox){
	console.log("checkBoxes id: " + checkBox.id);
	var id = checkBox.id;
	
	if (id == "cbComma"){
		document.getElementById("cbOther").checked = false;
		document.getElementById("cbBack").checked = false;
		document.getElementById("preCb").innerHTML = "Comma is selected. The other checkboxes have been deselected.";
	}
	else if (id == "cbBack"){
		document.getElementById("cbComma").checked = false;
		document.getElementById("cbOther").checked = false;
		document.getElementById("preCb").innerHTML = "Backslash is selected. The other checkboxes have been deselected.";
	}
	else{
		document.getElementById("cbComma").checked = false;
		document.getElementById("cbBack").checked = false;
		document.getElementById("preCb").innerHTML = "Other is selected. The other checkboxes have been deselected.";
	}	
	document.getElementById("item2").innerHTML = "";
}


function parseString(str){
	var myString = str.value; 
	var comma = document.getElementById("cbComma").checked;
	var back = document.getElementById("cbBack").checked;
	var other = document.getElementById("cbOther").checked;
	var selector;
	if (comma == true)
		selector = ",";
	else if (back == true)
		selector = "/";
	else{
		selector = document.getElementById("txOther").value;
	}
	console.log("Selector: " + selector);
	var strBits = myString.split(selector); 
	var cnt = strBits.length;
	console.log("String bit cnt: " + cnt);
	
	for (i = 0; i < cnt; i++){
		if (i == 0){
			document.getElementById("item2").innerHTML = "There are " + cnt + " obects. Here is the parsed list:\n";
			document.getElementById("item2").innerHTML += "\t" + strBits[i] + "\n";
		}
		else
			document.getElementById("item2").innerHTML += "\t" + strBits[i] + "\n";
	} 
}


function addArray(str){
	console.log("In loopString");
	var myString = str.value;
	myArray.push(myString);
	console.log("Pushed to array: " + myString);
	console.log("Items in array: " + myArray.length);
	document.getElementById("preResponse").innerHTML = "\t" + myString + " has been added to the array." ;
	displayArray();
	
}


function displayArray(){
	document.getElementById("item3").innerHTML = "Here are the objects in the array:\n";
	var cnt = myArray.length;
	if (cnt > 0){
		for (i = 0; i < cnt; i++)
			document.getElementById("item3").innerHTML += "\tIndex "+ i + ": " + myArray[i] + "\n";
	}
	else
		document.getElementById("item3").innerHTML = "There is nothing in the array.";
	
}


function clearArray(){
	var cnt = myArray.length;
	for (i = 0; i < cnt; i++){
		myArray.pop(); 
	}
	displayArray();
}


function getArray(){
	var myIndex = document.getElementById("numIndex").value;
	var cnt = myArray.length;
	if (cnt > 0 && myIndex <= cnt -1 && myIndex >= 0){ 
		console.log("Index " + myIndex + ". Associated item: " + myArray[myIndex]);
		document.getElementById("spanIndex").innerHTML = "Index " + myIndex + " is: " + myArray[myIndex];
	}
	else
		document.getElementById("spanIndex").innerHTML = "No valid index"
}