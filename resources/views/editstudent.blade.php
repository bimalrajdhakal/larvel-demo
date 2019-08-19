@extends('layouts.app')

@section('content')
<br>
  <h1>Student Information </h1>
  <form action="{{route('students.update',$student->id)}}"  method="POST" >
  {{ method_field('PATCH') }}
    {{ csrf_field() }} 
    <div class="form-group">
      <label >Student Name</label>
      <input type="text" name="name" class="form-control" value="{{$student->student_name}}">
    </div>
    <div class="form-group">
      <label >Address</label>
      <input type="text" name="address" class="form-control" value="{{$student->address}}">
    </div>
    <div class="form-group">
      <label >Roll No</label>
      <input type="number" name="rollno" class="form-control" value="{{$student->rollno}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

