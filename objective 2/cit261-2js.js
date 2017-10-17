var vehicle = []; 


function Car(mkName, mdName, year) {
	this.mkName = mkName;
	this.mdName = mdName;
	this.year = year;

	this.MknMd = function (Car) {
        return this.mkName + " " + this.mdName;
    };
	this.isNew = function () {
		if (this.year >= 2015)
			return "New";
		else
			return "Old";
	};
}

function createCar(mkName, mdName, year) {
	var newCar = new Car(mkName, mdName, year);
	vehicle.push(newCar); 
	var info;
	for (info in newCar)
		console.log(newCar[info] + ", ");
	

	document.getElementById("carData").innerHTML = "A new car has been added to our inventory!" + "\n";
	document.getElementById("carData").innerHTML += "Make and Model: " + newCar.MknMd() + "\n";
	document.getElementById("carData").innerHTML += "Year: " + newCar.year + "\n";
	document.getElementById("carData").innerHTML += "New or Old: " + newCar.isNew() + "\n";
}
