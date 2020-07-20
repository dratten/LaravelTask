<!DOCTYPE html>
<html>
    <head>
        <title>Car {{$Car->id}}</title>
    </head>
    <body>
        <h1>Car {{$Car->id}}</h1>
        <ul>
            <li>Make: {{$Car->make}}</li>
            <li>Model: {{$Car->model}}</li>
            <li>Produced On: {{$Car->produced_on}}</li>
            <li><img src="{{ Storage::url($Car->image)  }}" alt="Car image "></li>
        </ul>
    </body>
</html>