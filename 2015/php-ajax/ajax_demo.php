<!DOCTYPE html>
<html lang="en">
<script src="../admin_bs/js/jquery.js"></script>
<script>
    var loadPage = function (thePage){
      $.ajax( thePage )
       .done(function(content) {
         $('#ajax_area').html(content);
       })
       .fail(function() {
         alert( "error" );
       });
    };
</script>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h2>Contoh AJAX</h2>
    <input type="button" onclick="loadPage('http://localhost/internet/coding-2015/php-ajax/dynamic_data.php')"
        value="Tampil Data dari Server" />
        <hr/>
    <div id="ajax_area"></div>
</body>

</html>
