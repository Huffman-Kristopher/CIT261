<!DOCTYPE html>
<!--
home page
-->
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Home | retrund.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

</head>

    <body>
    <script type="text/javascript" src="cit261-2js.js"></script>
         <h1>JavaScript Objects</h1>
  <div>
	<h2>JavaScript Object Creation Functions, Inheritance, Properties, Methods, and Instantiation</h2>
	<h3>Input Vehicle information</h3>
	Make: <input type="text" id="mkName" value="Saturn"><br><br>
	Model:  <input type="text" id="mdName" value="Vue"><br>
	Year: <input type="number" id="year" value="2006"><br>
	
	<button type="button" onclick="createCar(mkName.value,mdName.value,year.value)">Car</button>
	<pre id="carData"></pre>
  </div>

	
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
</html>