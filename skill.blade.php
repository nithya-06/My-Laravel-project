@php
session_start();

$a=DB::select( 'select major,degree,university,startdate,enddate FROM forms');
$b=DB::select( 'select jobtitle,workdescription,jobposition,companyname,startdate,enddate FROM works');

$result =DB::select ( 'select jobtitle,workdescription,jobposition,companyname,startdate,enddate FROM works');
$results =DB::select( 'select major,degree,university,startdate,enddate FROM forms');


@endphp

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Skills</title>
	<link rel="stylesheet" type="text/css" href="skill.css">
     <link href="{{asset('css/skill.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">

 </head>
 <body>
 	<div class="wrapper">
 <nav>
          <ul  style="font-family: Roboto">
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
            </div>==

            <div class="footer">
              <button class="primaryBtn">Save</button>
              <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>

          </div>
 </div>
</nav>
 <div class="row">
<div class="column1">
 <h1 >SKILLS&<br>EXPERTISE</h1>
 <p>Visual Designer Front-end Developer 3D Designer</p>
 <br><br>
  <img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/profile1.png" height="600" width="500">

  </div>
  <div class="column2">
  <div class="row">
  <div class="column1">
  <br>
  <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo1.JPG" height="60" weight="60" ><br><br>
      <p>BRANDING<br><br>Creating logos and posters <br>your company</p><br><br>
      <br><br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo2.JPG" height="60" weight="60" ><br>
      <p>DESIGNING<br><br>maintaining the quality and<br>productivity in the works to please<br>my clients</p>
    <br>
    </div>
    <div class="row">
    <br>
      <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo3.JPG" height="60" weight="60" ><br><br>
      <p>MARKETING<br><br> Trend designs for a better<br> experience of both images ,logos<br>and websites</p><br><br>
      <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo4.JPG"height="60" weight="60" ><br>
      <p>PROGRAMMING<br><br>Developing applications and systems<br>that meets the needs<br>and the streamlinethe work and<br> experience of users</p><br>
</div>
</div>
<br>
</div>
</div>
<div class="row">
<h2><strong>Smart Digital Solutions </strong><small>A Front-End Developer</small></h2>
<table>
	<tr>
		<td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/device_01.png"></td>
		<td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/device_02.png"></td>
			<td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/device_03.png"></td>
			</tr>
			</table>
</div>
</div>
</div>

<br>
<br>
<br>
<div class="work experience">

            <h4 class="work">WORK EXPERIENCE</h4>
            <p class="work_exp">I am looking to expand my profile while I am on top and while I am young!!</p>

            <br>
						@foreach($result as $row)
            <div class="sec">

							<div class="left sk_left">
								<br><p class="month">{{$row->startdate}}</p>
								<p class="date">{{$row->enddate}}</p>
								<p class="sub">{{$row->companyname}}</p>
								<p class="role">{{$row->jobposition}}</p>
							</div>
							<div class="right sk_right"
							><div class="description">
								<p class="role1">{{$row->jobtitle}}</p>
								<p class="desc">{{$row->workdescription}}</p>
							</div>
						</div>
				</div>
				@endforeach
			<!--	<div class="sec">
					<div class="left sk_left">
						<br><p class="month"></p>
							<p class="date">@php echo $b[1]->enddate;@endphp</p>
							<p class="sub">@php echo $b[1]->companyname;@endphp</p>
							<p class="role">@php echo $b[1]->jobposition;@endphp</p>
						</div>
						<div class="right sk_right">
							<div class="description">
								<p class="role1">@php echo $b[1]->jobtitle;@endphp</p>
								<p class="desc">@php echo $b[1]->workdescription;@endphp</p>
							</div>
						</div>
					</div>
					<div class="sec">
						<div class="left sk_left">
							<br>
							<p class="month"></p>
							<p class="date">@php echo $b[2]->enddate;@endphp</p>
							<p class="sub">@php echo $b[2]->companyname;@endphp</p>
							<p class="role">@php echo $b[2]->jobposition;@endphp</p>
						</div>
						<div class="right sk_right">
							<div class="description">
								<p class="role1">@php echo $b[2]->jobtitle;@endphp</p>
								<p class="desc">@php echo $b[2]->workdescription;@endphp</p>
							</div>
						</div>

					</div>-->

<br>
<div class="education">
            <h4 class="edu">EDUCATION</h4>
            <p class="work_exp">I am looking to expand my profile while I am on top and while I am young!!</p>

            <br>
						@foreach($results as $row)
            <div class="sec">
                 <br><div class="left sk_left">
									 <p class="month">{{$row->startdate}}</p>
									 <p class="date">{{$row->enddate}}</p><hr>
									 <p class="sub">{{$row->degree}}</p>
								 </div>
								 <div class="right sk_right">
									 <div class="description">
										 <p class="subj">{{$row->major}}</p>
										 <p class="desc">{{$row->university}}</p>
									 </div>
								 </div>
							 </div>
	@endforeach

								 <!--
								 <div class="left sk_left">
									 <p class="month">@php echo $a[1]->startdate;@endphp</p>
									 <p class="date">@php echo $a[1]->enddate;@endphp</p>
									 <hr>
									 <p class="sub">@php echo $a[1]->degree;@endphp</p>
								 </div>
								 <div class="right sk_right">
									 <div class="description">
										 <p class="subj">@php echo $a[1]->major;@endphp</p>
										 <p class="desc">@php echo $a[1]->university;@endphp</p>
									 </div></div><hr><br><br><br><br>
									 <div class="left sk_left">
										 <p class="month">@php echo $a[2]->startdate;@endphp</p>
										 <p class="date">@php echo $a[2]->enddate;@endphp</p>
										 <hr>
										 <p class="sub">@php echo $a[2]->degree;@endphp</p>
									 </div>
									 <div class="right sk_right">
										 <div class="description">
											 <p class="subj">@php echo $a[2]->major;@endphp</p>
											 <p class="desc">@php echo $a[2]->university;@endphp</p>
										 </div></div><hr><br><br><br><br>
										 <div class="left sk_left">
											 <p class="month">@php echo $a[3]->startdate;@endphp</p>
											 <p class="date">@php echo $a[3]->enddate;@endphp</p>
											 <hr><p class="sub">@php echo $a[3]->degree;@endphp</p>
										 </div><div class="right sk_right">
											 <div class="description">
												 <p class="subj">@php echo $a[3]->major;@endphp</p>
												 <p class="desc">@php echo $a[3]->university;@endphp</p>
											 </div>
										 </div>
										 <hr>
										 <br><br><br>
-->

</body>
</html>
