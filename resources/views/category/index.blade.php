@extends('template')
@section('content')
<div class="container py-5">
  <h1>Category Table</h1>
<table border="1" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>
      <td><form method="post" action="{{route('category.destroy',$row->id)}}">
            @csrf
            @method('DELETE')
         <input type="submit" name="delete" class="btn btn-danger float-right mx-2" value="Delete" onclick="return confirm('Are you sure to delete')">
        </form></td>
    </tr>
    @endforeach
  </tbody>
  
</table>
</div>
@endsection