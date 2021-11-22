<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$album->name</title>
</head>
<body>
    <?php if (session()->has('message')): ?>
        <p>{{session()->get('message')}}</p>
    <?php endif; ?>

    <p>Album name: {{$album->name }}</p>
    <p>Artist: {{$album->artist->name}}</p>
    <p>Release year: {{$album->release}}</p>
    <p>Songs: {{count($album->songs)}}</p>
    <a href="{{route('albums.index')}}">Go Back</a>
</body>
</html>