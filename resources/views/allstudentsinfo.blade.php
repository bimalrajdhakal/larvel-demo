@extends('layouts.app')

@section('content')
<br>
  <h1>All Student Information</h1>
  @if(count($students) > 0)
      @foreach ($students as $student)
          <ul class="list-group">
                <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Edit </a>
                <br>
                <a href="{{route('students.show',$student->id)}}" class="btn btn-primary">View </a>
                <br>
                <form action="{{route('students.destroy',$student->id)}}"  method="POST" onsubmit="return confirm('Do you really want to delete?');">
                              {{  csrf_field() }}
                              {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-block " >Delete </button>
                </form>
                <br>
            <li class="list-group-item">Student Name:{{$student->student_name}} </li>
            <li class="list-group-item">Address:{{$student->address}}</li>
            <li class="list-group-item">Roll No:{{$student->rollno}}</li>
          </ul><br>
      @endforeach
      {{ $students->links() }}
  @endif
@endsection
