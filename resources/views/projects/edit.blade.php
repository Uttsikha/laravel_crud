@extends('master')
@section('content')

    <h1>Edit the Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
       @method('PATCH')
        @csrf
        
        <div>
                <input type="text" name="title" placeholder="Project Title" value ="{{$project->title}}"/>
            </div>
            <div>
                <textarea type="text" name="description" placehloder="Project Description">{{$project->description}} </textarea>
            </div>
            <div>
                <button type="submit">Update Project </button>   
            </div>
            </form>
    
            <form method="POST" action="/projects/{{ $project->id }}">
              @method('DELETE')
               @csrf
             
               <div>
                <button type="submit">Delete Project </button>   
            </div>

        </form>
@endsection
