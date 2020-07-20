<!DOCTYPE html>
<html>
    <head>
        <title>Reviews</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Review</td>
            </tr>
            @foreach ($review as $rev)
                <tr>
                    <td>{{ $rev->review }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>