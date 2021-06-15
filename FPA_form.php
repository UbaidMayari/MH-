<!DOCTYPE html>
<html>
<head>
  <title>FPA</title>
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
    <h2>FPA</h2>
<form class="cf" action="fpa.php" method="POST">
    <div class="half left cf">
        <label>External Input</label>
            <input type="number" id="input-name" name="ei" placeholder="Enter an External Input">
    </br>
        <label>External Output</label>
            <input type="number" id="input-name" name="eo" placeholder="Enter an External Output">
    </br>
        <label>External Inquiries</label>
            <input type="number" id="input-name" name="eq" placeholder="Enter an External Inquiries">
    </br>
        <label>Internal Logical Files</label>
            <input type="number" id="input-name" name="ilf" placeholder="Enter an Internal Logical Files">
    </br>
        <label>External Interface Files</label>
            <input type="number" id="input-name" name="eif" placeholder="Enter an External Interface Files">
            <br>
             <label>Option</label>
            <input type="text" id="input-name" name="choi" placeholder="ENTER low | avg | high :">
            <br>
             <label>Option</label>
            <input type="text" id="input-name" name="opt" placeholder="Enter Noinfluence | Incidential | Moderate | Average | Significant | Essential :">
    </div>
  <input type="submit" value="Submit" name="sub" id="input-submit">
</form>
</div>

</body>
</html>