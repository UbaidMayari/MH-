
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
</nav><br><br></body>
<?php

if(isset($_POST['sub'])){
$NUM = $_POST['num'];
if($NUM > 1000 && $NUM < 10000)
	{
		$a = 1.05;
		$b = 0.38;
		$c = pow($NUM,$a);
		echo nl2br("Organic \n");
		$pm=2.4*$c;
		echo nl2br("Person month = ".$pm);
		$d =pow($pm,$b);
		$dm=2.5*$d;
		echo nl2br("\n Development Time = ".$dm);
}
elseif($NUM > 10001 && $NUM < 50000)
	{
		$a = 1.12;
		$b = 0.35;
		$c = pow($NUM,$a);
		echo nl2br("Semidetached \n");
		$pm=3.0*$c;
		echo nl2br("Person month = ".$pm);
		$d =pow($pm,$b);
		$dm=2.5*$d;
		echo nl2br("\n Development Time = ".$dm);


}
	elseif($NUM > 50001)
	{
		$a = 1.20;
		$b = 0.32;
		$c = pow($NUM,$a);
		echo nl2br("embedded \n");
		$pm=3.6*$c;
		echo nl2br("Person month = ".$pm);
		$d =pow($pm,$b);
		$dm=2.5*$d;
		echo nl2br("\n Development Time = ".$dm);


}
	else{
		echo("sorry");
	}
}
?>