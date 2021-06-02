
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="{{asset('css/formstyle.css')}}" rel="stylesheet" />

</head>
<body>
<div class="header">
            <h2>Have a project you'd like to discuss</h2></div>

            <form method="post" action="{{URL::to('/store')}}">

                    <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter a valid text" pattern="[A-Za-z]" title="ALPHABETS ONLY" value=""required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter a valid email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="ALPHABETS ONLY" value=""required>
        </div>
        <div class="input-group">
            <label>Message</label>
            <input type="text" name="message" placeholder="Enter a valid message more than 2 letters" pattern="[A-Za-z]" title="ALPHABETS ONLY" value=""required>
        </div>
              <div class="input-group">
            <button type="submit" name="contact_us" class="btn"><a href="mailto:bnithya97@gmail.com?Subject=Hello%20again" >SEND</a></button>
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>
            </body>
</html>
