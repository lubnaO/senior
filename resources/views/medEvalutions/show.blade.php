@extends('layouts.app') 


@section('content')
<<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header top-bar pl-3 text-white">Annoancment</h5>
  <div class="card-body">
    <h5 class="card-title ">final report from student</h5>

<ul>@foreach ($medEvalutions as $medEvalution)


<li><a href="{{url('storage/'.$medEvalution->medfile)}}">file</a></li>


@endforeach
</ul>

@endsection 