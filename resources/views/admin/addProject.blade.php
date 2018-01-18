@extends('admin.master')

@section('content')
<div class="container" style="min-height:500px">
  <div class="jumbotron">

    <h1 align="center">Admin - Add project</h1><br>

  </div>

  <div class="col-md-6">
    @if (session('msg'))
      <p class="alert alert-success">{{ session('msg') }}</p>
  @endif
    <form action="{{url('/admin/submitProject')}}" method="post" enctype="multipart/form-data">
      {{CSRF_field()}}
      <table class="table table-hover">
        <tr>
          <td>Heading</td>
          <td><input type="text" name="heading" class="form-control"></td>
        </tr>

        <tr>
          <td>Category</td>
          <td>
            <input type="radio" value="laravel" name="category" checked>Laravel
            <input type="radio" value="reactNative" name="category">React Native
          </select>
        </td>
        </tr>

        <tr>
          <td>DP - Image</td>
          <td><input type="file" name="dp" class="form-control"></td>
        </tr>

        <tr>
          <td>Info</td>
          <td><textarea name="info" class="form-control"></textarea></td>
        </tr>

        <tr>

          <td colspan="2" align="right"><input type="submit" class="btn btn-success btn-lg"></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="col-md-6"></div>
</div>

@endsection
