@php
session_start();
$result =DB::select ( 'select id,price,desc0,desc1,desc2,desc3 FROM hires');
@endphp
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>

<body class="section_wrapper">
    <div >
      <nav>
          <ul><li class="number1" ><a href="http://localhost/website/public/">NITHYA BALASUNDAR</a></li>
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


      <div id="login">
            <div class="header">
                  Log in<button onclick="document.getElementById('login').style.display='none';" class="closeBtn">X</button>
            </div>

            <div class="form">
                <label>User:</label><br>
                <input type="text" id="user">

                <br><br>
                <label>Password:</label><br>
                <input type="text" id="pass">
            </div>

            <div class="footer">
              <button class="primaryBtn">Get In</button>
              <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>

          </div>
      </div>


      <div id="checkin">
              <div class="header">
                    check in<button onclick="document.getElementById('checkin').style.display='none';" class="closeBtn">X</button>
              </div>

              <div class="form">
                  <label>Name:</label><br>
                  <input type="text">

                  <br><br>
                  <label>Last Name:</label><br>
                  <input type="text">

                  <br><br>
                  <label>Email:</label><br>
                  <input type="text">

                  <br><br>
                  <label>User:</label><br>
                  <input type="text">

                  <br><br>
                  <label>Password:</label><br>
                  <input type="text">

                  <br><br>
                  <label>Repeat Password:</label><br>
                  <input type="text">
              </div>

              <div class="footer">
                <button class="primaryBtn">Save</button>
                <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>

            </div>
        </div>


        <div class="mainSection">
            <h4 class="heading">HIRE ME</h4>
            <p class="hire_info">I'm looking to expand my profile while I'm on top and young.</p>

            <br>
            @foreach($result as $row)
            <div class="section">
                <div class="left">
                    <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/gcart_1.png" alt="cart1">
                </div>
                <div class="right">

                    <div class="cartinfo">
                      <p class="price">&#10004;{{$row->price}}</p>
                      <p class="desc0">&#10004;{{$row->desc0}}</p>
                        <p class="desc1">&#10004;{{$row->desc1}}</p>
                          <p class="desc2">&#10004;{{$row->desc2}}</p>
                            <p class="desc3">&#10004;{{$row->desc3}}</p>

                    </div>
                </div>

            </div>
@endforeach
          <!--  <div class="section">
                    <div class="left">
                        <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/bcart_2.png" alt="cart2">
                    </div>
                    <div class="right">
                        <div class="cartinfo">
                          <p>&#10004;$300</p>
                          <p>&#10004;PHOTOGRAPHY</p>
                          <p>&#10004;3D MODELLING</p>
                          <p>&#10004;DESIGNING</p>

                          <p>CONTACT US</p>


                        </div>
                    </div>
            </div>

            <div class="section">
                    <div class="left">
                        <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/vcart_3.png" alt="cart3">
                    </div>
                    <div class="right">
                        <div class="cartinfo">
                          <p>&#10004;$300</p>
                          <p>&#10004;PHOTOGRAPHY</p>
                          <p>&#10004;3D MODELLING</p>
                          <p>&#10004;DESIGNING</p>

                          <p>CONTACT US</p>

                        </div>
                    </div>
            </div>
        </div>

        </div>
<br>
        <br>

        <!-- Skills and Knowledge Page-->
        <br>
        <br>
          <h3 class="skill"> SKILLS & KNOWLEDGE </h3>
          <p class="knowledge" ><p style="color:white; padding-left:60px; ">I am looking to expand my profile while I am on top and while I am young!!</p>

<br>
<br>
<div class="l">
  <div class="progressclass">
                        <h2 style="padding-left:3px; "><b>SOFTWARE</b></h2>
                        <br>
                        <h5 >HTML</h5>
                        <progress class="progress" max="100" value="65" data-label="50% Complete"> 86% </progress>
                        <br>
                        <h5>JAVASCRIPT</h5>
                        <progress class="progress" max="100" value="50" color="blue" > 73% </progress>
                        <br>
                        <h5>BOOTSTRAP</h5>
                        <progress class="progress" max="100" value="80"> 79% </progress>
                        <br>
                        <h5>CSS</h5>
                        <progress class="progress" max="100" value="91" width="90%"> 69% </progress>
                        <br>
                        <h5>BLENDER</h5>
                        <progress class="progress" max="100" value="75"> 65% </progress>
                        <br>
                        <h5>PHOTOSHOP</h5>
                        <progress class="progress" max="100" value="93"> 93% </progress>
                        <br>
   </div>
                <br>
                <br>

                <div class="langbox" style="box-sizing:border-box;">
                  <h1><b><font color="white">LANGUAGES</b></h1>
                    <div class="lang_1"><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/lang1.PNG"hspace="0"></div>
                    <div class="lang_1"><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/lang2.PNG"hspace="0"></div>
                    <div class="lang_1"><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/lang3.PNG"hspace="0"></div>
               </div>

