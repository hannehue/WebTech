<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Created album</title>
</head>
<body>
    <h1>Created new album: <?php echo $_POST['name'] ?></h1>

    <div class="album-info">
        <div class="album-item">
            <label>Album name: <?php echo $_POST['name'] ?></label>
        </div>
        <div class="album-item">
            <label>Album release year: <?php echo $_POST['album-release'] ?></label>
        </div>
        <div class="album-item">
            <label>Artist: <?php echo $_POST['artist'] ?></label>
        </div>
        <div class="album-item">
            <label>Type of album: <?php echo $_POST['album-type'] ?></label>
        </div>
        <div class="album-item">
            <label>Album description: <?php echo $_POST['album-description'] ?></label>
        </div>
        <div class="album-item">
            <label>Number of songs: <?php echo count($_POST['song']);?></label>
        </div>


    </div>

</body>
</html>
