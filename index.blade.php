
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>worktitle</th>
        <th>workdesc</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <tfoot>
	<tr>
	<td>
          <form action="{{action('LatestworkController@create')}}" method="get" onclick="re turn redirect()->back();">
            {{csrf_field()}}
            <input name="_methodback" type="hidden" value="BACK">
            <button class="btn btn-danger" type="submit">Back</button>
          </form>
        </td>
	</tfoot>
      @foreach($latestworks as $latestworks)
      <tr>
        <td>{{$latestworks['id']}}</td>
        <td>{{$latestworks['worktitle']}}</td>
        <td>{{$latestworks['workdesc']}}</td>



        <td><a href="{{action('LatestworkController@edit', $latestworks['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('LatestworkController@destroy', $latestworks['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  </div>
  </body>
</html>
