

<?php 
	include_once("templates/hearder.php");
?>



	<div class="container">

		<?php include_once("templates/backbtn.html"); ?>

		<h1 id="main-title">Criar feedback</h1>

		<form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

			<input type="hidden" name="type" value="create">

			<div class="form-group">

				<label for="name">Nome do ouvinte</label>

				<input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do ouvinte" required>

	</div>

	<div class="form-group">

		<label for="phone">Nome da musica em questão</label>

		<input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o nome da musica em questão"required>

		</div>

		<div class="form-group">

			<label for="observation">Feedbacks</label>

			<textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite os feedbacks do ouvinte" rows="3"></textarea>

			<button type="submit" class="btn btn-primary">Cadastrar</button>

		</form>
			
	</div>


<?php
include_once("templates/footer.php");
?>