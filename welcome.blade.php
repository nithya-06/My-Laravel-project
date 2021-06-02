<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="validation.js"type="text/javascript"></script>
<link href="{{asset('css/style.css')}}" rel="stylesheet" />

        <title>Home</title>

    </head>
    <body>
      <div class="wrapper">
        <nav>
            <ul>
              <li class="number1" ><a href="http://localhost/website/public/">NITHYA BALASUNDAR</a></li>
            <li><a href="http://localhost/website/public/">Home</a></li>
            <li><a href="http://localhost/website/public/skill">My Skills</a></li>
            <li><a href="http://localhost/website/public/recommendation">Recommendation</a></li>
            <li><a href="http://localhost/website/public/latestwork">Latest Works</a></li>
            <li><a href="http://nithyabalasundar.uta.cloud/">Blog</a></li>
            <li><a href="http://localhost/website/public/hire">Hire Me</a></li>



                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}"></a>
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                            <li><a href="{{ route('register') }}">SIGNUP</a></li>

                        @else
                            <li><a href="{{ route('login') }}">LOGIN</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">SIGNUP</a></li>
                            @endif
                        @endauth

                @endif


          </ul>
        </nav>
          <div class="info">
                    <h1 class="head">Welcome to my website</h1>
                    <p class="intro">It is a great pleasure for me to receive your visit and<br>that my professional information is of your liking and meets what you are looking for.</p>
                    <a href="nithya resume.pdf" download>

                    <button class="btn"><i class="fa fa-download"></i><font color="black"> <b>Download Resume</b></font></button></a>

                </div>
        </div>
<div class="footerme">
<nav>
          <ul>
          <li><a href="http://localhost/website/public/">Home</a></li>
          <li><a href="http://localhost/website/public/skill">My Skills</a></li>
          <li><a href="http://localhost/website/public/recommendation">Recommendation</a></li>
          <li><a href="http://localhost/website/public/latestwork">Works</a></li>
          <li><a href="http://localhost/website/public/contacts/create">Contact Form </a></li>
          <div class="ic">
          <li><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/goog.jpg" ;    style="width:100%;height:30%;" ></li>
          <li><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/twitter.jpg" style="width:100%;height:30%;" ></li>
</div>
        </ul>
      </nav>


      <div id="login">
     <div class="header">
                     Log in<button onclick="document.getElementById('login').style.display='none';" class="closeBtn">X</button>
               </div>

               </div>

          <div id="checkin">
                 <div class="header">
                       check in<button onclick="document.getElementById('checkin').style.display='none';" class="closeBtn">X</button>
                 </div>

          <div class="form">
                 <form action="home.php" method="post" onclick="validateform_login()">
                   <label>User:</label><br>
                   <input type="text" id="user" placeholder="Enter a valid username" pattern="[A-Za-z]{15}" title="ALPHABETS ONLY" name="username">

                   <br><br>
                   <label>Password:</label><br>
                   <input type="text" id="pass" placeholder="Enter a valid password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})"
                   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                   required>
     </form>
     </div>

     <div class="form">
       <form action="welcome.blade.php" method="post" onclick="validateform_signup()">
                     <label>Name:</label><br>
                     <input type="text" placeholder="Enter a valid name"  pattern="[A-Za-z]{15})" title="ALPHABETS ONLY" name="name" id="name" required >


                     <br><br>
                     <label>Email:</label><br>
                     <input type="email" placeholder="Enter a valid email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" name="email" id="email" required>


                     <label>Password:</label><br>
                     <input type="password" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="password" id="password" required >

                     <br><br>
                     <label>Repeat Password:</label><br>
                     <input type="password" placeholder="Enter your password again" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="repeatpassword" id="repeatpassword" required>


                 <div class="footer">
                   <button class="primaryBtn">Save</button>
                   <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>
                  </div>
             </form>

           </div>
     </div>

</body>

</html>
