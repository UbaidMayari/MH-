<!DOCTYPE html>
<html>
<head>
  <title>SLIM</title>
  <link rel="stylesheet" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
 <a class="navbar-brand" href="#">MAQBOOL HUSSAIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="FPA_form.php">FPA</a></li>
      <li><a href="SLIM_form.php">SLIM</a></li>
      <li><a href="cocomo_form.php">COCOMO</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<form class="cf" action="slim.php" method="POST">
    <div class="half left cf">
      <h3>SLIM</h3>
        <label>Line Of Code: </label>
            <input type="number" name="loc" id="input-name" placeholder="Only number allowed">
            <br><br>
        <label>Technology Contant</label>
            <input type="number" name="c" id="input-name" placeholder="Only number allowed">
            <br><br>
        <label>Development</label>
            <input type="number" name="t" id="input-name" placeholder="Only number allowed">
            <br><br>

<!--
# k -> total life cycle effort in working years

formula:
     
    K=(LOC / (C * t4/3 ) ) *3 

-->
  </div>
  <input type="submit" name="sub" value="Submit" id="input-submit">
</form>
</div>
</body>
</html>