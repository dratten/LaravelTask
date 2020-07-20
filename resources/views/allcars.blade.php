<!DOCTYPE html>
<html>
    <head>
        <title>All Cars</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Make</td>
                <td>Model</td>
                <td>Produced On</td>
            </tr>
            @foreach ($cars as $Car)
                <tr>
                    <td>{{$Car->make}}</td>
                    <td>{{$Car->model}}</td>
                    <td>{{$Car->produced_on}}</td>
                    <td><img src="{{ Storage::url($Car->image)  }}" alt="Car image "></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>