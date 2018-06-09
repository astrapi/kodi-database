<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<?php include('config.php'); ?>
<?php include('header.php'); ?>
<body>

<?php include('nav.php'); ?>

<div class="container theme-showcase" role="main">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Auswertung Filme</h1>
		</div>
	</div>

	<div class="list-group">
		<a href="sites/movies_all" class="list-group-item">Alle Filme</a>
		<a href="sites/movies_duplicate" class="list-group-item">Doppelte Filme</a>
		<a href="sites/files_duplicate" class="list-group-item">Doppelte Dateien</a>
		<a href="sites/movies_not_in_database" class="list-group-item">Filme nicht in Kodi-Datenbank</a>
		<a href="sites/files_missing" class="list-group-item">Fehlende Dateien</a>
	</div>

	<div class="list-group">
		<a href="sites/art_all" class="list-group-item">Alle Poster und Fanarts</a>
		<a href="sites/poster_missing" class="list-group-item">Fehlende Poster</a>
		<a href="sites/poster_left" class="list-group-item">Überflüssige Poster</a>
		<a href="sites/poster_online" class="list-group-item">Online Poster</a>
		<a href="sites/fanart_missing" class="list-group-item">Fehlende Fanart</a>
		<a href="sites/fanart_left" class="list-group-item">Überflüssige Fanart</a>
		<a href="sites/fanart_online" class="list-group-item">Online Fanart</a>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Vergleich <?php echo $server1 ?> / <?php echo $server2 ?></h1>
		</div>
	</div>
	<div class="list-group">
		<a href="sites/server1_server2" class="list-group-item"><?php echo $server1 ?> -> <?php echo $server2 ?></a>
		<a href="sites/server2_server1" class="list-group-item"><?php echo $server2 ?> -> <?php echo $server1 ?></a>
	</div>
</div>

</body>
</html>

