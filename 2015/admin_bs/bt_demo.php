<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      .boxed{border: 1px #444 solid; background: #ddd; text-align: center;}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-offset-1 col-md-7">
        <form>
          <div class="form-group">
            
            <label for="exampleInputEmail1"> 
              <span class="glyphicon glyphicon-envelope" style="color:blue;" aria-hidden="true"></span>
              Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="col-md-4 boxed">.col-md-4</div>
    </div>

    <table class="table table-striped">
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
      <tr>
        <td>col 1</td>
        <td>col 2</td>
        <td>col 3</td>
        <td>col 4</td>
      </tr>
    </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>