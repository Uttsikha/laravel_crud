<html>
    <head></head>
    <body>
        <form method="POST" action="/projects">
        @csrf
        <div>
                <input type="text" name="title" placeholder="Project Title">
            </div>
            <div>
                <textarea type="text" name="description" placehloder="Project Description"> </textarea>
            </div>
            <div>
                <button type="submit">Create Project </button>   
            </div>

        </form>
    </body>
</html>