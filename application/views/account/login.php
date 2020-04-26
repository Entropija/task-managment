<div class="container">
<?php if(isset($_SESSION['error'])){ ?>
	<div class="alert alert-secondary" role="alert">
		<?php 
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		?>
	</div>
<?php } ?>


	<div class="row">
		<div class="col-sm-6  ml-auto mr-auto">
			<form class="form-signin"  action="/account/autorize" method="post">
				<h1 class="h3 mb-3 font-weight-normal">Пожалуйста войдите</h1>
				<label for="inputlogin" class="sr-only" >Логин</label>
				<input type="text" name="name" id="inputlogin" class="form-control" placeholder="Логин" required="" autofocus="">
				<label for="inputPassword" class="sr-only">Пароль</label>
				<input type="password"  id="inputPassword" name="password" class="form-control" placeholder="Пароль" required="">
				<button class="btn btn-lg btn-primary btn-block" type="submit" >Вход</button>
			</form>
		</div>
	</div>
</div>