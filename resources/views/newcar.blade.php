<!DOCTYPE html>
<html>
    <head>
        <title>Add New Car</title>
    </head>
    <body>
        <h2>Add New Car</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="/car" enctype="multipart/form-data">
            @csrf
            Car Make: <input type="text" name="make"><br>
            Car Model: <input type="text" name="model"><br>
            Produced On: <input type="date"  name="produced_on"><br>
            Image: <input type="file" required name="image"><br>
            <input type="submit" name="submit_btn" value="Save">
        </form>
    </body>
</html>