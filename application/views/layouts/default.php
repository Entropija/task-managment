<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="/public/scripts/jquery.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	
	
	
</head>
<body>
	<div class="container">
	<?php if(isset($_SESSION['id'])){ ?>
		<div class="" >
		<a class="btn btn-sm btn-outline-secondary float-right" href="/account/exit">Выйти</a>
		</div>
	<?php } else {?>
		<a class="btn btn-sm btn-outline-secondary float-right" href="/account/login">Войти</a>
	<?php } ?>
	</div>
	<?php echo $content; ?>
</body>
<script src="/public/scripts/taskManager.js"></script>


</html>