@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <center><a href="http://localhost/website/public/" class="btn btn-success">CLICK HERE TO GO BACK TO HOME</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
