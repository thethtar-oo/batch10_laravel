@extends('template')

@section('content')
<div class="container py-5">
 <!--  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">@csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Title:</label>
    <input type="title" class="tovalidate1 form-control" aria-describedby="emailHelp" name="title">
    @if($errors->has('title'))
    <span class="text-danger">{{$errors->first('title')}}</span>
    <style type="text/css">
      .tovalidate1{
        border:1px solid #e74c3c;
      }
    </style>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea name="content" class="tovalidate2 form-control" ></textarea>
     @if($errors->has('title'))
    <span class="text-danger">{{$errors->first('title')}}</span>
    <style type="text/css">
      .tovalidate2{
        border:1px solid #e74c3c;
      }
    </style>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo:</label>
    <span class="text-danger">[supported file types:jpeg,png]</span>
    <input type="file" name="photo" class="tovalidate3 form-control">
    @if($errors->has('title'))
    <span class="text-danger">{{$errors->first('title')}}</span>
    <style type="text/css">
      .tovalidate3{
        border:1px solid #e74c3c;
      }
    </style>
    @endif
  </div>
  <div class="form-group">
    <label>Categories:</label>
    <select name="category" class="tovalidate4 form-control">
      <option value="">Choose Category</option>


     {-- accept data and loop --} 
      @foreach($categories as $row)
      <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
    </select>
    @if($errors->has('title'))
    <span class="text-danger">{{$errors->first('title')}}</span>
    <style type="text/css">
      .tovalidate4{
        border:1px solid #e74c3c;
      }
    </style>
    @endif
  </div>
  <div class="form-group">
    <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
  </div>
  </form>
  </div>

@endsection