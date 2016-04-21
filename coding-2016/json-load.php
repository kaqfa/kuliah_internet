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

    <script type="text/javascript">
        function getMessage() {
            var amount = Math.round(Math.random() * 100000);
            var message = "You won $" + amount + "!\n" +
            "To collect y g , y our winnings, send your credit card\n" +
            "and bank details to oil-minister@phisher.com.";
            return(message);
        }

        function showWinnings1() {
            alert(getMessage());
        }

        function showWinnings2() {
            document.write("<h1><blink>"+getMessage()+"</blink></h1>");
        }

        function showWinnings3(){
            document.getElementById("tampil").innerHTML = getMessage();
        }

        function arrayLoops() {
            var names = ["Joe", "Jane", "John"];
            printArray2(names);
            names.length = 6;
            printArray2(names);
        }

        function printArray2(array) {
            for(var i in array) {
                console.log("[printArray2] array[%o] is %o", i, array[i]);
            }
        }

    </script>

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
                            <a href="" class="link-menu">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            Menu Keempat
                            <span class="badge">14</span>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-heading">Data Mahasiswa</div>
                  <div class="panel-body">
                    <table id="table_hist" class="table table-striped">
                     <thead>
                      <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>IPK</th>
                      </tr>
                       </thead>
                       <tbody>

                        </tbody>
                    </table>
                    <input type="submit" value="Hitung Rata" onclick="hitung()">
                    <span id="total"></span>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $.ajax({
              dataType: "json",
              url: "mhs.json",
              success: function(json){
                for( i in json ){
                    console.log(json[i]);
                    row = '<tr><td>'+(1+parseInt(i))+'</td><td>'+json[i].nim+'</td><td>'+json[i].nama+'</td><td>'+json[i].alamat+'</td><td class="ipk">'+json[i].ipk+'</td></tr>';
                    $('#table_hist').append(row);
                }
              }
            });
        });

        function hitung(){
            var total = 0;
            var i = 0;
            $('.ipk').each(function(index){
                total += parseFloat($(this).text());
                i++;
            });

            $('#total').html( total/i );
        }
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
