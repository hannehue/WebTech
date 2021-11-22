<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Album</title>
        <link href="<?php

use App\Models\Artist;

echo asset("fontawesome-free-5.15.4-web/js/all.css")?>" rel="stylesheet">
        <script defer src="<?php echo asset("fontawesome-free-5.15.4-web/js/all.js")?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="<?php echo asset("js/Web.js")?>"></script>

        <link rel="stylesheet" href="<?php echo asset("css/style.css")?>">
</head>

<body>
    <div class="grid cent">
        <h1 class="heading">New Album</h1>
        <form action="<?php echo route("albums.new") ?>" method="POST">
            <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <ul>
            <?php foreach($errors->all() as $error): ?>
              <li><?php echo $error;?></li>
            <?php endforeach; ?>
            </ul>
          <?php endif; ?>

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

            <select name="artist" id="artist" class="">
                <?php foreach($artists as $artist): ?>
                    <option value="<?php echo $artist->id;?>"><?php echo $artist->name; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="input-div">
                <label for="album-type">Album type</label>
                <div id="" class="album-type-div flex input-div">
                    <div>
                        <input type="radio" name="album-type" id="single" value="single">
                        <label for="single">Single</label>
                    </div>
                    <div>
                        <input type="radio" name="album-type" id="EP" value="ep">
                        <label for="single">EP</label>
                    </div>
                    <div>
                        <input type="radio" name="album-type" id="Album" value="album">
                        <label for="single">Album</label>
                    </div>
                </div>
                <div class="invalid-input">Please select an album type</div>
            </div>

            <label for="album-description">Description:</label>
            <textarea name="album-description" id="album-description" cols="30" rows="10"></textarea>
            <div class="grid song-input-div input-div">
                <label>Songs:</label>
                <div class="songs grid">
                    <div class="song">
                        <input class="song-input" type="text" name="songs[]">
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
    <a href="{{route('albums.index')}}">Go Back</a>

</body>

</html>
