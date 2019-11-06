@extends('template')

@section('content')
<div class="container py-5">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">@csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="name" class="form-control" aria-describedby="emailHelp" name="name">
 
  <div class="form-group">
    <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
  </div>
  </form>
  </div>

@endsection