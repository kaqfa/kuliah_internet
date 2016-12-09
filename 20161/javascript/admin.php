<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Bootstrap 101 Template</title>
    <link href="../bootstrap_demo/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{ padding-top: 80px; }
      .widget {background-color: #444; color: white; 
              text-align: center; font-weight: bold;}
      .widget p{font-size: 17px;}
    </style>       
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
          <a class="navbar-brand" href="#">Proyek Aplikasi Bootstrap Pertama</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-3" id="menu-section">
          <div class="panel panel-default">
            <div class="panel-heading">Menu Pinggir</div>
            <div class="panel-body">
              <ul>
                <li><a href="">Menu 1</a></li>
                <li><a href="">Menu 2</a></li>
                <li><a href="">Menu 3</a></li>
                <li><a href="">Menu 4</a></li>
                <li><a href="">Menu 5</a></li>
              </ul>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body widget">
              <h1>12</h1>
              <p>Pengunjung Baru</p>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body widget">
              <h1>15</h1>
              <p>Buku Baru</p>
            </div>
          </div>

        </div>
        <div class="col-md-9" id="content-section">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">Calculator Form</div>
                <div class="panel-body">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Number 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="num1" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Operator</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="" id="operator">
                          <option value="+">+</option>
                          <option value="-">-</option>
                          <option value="x">x</option>
                          <option value="/">/</option>
                        </select>
                      </div>
                    </div>                  
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Number 2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="num2" >
                      </div>
                    </div>                                      
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">
                      Result</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                          <input type="text" class="form-control" id="result">
                        </div>
                      </div>
                    </div>                                        
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" onclick="addHistory2()" class="btn btn-primary">Calculate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-warning">
                <div class="panel-heading">Calculation History</div>
                <div class="panel-body">
                  <table class="table table-striped" id="tabel_riwayat">
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">Tag History</div>
                <div class="panel-body">
                  <div class="form-horizontal">                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">
                      Tags (separated by comma)</label>
                      <div class="col-sm-10">
                        <textarea name="tagText" id="tagText" class="form-control"></textarea>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" onclick="" class="btn btn-primary">Save the Tags</button>
                      </div>
                    </div>
                  </div>
                  <table id="table_tags" class="table table-striped">
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>

    </div><!-- /.container -->    
    <script src="../bootstrap_demo/js/jquery.js"></script>
    <script src="../bootstrap_demo/js/bootstrap.min.js"></script>
    <script src="calculator.js"></script>
  </body>
</html>