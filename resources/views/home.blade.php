@extends('layouts.app')


@section('content')
<br>
  <h1>Home</h1>
  <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, commodi similique. Dolores, incidunt fugiat vel itaque nam velit nobis. Iste, dolorem vero. Iste fuga sapiente excepturi esse sunt dolorum recusandae? 
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, commodi similique. Dolores, incidunt fugiat vel itaque nam velit nobis. Iste, dolorem vero. Iste fuga sapiente excepturi esse sunt dolorum recusandae?
  </p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection