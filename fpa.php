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
$low = array("3","4","3","7","5"); 
$avg = array("4","5","4","10","7"); 
$high = array("6","7","6","15","10"); 
$num1=(int)$low;
$num2=(int)$avg;
$sf=0;
if(isset($_POST['sub'])){
$EI= $_POST['ei'];
$EO = $_POST['eo'];
$EQ = $_POST['eq'];
$ILF = $_POST['ilf'];
$EIF = $_POST['eif'];
$Opt = $_POST['choi'];
$Ch =$_POST['opt'];
$Opt = strtolower($Opt);
$Ch = ucwords($Ch);
$result=array();
$newarr = array($EI,$EO,$EQ,$ILF,$EIF);
print_r($newarr);

for($i = 0; $i < sizeof($newarr); $i++){
	if($Opt=="low")
	{
		$result[$i]=$newarr[$i]*$low[$i];
	}
	elseif ($Opt=="avg") {
		$result[$i]=$newarr[$i]*$avg[$i];
	}
	elseif ($Opt=="high") {
		$result[$i]=$newarr[$i]*$high[$i];
	}
	else{
		echo "Wrong Keyword!!";
	}

}?>
<br><br>
<?php
	print_r($result);
	?>
	<br><br>
<?php
	$ufp =array_sum($result);
	echo "UFP = ". $ufp;
}
?>
<br>
<br>
<?php
	if($Ch=="Noinfluence")
	{
		$sf = 0* 14;
		echo $sf;
	}
	elseif ($Ch=="Incidential") {
		$sf = 1* 14;
		echo $sf;
	}
	elseif ($Ch=="Moderate") {
		$sf = 3* 14;
		echo $sf;
	}
	elseif ($Ch=="Average") {
		$sf = 4* 14;
		echo $sf;
	}
	elseif ($Ch=="Essential") {
		$sf = 5* 14;
		echo $sf;
	}
	else{
		echo "Wrong Keyword!!";
	}
	?>
	<br>
	<br>
	<?php echo nl2br("UFP = ". $ufp . "\n" ."Σf=  ". $sf); 
	$caf = 0.65 + (0.01 * $sf);
	echo nl2br("\n CAF = ". $caf);
	$fp = $ufp * $caf;
	echo nl2br("\n FP = ". $fp);
	?>