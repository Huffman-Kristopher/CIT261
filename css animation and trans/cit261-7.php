<!DOCTYPE html>
<html >
<head>
<style>
      /*fonts*/
@import url("https://fonts.googleapis.com/css?family=Bubbler+One|Josefin+Sans");
/*colors*/
body {
  background-color: #300113;
  color: #551051;
  font-family: "Josefin Sans", sans-serif;
  padding: 25px;
}

h1 {
  color: #ff1973;
  font-family: "Bubbler One", sans-serif;
  text-align: center;
}

p {
  text-align: center;
  font-family: "Josefin Sans", sans-serif;
}

#sidenav-menu-icon-container {
  display: block;
  position: absolute;
  padding: 10px;
  height: auto;
  width: 25px;
  top: 50px;
  right: 10px;
  cursor: pointer;
  z-index: 3;
}

.sidenav-menu-icon {
  display: inline-block;
  height: 8px;
  width: 40px;
  background: #551051;
  border-radius: 15px;
}

.sidenav-menu-icon::before {
  content: "";
  display: block;
  position: absolute;
  height: 5px;
  width: 40px;
  border-radius: 15px;
  background: #551051;
  top: 11px;
}

.sidenav-menu-icon::after {
  content: "";
  display: block;
  position: absolute;
  height: 5px;
  width: 40px;
  border-radius: 15px;
  background: #551051;
  top: 26px;
}

#sidenav-menu-icon-container:hover *,
#sidenav-menu-icon-container:hover >
.sidenav-menu-icon::after,
#sidenav-menu-icon-container:hover >
.sidenav-menu-icon::before {
  background: #ff1973;
  transition: all 200ms ease-in-out;
}

.sidenav-menu-icon.sidenav-menu-icon-open {
  height: 0;
}

.sidenav-menu-icon-open.sidenav-menu-icon::before {
  transform: rotate(60deg) translate(4px, 6px);
  width: 25px !important;
}

.sidenav-menu-icon-open.sidenav-menu-icon::after {
  transform: rotate(-60deg) translate(4px, -6px);
  width: 25px !important;
}

#sidenav-container {
  display: block;
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  width: 25%;
  height: 100%;
  margin-right: -100%;
  background-color: #300113;
  box-shadow: 15px 0 75px black;
  z-index: 2;
  transition: all 200ms ease;
}

#sidenav-content {
  display: flex;
  justify-content: center;
  font-size: 20px;
  height: 100vh;
}
#sidenav-content ul {
  display: flex;
  flex-direction: column;
  list-style-type: none;
  justify-content: center;
  padding: 0;
  margin: 0;
  width: 100%;
}
#sidenav-content ul a, #sidenav-content ul a:visited {
  display: block;
  margin: 5px 0;
  color: #551051;
  text-decoration: none;
  padding: 10px 0 10px 50px;
  transition: color 200ms ease;
}
#sidenav-content ul a:hover, #sidenav-content ul a:active {
  color: #ff1973;
}

#sidenav-container.sidenav-menu-icon-open {
  margin-right: 0;
}

.container {
  height: 75vmin;
  width: 75vmin;
  background-color: #551051;
  margin-left: 33%;
}

.container-one {
  padding: 1vmin;
}

.orbiting-circle {
  height: 25%;
  width: 25%;
  background-color: #300113;
  border-radius: 50%;
  animation: orbit 3s linear infinite;
}

@keyframes orbit {
  0% {
    transform: translate(0, 0);
  }
  5% {
    transform: translate(0, 0);
  }
  /* don't change for 5% of the time...pause */
  25% {
    transform: translate(300%, 0%);
  }
  /* start moving again */
  30% {
    transform: translate(300%, 0%);
  }
  /* pause */
  50% {
    transform: translate(300%, 300%);
  }
  /* move */
  55% {
    transform: translate(300%, 300%);
  }
  75% {
    transform: translate(0%, 300%);
  }
  80% {
    transform: translate(0%, 300%);
  }
  100% {
    transform: translate(0%, 0%);
  }
}

    </style>
</head>

<body >

  <h1>Animated Sliding Menu</h1>
<p class="sub header">View me in full screen mode.</p>
<p>Click on the  menu icon in the top right corner.  </p>
<div class="container container-one">
  <div class="orbiting-circle"></div>
  </div>
<div id="sidenav-menu-icon-container" onclick="toggleNav()">
  <div class="sidenav-menu-icon" id="sidenav-menu-icon">
    <span></span>
  </div>
</div>
<div id="sidenav-container">
  <div id="sidenav-content">
    <ul>
      <li><a href="#">Item1</a></li>
      <li><a href="#">Item2</a></li>
      <li><a href="#">Item3</a></li>
      <li><a href="#">Item4</a></li>
    </ul>
    </dev>
</div>
  
  
    <script >
    function toggleNav() {
  
  var updateElement = document.getElementById("sidenav-menu-icon");
  //toggle adds a class if it's not there or removes it if it is.
  updateElement.classList.toggle("sidenav-menu-icon-open");

  var updateElement = document.getElementById("sidenav-container");
  //toggle adds a class if it's not there or removes it if it is.
  updateElement.classList.toggle("sidenav-menu-icon-open");

}
  </script>

  
  

</body>
</html>