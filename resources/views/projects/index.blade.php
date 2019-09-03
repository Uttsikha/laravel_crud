<html>
    <body>
    <ul>
          @foreach ($projects as $project)
          <li>
            <a href="/projects/{{$project->id}}"> {{$project->title}}</a>
          </li>
        
        
        @endforeach
        </ul>
  
    </body>
</html>