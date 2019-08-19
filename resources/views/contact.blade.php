@extends('layouts.app')

@section('content')
<br>
  <h1>Contact</h1>
  <form action="{{route('contactsubmit')}}" method="POST">
    {{ csrf_field() }} 
    <div class="form-group">
      <label >Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label >Message</label>
      <textarea name="message" class="form-control" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
