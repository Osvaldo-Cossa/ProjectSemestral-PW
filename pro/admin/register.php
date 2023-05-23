<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Registo de Fornecedor</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Nome</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Introduza o nome">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Introduza o email">
			    <small id="emailHelp" class="form-text text-muted">Nunca partilharemos o seu e-mail com mais ninguém.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Senha</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirmar Senha</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Senha">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Registar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
