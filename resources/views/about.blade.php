@extends('layouts.main')

@section('container')
<div class="container">
    <div class="container">
        <h1>Halaman About</h1>
        <h3> {{$name}} </h3>
        <h3> {{$email}} </h3>
    </div>
    <div class="container">
        <img src="img/{{$image}}" alt="{{$name}}" title="{{$name}}" width="300" class="img-thumbnail ">    
    </div>

</div>
@endsection 