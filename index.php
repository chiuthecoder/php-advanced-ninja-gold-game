<?php
session_start();
// session_destroy();
if(!isset($_SESSION['sum'])){
	$_SESSION['sum'] = 0;
}

if(isset($_SESSION['msg_log'])){
	$_SESSION['msg_log'] .= $_SESSION['msg'];
}
else{
	$_SESSION['msg_log'] ='';
}
?>
<html>
<head>
	<title>Nija Gold Game</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		Your Gold: <span><?= $_SESSION['sum'] ?></span>
	</div>
	<form action="process.php" method="post">
		<input type="hidden" name="reset">
		<input type="submit" value="Startover">
	</form>
	<div class="box">
		Farm<br>
		(earns 10-20 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="farm">
			<input type="submit" value="Find Gold!">
		</form>
	</div>

	<div class="box">
		Cave<br>
		(earns 5-10 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="cave">
			<input type="submit" value="Find Gold!">
		</form>
	</div>

	<div class="box">
		Cave<br>
		(earns 5-10 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="house">
			<input type="submit" value="Find Gold!">
		</form>
	</div>

	<div class="box">
		Cave<br>
		(earns 5-10 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="casino">
			<input type="submit" value="Find Gold!">
		</form>
	</div>

	<div>
		Activites:
		<ul class="msg">
		<?= $_SESSION['msg_log'] ?>		
		</ul>

	</div>
</body>
</html>