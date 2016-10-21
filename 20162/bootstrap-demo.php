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
               <div id="tampil"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">Form Input</div>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Angka 1</label>
                            <input type="text" class="form-control" id="angka1" placeholder="Angka 1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Angka 2</label>
                            <input type="text" class="form-control" id="angka2" placeholder="Angka 2">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Operator</label>
                            <select id="operator" class="form-control">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="x">x</option>
                                <option value="/">/</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-default" onclick="action()">Submit</button>
                          <h3 id="hasil">
                              Hasil Perhitungan
                          </h3>
                    </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">Panel heading without title</div>
                  <div class="panel-body">
                    <table id="table_hist" class="table table-striped">
                     <thead>
                      <tr>
                          <th>NO</th>
                          <th>Nilai 1</th>
                          <th>Nilai 2</th>
                          <th>Operator</th>
                          <th>Hasil</th>
                      </tr>
                       </thead>
                       <tbody>

                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        function action(){
            var jumlah = hitung();
            var angka1 = parseInt(document.getElementById("angka1").value);
            var angka2 = parseInt(document.getElementById("angka2").value);
            var operator = document.getElementById("operator").value;

            jqAddRow("1", angka1, angka2, operator, jumlah);
        }

        // fungsi untuk menambahkan baris setelah baris terakhir
        function addRow(text1, text2, text3, text4, text5){
            // select table
            theTable = document.getElementById('table_hist').getElementsByTagName('tbody')[0];

            // add last row
            newRow = theTable.insertRow(-1); // tr

            // create cells
            newCell1 = newRow.insertCell(0); // td
            newCell2 = newRow.insertCell(1); // td
            newCell3 = newRow.insertCell(2); // td
            newCell4 = newRow.insertCell(3); // td
            newCell5 = newRow.insertCell(4); // td

            // create texts
            theText1 = document.createTextNode(text1);
            theText2 = document.createTextNode(text2);
            theText3 = document.createTextNode(text3);
            theText4 = document.createTextNode(text4);
            theText5 = document.createTextNode(text5);

            // insert texts to cels
            newCell1.appendChild(theText1);
            newCell2.appendChild(theText2);
            newCell3.appendChild(theText3);
            newCell4.appendChild(theText4);
            newCell5.appendChild(theText5);
        }

        function jqAddRow(teks1, teks2, teks3, teks4, teks5){
            row = '<tr><td>'+teks1+'</td><td>'+teks2+'</td><td>'+teks3+'</td><td>'+teks4+'</td><td>'+teks5+'</td></tr>';
            $('#table_hist').append(row);
        }

        function hitung(){
            var angka1 = parseInt(document.getElementById("angka1").value);
            var angka2 = parseInt(document.getElementById("angka2").value);
            var operator = document.getElementById("operator").value;
            var jumlah = 0;

            if(operator == "+"){
                jumlah = angka1+angka2;
            } else if(operator == "-"){
                jumlah = angka1-angka2;
            } else if(operator == "x"){
                jumlah = angka1*angka2;
            } else {
                jumlah = angka1/angka2;
            }

            document.getElementById("hasil").innerHTML = jumlah;
            return jumlah;
        }

        function hitung2(){
            var angka1 = parseInt($("#angka1").val());
            var angka2 = parseInt($("#angka2").val());
            var operator = $("#operator").val();
            var jumlah = 0;

            if(operator == "+"){
                jumlah = angka1+angka2;
            } else if(operator == "-"){
                jumlah = angka1-angka2;
            } else if(operator == "x"){
                jumlah = angka1*angka2;
            } else {
                jumlah = angka1/angka2;
            }

            $("#hasil").html(jumlah);
            return jumlah;
        }
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