</div>
  <div class="r">
              <div class="recognition" style="color: white;
                font-family: Rajdhani;
                padding-left:900px;
                 font-size: 20px;">

 <table >
    <tr>
      <td colspan="2"><h2><b>RECOGNITION</b></h2></td>
    </tr>
     <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/reco1.PNG"></td>
        <td><h4 style="color:blue">International Design Award 2014</h4>
  <p style="font-size:10px;">15th March 2014/New York State University <br>Pace:3 <br><br></p></td>
  </tr>
  <tr>
    <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/reco2.PNG"></td>
    <td><h4 style="color:blue">LOGO Design Contest 2013</h4>
  <p style="font-size:10px;">12th Oct 2013/Chicago House <br>Pace:3 <br><br></p></td>
  </tr>
  <tr>
    <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/reco3.PNG"></td>
    <td>
  <h4 style="color:blue">Web Design Contest 2013</h4>
  <p style="font-size:10px;">12th Oct 2013/New York State University <br>Pace:3 <br><br></p></td>
</tr>
</table>

</div>
<br>

<div class="kno_content">

<table>
<tr>
 <td colspan="2"><h1><b><font color="white">KNOWLEDGE</b></h1></td></tr>
 <tr>
    <th></th>
    <th></th>
</tr>

<tr>
  <td>
    <font color="white">&#10004; Grid & Layout<br>
    <font color="white">&#10004; Digital Painting<br>
    <font color="white">&#10004; Photo Composition<br>
   <font color="white">&#10004;  Good Topography<br>
  </td>
 <td>
 <font color="white">&#10004;  Google Analytics<br>
 <font color="white">&#10004;    Install and Configure<br>
 <font color="white">&#10004;    3D Modelling<br>
 <font color="white">&#10004;    Color Theory<br>
 <font color="white">&#10004;    Web Usability<br>
  </td>
          </tr>
        </table>
    </div>
</div>
 <br><br>

  <div class="hobbies_content" style="box-sizing:border-box; ">

      <div class="row1">
      <h2><p style="color:white; padding-left:60px; ">HOBBIES & INTERESTS</p></h2>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies1.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies2.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies3.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies5.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies1.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies2.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies3.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies6.PNG"></div>
      <div class="hobbies_column1"><img  src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hobbies5.PNG"></div>
      </div>
    </div>


<br>
<br>
<hr>
<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/abovecustomers.png" style="height:100%;width:100% ">
<!--customer-->
<div class="rowme">
  <div class="sideme">
    <h2>MY CUSTOMERS</h2>
    <p>A customer may or may not also be a consumer, but the <br>two notions are distinct.A customer purchases goods; a consumer uses them.</p>
  </div>
  <div class="mainme">
  <div id="img1">
  <table cellspacing="20">
  <tr>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus1.png"></td>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus2.png"></td>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus1.png"></td> </tr>
  <br>
  <tr>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus3.png"></td>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus4.png"></td>
  <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/cus5.png"></td> </tr>
  </table>
  </div>
  </div>
  <br>
</div>

<div class="contactme">
<h2>CONTACT ME</h2>
    <h5>Have a project you'd like to discuss?</h5>
  <hr style="width:150px; margin-left:625px ;">
  <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/contactme.PNG" ; .\contactme.png">
    <h2>Nithya Balasundar</h2>
  <h5>bnithya97email@.com</h5>
  <strong><hr style="width:50px;margin-left:675px "></strong>
  </div>

<div class="footerme">
<nav>
          <ul>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html">Home</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/skill.html">My Skills</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/recommendation.html">Recommendation</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/latestwork.html">Works</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/contactus.html">Contact Form </a></li>
          <div class="ic">
          <li><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/goog.jpg" ;    style="width:100%;height:30%;  " ></a></li>
          <li><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/twitter.jpg";  style="width:100%;height:30%;  " ></a></li>
</div>
        </ul>
      </nav>



</div>
</div>
<hr>


</body>

</html>
