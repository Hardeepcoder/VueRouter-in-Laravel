@extends('admin.master')

@section('content')
<div class="container" style="min-height:500px">
  <div class="jumbotron">

    <h1 align="center">Admin</h1><br>
    <div class="col-md-10 col-md-push-1">
      <div class="col-md-3"><a href="{{url('/admin/addProject')}}"
        class="btn btn-default btn-lg">Add Project</a></div>

        <div class="col-md-3"><a href="{{url('/admin/projects')}}" class="btn btn-danger btn-lg">Add Projects</a></div>

        <div class="col-md-3"><a href="" class="btn btn-primary btn-lg">Add portfolio</a></div>

        <div class="col-md-3"><a href="" class="btn btn-success btn-lg">Add portfolio</a></div>

    </div>

  </div>

</div>

@endsection
