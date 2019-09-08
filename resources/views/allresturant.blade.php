@extends('layouts.app')

@section('content')
<br>
  <h1>All Resturant Information</h1>
  @if(count($resturants) > 0)
    @foreach ($resturants as $resturant)
    <a href="{{route('editresturant',$resturant->id)}}" class="btn btn-primary btn-block">Edit </a>
    <br>
    <form action="{{route('deleteresturant',$resturant->id)}}"  method="POST" onsubmit="return confirm('Do you really want to delete?');">
        {{  csrf_field() }}
        <input type="hidden" name="resturantid" class="form-control" value={{$resturant->id}}>
        <button type="submit" class="btn btn-danger btn-block " >Delete </button>
    </form>

    <ul class="list-group">
    <li class="list-group-item">Resturant Name:{{$resturant->name}} </li>
    <li class="list-group-item">Address:{{$resturant->address}}</li>
    <li class="list-group-item">Contact Number:{{$resturant->contactno}}</li>
    <li class="list-group-item">Extra Info:{{$resturant->extra_info}}</li>
    </ul><br>

    @endforeach

    {{ $resturants->links() }}


  @endif


@endsection