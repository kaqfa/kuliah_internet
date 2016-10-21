<!DOCTYPE html>
<html>
<head>
	<title>Judul PHP</title>
</head>
<body>
	<div>
   <?php
    echo '<h1> The Tittle </h1>';    
    echo '<p id="main">This is a content in the document.</p>';    
   ?> 
   <p>This is another paragraph.</p>
   <table border="1">
      <thead>
        <tr>
          <th>Num</th>
          <th>Head 1</th>
          <th>Head 2</th>
          <th>Head 3</th>
          <th>Head 4</th>
          <th>Head 5</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < 100; $i++) { 
            echo '<tr>
                  <td>'.($i+1).'</td>
                  <td>Data 1</td>
                  <td>Data 2</td>
                  <td>Data 3</td>
                  <td>Data 4</td>
                  <td>Data 5</td>
                </tr>';
              }
          ?>
      </tbody>
    </table>     
  </div>
</body>
</html>