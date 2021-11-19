<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        loadFile();
        let responseText = null;
        let data = null;
        function loadFile() {
            $.post({
                url: "<?php echo route('ajax.4.call')?>",
                data: {
                        msg : "One more album",
                        error : 0,
                        _token: "<?php echo csrf_token()?>"
                }})
                .done(function(result){
                    data = result;
                    let ul = $('#list');
                    for (album of data['albums']) { 
                        let li = $("<li></li>").appendTo(ul);
                        li.text(album['name']);
                    }
                })
                .fail(function() {
                    alert("ERROR!");
                });
        }
      });
    </script>
  </head>
  <body>

    <ul id='list'>
        
    </ul>      
  </body>
</html>
