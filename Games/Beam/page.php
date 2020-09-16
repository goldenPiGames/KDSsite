<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<title>Beam - GameNode</title>
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" type="text/css" href="/general.css">
	</head>
	<body>
		<?php include($_SERVER["DOCUMENT_ROOT"]."/header.html")?>

		<div class="gamebox">
			<iframe class="gameiframe" scrolling="no" title="Game" width="800" height="600" src="https://goldenpigames.github.io/Beam/index.html"></iframe>
			<div id="gamedescription">
				<h2 id="GameTitle">Beam by goldenPiGames</h2>
				<p>Controls: Click or tap.</p>
				<p>Instructions: Explained in-game. Check the (?) button in the lower-left during gameplay.</p>
			</div>
		</div>
		<script>
			var igame = document.getElementById("Game");
		</script>

		<?php include($_SERVER["DOCUMENT_ROOT"]."/footer.html")?>
	</body>
</html>