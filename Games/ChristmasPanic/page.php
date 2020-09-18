<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<title>Christmas Panic - GameNode</title>
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" type="text/css" href="/general.css">
	</head>
	<body>
		<?php include($_SERVER["DOCUMENT_ROOT"]."/header.html")?>

		<div class="gamebox">
			<iframe class="gameiframe" scrolling="no" width="960" height="720" src="./index.html"></iframe>
			<div id="gamedescription" width="10px">
				<h2 id="GameTitle">Christmas Panic by Qweleo</h2>
				<p>
					Evil drones has started ruining Christmas by stealing gifts and disturbing the children, and it's your job to do something about it. Shoot down the drones with snowballs and give back the presents to the children to save the day!
				</p>
				<h3>How To Play</h3>
				<p>
					The goal of the game is to get as high score as you can before the time is up.
				</p>
				<p>
				You get score by destroying drones and giving children gifts of the colour they want. Trucks come in with gifts at the top of the map every few seconds, which you can pick up, but drones also have a random chance of dropping a gift when they're destroyed. To give gifts to someone you can either throw the bottom gift in your hands with the left mouse button, or walk next to them and press the right mouse button, which will give them all gifts of the colour they want.
				</p>
				<h3>Controls:</h3>
				<p><b>WASD</b> - Move</p>
				<p><b>Right mouse button</b> - Pick up / give gifts</p>
				<p><b>Left mouse button (when holding gifts)</b> - Throw gift / Place down all gifts (hold down)</p>
				<p><b>Left mouse button (when not holding gifts)</b> - Throw snowball</p>
			</div>
		</div>
		<script>
			var igame = document.getElementById("Game");
		</script>

		<?php include($_SERVER["DOCUMENT_ROOT"]."/footer.html")?>
	</body>
</html>