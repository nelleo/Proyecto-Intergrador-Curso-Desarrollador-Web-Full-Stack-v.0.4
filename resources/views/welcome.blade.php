@extends("layout.baseWelcome")
@section("title","Welcome to ProWeb")
@section('main')
<div class="container-fluid">
	<div class="container">
		<h1 id="h1">ProWeb</h1>
		<div class="login-page">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<p id="subTitulo">Logueate</p>
			<div class="header-left-bottom">
				<form action="" method="post">
					<ul id="errores">
						@foreach ($errores as $error)
							<li >
								{{$error}}
							</li>
					<?php endforeach; ?>
					</ul>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input name="username" type="text" placeholder="Usuario" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input name="password" type="password" placeholder="Contraseña" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Recordarme</label>
					</div>
					<div class="bottom">
						<button name="submit" class="btn">Listo!</button>
					</div>
					<div class="links">
						<p><a href="register.php">Olvidaste tu Contraseña?</a></p>
						<p class="right"><a href="register.php">Usuario nuevo? Registrate!</a></p>
						<br>
						<br>
						<br>
					</div>
				</form>
			</div>
			<div class="social">
				<ul class="redes">
					<li>Ó loqueate con : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
@endsection
