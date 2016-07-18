<?php
function listProjects() {
	$dir_curr = opendir(getcwd());
	$dir_content = array();

	while(($dir_data = readdir($dir_curr)) !== false) {
		if ($dir_data !== '.' && $dir_data !== '..') {
			if (is_dir($dir_data)) {
				$dir_content[] = $dir_data;
			}
		}
	}

	closedir($dir_curr);

	return $dir_content;
}
?>
<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Projetos - Apache</title>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<h1>Projetos - Apache</h1>

		<ul>
			<?php
			foreach (listProjects() as $data) {
				echo '<li><a href="'.$data.'">'.$data.'</a></li>'.PHP_EOL;
			}
			?>
		</ul>
	</body>
</html>
