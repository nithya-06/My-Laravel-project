
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create A Form</h2><br  />
      @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div><br />
     @endif
     @if (\Session::has('success'))
     <div class="alert alert-success">
         <p>{{ \Session::get('success') }}</p>
     </div><br />
     @endif

      <form method="post" action="{{url('latestworks')}}">
            {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="id">id</label>
            <input type="text" class="form-control" name="id">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="worktitle">worktitle</label>
              <input type="text" class="form-control" name="worktitle">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="workdesc">workdesc</label>
            <input type="text" class="form-control" name="workdesc">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <center><button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></create>
              <center><a href="http://localhost/website/public/" class="btn btn-success">CLICK HERE TO GO BACK TO HOME</a></center>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
