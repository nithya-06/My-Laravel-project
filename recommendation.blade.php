
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
   <link href="{{asset('css/style.css')}}" rel="stylesheet" />

</head>

<body>
    <div class="section_wrapper">
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

      <br><br>
      <div class="mainSection">
            <h4 class="heading">RECOMMENDATION</h4>

            <div class="rc_section">
                <div id="one">
                    <div class="rc_avatar">
                        <img class="avatar" src="./recommendation.jpg" alt="cat">
                    </div>

                    <div class="rc_info">
                        <p class="infoTxt">"As always great creative thinking for the best solution. Nithya Balasundar is by far
                            the most professional and acknowledgable provider I worked with. I will hire her again. :)"
                            <br><br>

                            Yury  Galgotez
                        </p>
                    </div>
                </div>

                <div class="carousel">
                        <button ></button>
                        <button ></button>
                        <button ></button>
            </div>
    </div>



    </div>

  </div>

</body>

</html>
