@extends('layouts.app')

@section('content')
<br>
  <h1>Create Resturant Page</h1>
  <form action="{{route('updateresturant')}}" method="POST">

    {{ csrf_field() }} 
   
    <div class="form-group">
      <label >Resturant Name</label>
      <input type="text" name="name" class="form-control" value={{$resturant->name}}>
    </div>
    <input type="hidden" name="resturantid" class="form-control" value={{$resturant->id}}>
    <div class="form-group">
      <label >Address</label>
      <input type="text" name="address" class="form-control" value = {{$resturant->address}}>
    </div>
    <div class="form-group">
      <label >Contact No</label>
      <input type="number" name="contactnumber" class="form-control" value={{$resturant->contactno}}>
    </div>
    <div class="form-group">
        <label >Extra Info</label>
        <textarea name="extrainfo" class="form-control" >{{$resturant->extra_info}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
