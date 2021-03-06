<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <script defer src="/fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/Web.js"></script>
    <script src="scripts/Validation.js"></script>
</head>

<body>
    <div class="grid cent">
        <h1 class="heading">New Album</h1>
        <form action="create.php" method="POST">

            <div class="grid input-div">
                <label for="name">Name of the album</label>
                <input class="text-input" type="text" name="name" id="name">
                <div class="invalid-input">Please enter a name</div>
            </div>

            <div class="grid input-div">
                <label for="album-release">Released on</label>
                <input type="number" name="album-release" id="album-release">
                <div class="invalid-input">Please enter at valdi year</div>
            </div>

            <label for="artist">Artist:</label>

            <?php $artists = ["martin_garrix" => "Martin Garrix", "san_holo" => "San Holo", "droeloe" => "Droeloe", "rl-grime" => "RL Grime", "tiesto" => "Tiësto"]  ?>
            <select name="artist" id="artist" class="">
                <?php foreach($artists as $key => $name): ?>
                    <option value="<?php echo $key;?>"><?php echo $name; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="input-div">
                <label for="album-type">Album type</label>
                <div id="" class="album-type-div flex input-div">
                    <div>
                        <input type="radio" name="album-type" id="single">
                        <label for="single">Single</label>
                    </div>
                    <div>
                        <input type="radio" name="album-type" id="EP">
                        <label for="single">EP</label>
                    </div>
                    <div>
                        <input type="radio" name="album-type" id="Album">
                        <label for="single">Album</label>
                    </div>
                </div>
                <div class="invalid-input">Please select an album type</div>
            </div>

            <label for="album-description">Description:</label>
            <textarea name="album-description" id="album-description" cols="30" rows="10"></textarea>
            <div class="grid song-input-div input-div">
                <label>Songs:</label>
                <div class="song-list grid">
                    <div class="song">
                        <input class="song-input" type="text" name="song[]">
                        <button type="button"class="delete-song-btn" disabled="disabled">
                            <i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <button type="button" class="new-song-btn" id="new-song-button">Add new song</button>
                <div class="invalid-input">Please fill out all the fields</div>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>