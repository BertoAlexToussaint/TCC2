

<?php 
	include_once("templates/hearder.php");
?>

	<div class="container">

		<?php include_once("templates/backbtn.html"); ?>

		<h1 id="main-title">Editar Contato e feedbackk</h1>

		<form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

			<input type="hidden" name="type" value="edit">

			<input type="hidden" name="id" value="<?= $contact["id"] ?>">

			<div class="form-group">

				<label for="name">Atualizar o Nome do Contato:</label>

				<input type="text" class="form-control" id="name" name="name" placeholder="Atualizar o nome do ouvinte" value="<?= $contact["name"] ?>" required>

	</div>

	<div class="form-group">

		<label for="phone">Nome da musica em questão:</label>

		<input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o nome da musica em questão:" value="<?= $contact["phone"] ?>" required>

		</div>

		<div class="form-group">

			<label for="observation">feedbacks:</label>

			<textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite os feedbacks do ouvinte" rows="3"><?= $contact["observation"] ?>"</textarea>
		</div>
			<button type="submit" class="btn btn-primary">Atualizar</button>

		</form>
		</div>


<?php
include_once("templates/footer.php");
?>