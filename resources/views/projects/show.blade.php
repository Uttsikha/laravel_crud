@extends('master')
@section('content')
<h1>Project Details</h1>
    <h1>{{ $project->title }}</h1>
    <div>{{ $project->description }}</div>
    <p><a href="/projects/{{$project->id}}/edit">Edit</a></p>
@endsection