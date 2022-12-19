<?php 
	include_once("config/url.php");
	include_once("config/process.php");

	if(isset($_SESSION['msg'])) {

		$printMsg = $_SESSION['msg'];

		$_SESSION['msg'] = '';
	}
?>

<DOCTYPE html>

<html lang="pt-br">
	
	<head>

		<meta charset="utf-8">
		<title> Playdisk</title>
		<meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">
	</head>

	<body>



			<header>

				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="<?= $BASE_URL ?>poprap.php">
						<img src="<?= $BASE_URL ?>img/playDISC.png" alt="Agenda PW22">
					</a>
						<div>
							<div class="navbar-nav">
								<a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>poprap.php">RAP&POP</a>
								<a class="nav-link active"  href="<?= $BASE_URL ?>create.php">Contatos & Opiniões</a>

								<a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php"></a>

							</div>
						</div>
				</nav>
			</header>
