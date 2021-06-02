latestworks
@php
  $values = explode(",", $latestworks->checkbox);
@endphp

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('LatestworkController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="id">id</label>
            <input type="text" class="form-control" name="id" value="{{$latestworks->id}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="worktitle">worktitle</label>
              <input type="text" class="form-control" name="worktitle" value="{{$latestworks->worktitle}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="workdesc">workdesc</label>
              <input type="text" class="form-control" name="workdesc" value="{{$latestworks->workdesc}}">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <center><button type="submit" class="btn btn-success" style="margin-left:38px">Update</button></center>
          </div>
        </div>
      </form>
      <center><a href="http://localhost/website/public/" class="btn btn-success">CLICK HERE TO GO BACK TO HOME</a></center>
      <br>
      <center><a href="{{ url()->previous() }}" class="btn btn-success">PREVIOUS PAGE</a></center>
      

    </div>
  </body>
</html>
