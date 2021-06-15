<!DOCTYPE html>
<html>
<head>
  <title>COCOMO</title>
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
<form class="cf" action="cocomo.php" method="POST">
    <div class="half left cf">
      <h3>COCOMO</h3>
        <label></label>
            <input type="number" name="num" id="input-name" placeholder="Only number allowed">
            </div>
  <input type="submit" name="sub" value="Submit" id="input-submit">
</form>

</div>
</body>
</html>