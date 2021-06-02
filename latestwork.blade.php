@php
session_start();
$result =DB::select ( 'select id,worktitle,workdesc FROM latestworks');
@endphp
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/work.css')}}" rel="stylesheet" />
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #00101f;
  padding: 5px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1500px;

}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row
.row > .column {
  padding: 10px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {

  padding: 13px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
 text-align: center;
  width:100px;
  height: 30px;
  border-width: thin;
  background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
margin-left: 50px;
  border-color: blue;
  color:#222222;
}

.btn:hover {
  background-color: #ddd;
}
.worktitle
{
color:white;
padding :10px;
}
.workdescription
{
color:white;
padding :10px;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- MAIN (Center website) -->
<nav>
          <ul>
            <li class="number1" ><a href="http://localhost/website/public/">NITHYA BALASUNDAR</a></li>
          <li><a href="http://localhost/website/public/">Home</a></li>
          <li><a href="http://localhost/website/public/skill">My Skills</a></li>
          <li><a href="http://localhost/website/public/recommendation">Recommendation</a></li>
          <li><a href="http://localhost/website/public/latestwork">Latest Works</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/">Blog</a></li>
          <li><a href="http://localhost/website/public/hire">Hire Me</a></li>
          <li><a href="http://localhost/website/public/login">Login</a></li>
          <li><a href="http://localhost/website/public/register">Register</a></li>

                  </ul>
      </nav>
<div class="main">
 <h1 style="color:white" ><font face="Rajdhani">MY LATEST WORK</font></h1>
     <p style="color:white">I am looking to expand my portfolio while I am on top and while I am young!!</p>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('design')">Design </button>
 <button class="btn" onclick="filterSelection('photography')"> Photography</button>
 <button class="btn" onclick="filterSelection('websites')"> websites</button></div>


<!-- Portfolio Gallery Grid -->

						<br>
            @foreach($result as $row)
						<div class="row">
                        <div class="column photography">
                        <div class="content">
						 <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_1.PNG" height="110" width="110" >{{$row->worktitle}}{{$row->workdesc}}
						 <font color="white">
						</font>
          </div>
						</div>


					<div class="column design">
                        <div class="content">
						<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_3.PNG" height="110" width="110" >{{$row->worktitle}}{{$row->workdesc}}
						 <font color="white">

						</font>
						</div>
						</div>
            
            <div class="column websites">
                          <div class="content">
              <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_4.PNG" height="110" width="110" >{{$row->worktitle}}{{$row->workdesc}}
               <font color="white">

              </font>
              </div>
              </div>
						</div>
						</div>
						</div>

<!-- END GRID -->

</div>
<!-- END MAIN -->
</div>
@endforeach



<script>

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
