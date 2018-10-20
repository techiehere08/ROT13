<html>
<head>
	<style type="text/css">
	textarea{
		margin-left:25%;
		height: 250px;
		border-radius: 7px;
		width: 50%;
		color: black;
		margin-top: 30px;
	}
	input[type="submit"]{
		margin-left:25%;
		height: 35px;
		width: 10%;
		margin-top: 1%;
		
	}
	input[type="submit"]:hover{
		border-radius: 16px;
		color: red;
	}
	textarea:hover{
		color: orange;
	}
	h1{
		margin-top: 5%;
	}
	@media (max-width: 760px){
		textarea{
		width: 35%;
		margin-top: 1%;
		height: 50%;
	}
	input[type="submit"]{
		float:right;
		margin-right: 140px;
		height: 35px;
		width: 10%;
		
	}

	}
	@media (max-height:415px){
		textarea{
		height: 50%;
		margin-top: 1%;
	}
	}
	@media (max-height:304px){
		textarea{
		height: 25%;
		margin-top: 1%;
	}
	}

</style>
	<title>ROT13</title>
</head>
<body bgcolor="skyblue">
	<h1 align="center" >ROT13</h1>
	<form method="POST" action="index.php" >
		<textarea name="code"><?php 
if(isset($_POST['submit']))
{
$code=$_POST["code"];
$n=strlen($code);
for($i=0;$i<$n;$i++){
	$temp=ord($code[$i]);
	if($temp>96&&$temp<110 || $temp>64&& $temp<78)
		$temp=$temp+13;
	else if($temp>109&&$temp<122 || $temp>77 && $temp<91)
		$temp=$temp-13;
	$code[$i]=chr($temp);
	echo $code[$i];
		}
	}
?></textarea>
		<input type="submit" name="submit" >
	</form>

</body>
</html>
