<html>
	<!-- Head -->
	<head>
		<title>Psychologenpraktijk Molenwaard</title>
		<link rel="stylesheet" type="text/css" href="stijl/lay-out.css">
	</head>
	
	<!-- Body -->
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
		
			<!-- Header -->
			<div id="header">
				<!-- Logo -->
				<div id="logo">
					<img src="afbeeldingen/Psychologenpraktijk_Molenwaard_contouren.png" alt="Het logo van Psychologen Molenwaard"/>
				</div>
				
				<!-- Navigatie -->
				<div id="navigatie">
					
					<!-- NavButtons -->
					<a href="index.php?p=welkom"><div id="NavButton"><span>Welkom </span></div></a>
					<a href="index.php?p=behandelaanbod"><div id="NavButton"><span>Behandelaanbod </span></div></a>
					<!--<a href="index.php?p=aanmeldproblematiek"><div id="NavButton"><span>Aanmeld-<br>problematiek </span></div></a>-->
					<a href="index.php?p=tarieven"><div id="NavButton"><span>Tarieven </span></div></a>
					<a href="index.php?p=aanmelden"><div id="NavButton"><span>Aanmelden </span></div></a>
					<a href="index.php?p=kennismaken"><div id="NavButton"><span>Kennismaken </span></div></a>
					<a href="index.php?p=contact"><div id="NavButton"><span>Contact </span></div></a>
					<a href="index.php?p=formulieren"><div id="NavButton"><span>Formulieren </span></div></a>
				</div>
				
			</div>
			
			<!-- Content -->
			<div id="content">
				<?php
				//Laad content file
				$pagina = $_GET['p'];
				switch($pagina)
				{
					case "welkom":
						include("welkom.html");
						break;
					case "aanmelden":
						include("aanmelden.html");
						break;
					case "aanmeldproblematiek":
						include("aanmeldproblematiek.html");
						break;
					case "behandelaanbod":
						include("behandelaanbod.html");
						break;
					case "contact":
						include("contact.html");
						break;
					case "formulieren":
						include("formulieren.html");
						break;			
					case "kennismaken":
						include("kennismaken.html");
						break;
					case "tarieven":
						include("tarieven.html");
						break;
					default:
						include("welkom.html");
						break;
				}
				?>
			</div>
			
			<!-- Footer -->
			<div id="footer">
				
			</div>
			
		</div>
		
		
	</body>
	
</html>