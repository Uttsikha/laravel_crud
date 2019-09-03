<html>
    <head></head>
    <body>
    <h1>Create a Project</h1>
        <form method="POST" action="/projects">
        @csrf
        <div>
                <input type="text" name="title" placeholder="Project Title" required value="{{old('title')}}">
            </div>
            <div>
                <textarea type="text" name="description" placehloder="Project Description" required value="{{old('description')}}"> </textarea>
            </div>
            <div>
                <button type="submit">Create Project </button>   
            </div>
                @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
        </form>
    </body>
</html>