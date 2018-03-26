<?php
	require("head_default.php");
?>
	<h1>Welcome to the jungle baby!</h1>


	<div class="container">
		<div class="row">
			<div class="">
				<h3> Efetue login para acessar o painel! </h3>
			</div>

			<div class="">
				<form id="formLogin" action="../../" method="post">
					<input type="text" name="loginUser">
					<input type="password" name="passUser">
					<button type="input" class="waves-effect waves-light btn">Conectar</button>
				</form>

				<form id="formSingin" action="../../" method="post">
					<input type="text" name="nameUser" required>
					<input type="text" name="lastnameUser" required>
					<input type="text" name="emailUser" required>
					<input type="text" id="phoneUser" name="phoneUser" required>
					<input type="text" name="">
					<button type="input" class="waves-effect waves-light btn">Cadastrar</button>
				</form>

				<p>Ainda não possui cadastro? <a href="#cadastrar">Clique aqui</a></p>
			</div>

			 <div class="">
			 	
			 </div>
		</div>
	</div>

<?php require("footer_default.php"); ?>