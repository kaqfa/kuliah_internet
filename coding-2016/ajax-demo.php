<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Judul Aplikasi</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div id="main-content">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Samping</div>
                    <div class="panel-body">
                        <ul class="list-group">
                          <li class="list-group-item">
                           <a href="" class="link-menu">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            Menu Pertama
                            <span class="badge">14</span>
                            </a>
                          </li>
                          <li class="list-group-item">
                            <a href="" class="link-menu">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            Menu Kedua
                            <span class="badge">14</span>
                            </a>
                          </li>
                          <li class="list-group-item">
                            <a href="" class="link-menu">
                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Menu Ketiga
                            <span class="badge">14</span>
                            </a>
                          </li>
                          <li class="list-group-item">
                            <a href="#" class="link-menu"
                            onclick="loadPage('http://localhost/internet/coding-2016/mahasiswa-json.php')">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            Menu Keempat
                            <span class="badge">14</span>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8" >
              <h3>Tampilan di sini</h3>
              <div id="main-area">

              </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    var loadPage = function (thePage){
      $.getJSON(thePage, function(jsonData){
          console.log(jsonData);
           htmlText = '<table id="table_hist" class="table table-striped">';
           htmlText +='<thead><tr><th>NIM</th><th>Nama</th><th>Email</th>';
           htmlText +='<th>IPK</th></tr></thead><tbody>';
           $.each(jsonData, function(i){
             console.log($(this));
             nim = $(this)[0].nim;
             nama = $(this)[0].nama;
             email = $(this)[0].email;
             ipk = $(this)[0].ipk;

             htmlText += '<tr><td>'+nim+'</td><td>'+nama+'</td>';
             htmlText += '<td>'+email+'</td><td>'+ipk+'</td></tr>';
           });
           htmlText += '</tbody></table>';
           theTable = $('#main-area').html(htmlText);
        });
      };



    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
