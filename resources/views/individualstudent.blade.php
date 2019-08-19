@extends('layouts.app')

@section('content')
<br>
<a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
  <h1>Student Information of ({{$student->student_name}})</h1>

    <div class="form-group">
      <label >Student Name:{{$student->student_name}}</label>
    </div>
    <div class="form-group">
      <label >Address:{{$student->address}}</label>
    </div>
    <div class="form-group">
      <label >Roll No:{{$student->rollno}}</label>
    </div>


@endsection

