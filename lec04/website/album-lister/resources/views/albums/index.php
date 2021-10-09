<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/Getting.js"></script>
    <title>Album Viewer</title>
</head>

<body>
    <h1>Welcome to the Album Viewer</h1>

    <div>
        <h2>Albums:</h2>
        <div id="albums">
            <?php foreach ($albums as $album) : ?>
                <p> Name: <?php echo $album->name ?> &emsp;
                Artist: <?php echo $album->artist->name ?> &emsp;
                Song count: <?php echo count($album->songs)?>
                </p>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo route("albums.create") ?>"><button>Add new Album</button></a>
    </div>
</body>

</html>
