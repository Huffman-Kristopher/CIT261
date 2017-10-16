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
    <script type="text/javascript" src="cit261-1js.js"></script>
  <h1 class="hdng">Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</h1>
  <br><br>
  <div>
	<h2 class="hdng">Loops and Functions</h2>
		<input type="text" id="nameString"  value="Ring,Chain,Bangle"><br><br>
		<button type="button" name="loop1" onclick="splitString(nameString)">Click to spilt</button>
	<pre id="functionResults"></pre>
  </div>
  <div>
	<h2 class="hdng">Conditionals</h2>
		<input type="text" id="nameString2" value="Gold,Silver,Platinum"><br><br>
		<input type="checkbox" id="cbComma" checked onclick="checkBoxes(cbComma)">Use comma<br>
		<input type="checkbox" id="cbBack" onclick="checkBoxes(cbBack)">Use forward slash<br>
		<input type="checkbox" id="cbOther" onclick="checkBoxes(cbOther)">Use other<br>
		<input type="text" id="txOther"><br>
	<pre id="preCb"></pre><br>
		<button type="button" name="loop1" onclick="parseString(nameString2)">Parse</button>
	<pre id="item2"></pre>
  </div>
  <div>
	<h2 class="hdng">Simple Arrays</h2>
		<input type="text" id="txAdd">
	<span id="preResponse"></span>
	<br><br>
		<button type="button" name="btnAdd" onclick="addArray(txAdd)">OK</button>
		<button type="button" name="Clear" onclick="clearArray()">Clear</button>
	<pre id="item3"></pre>
	<br><br><br><br><br>
</div>
  </body>
  <footer>
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                
                <script src="/modules/analytics.js"></script>
                                
            </footer>
</html>