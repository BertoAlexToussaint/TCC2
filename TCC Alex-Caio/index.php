

<?php 

	include_once("templates/hearder.php");

?>
		<div class="container">



			<?php if(isset($printMsg) && $printMsg != ''): ?>

				<p id="msg"><?= $printMsg ?></p>

			<?php endif; ?>

			<h1 id="main-title">Meus Registros de Playlists</h1>

			<?php if(count($contacts) > 0): ?>

			<table class="table" id="contacts-table">

				<thead>
					
					<tr>

						<th scope="col">ID</th>
						<th scope="col">Nome do ouvinte</th>
						<th scope="col">Nome da musica em questão</th>
						<th scope="col"></th>

					</tr>

				</thead>

				<tbody>

					<?php foreach ($contacts as $contact): ?>

						<tr>

							<td scope="row" class="col-id"><?= $contact["id"] ?> </td>
							<td scope="row"><?= $contact["name"] ?> </td>
							<td scope="row"><?= $contact["phone"] ?> </td>

								<td class="actions">
									<a href="<?= $BASE_URL ?>show.php?id=<?=$contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
									<a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>

									<form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
										<input type="hidden" name="type" value="delete">
										<input type="hidden" name="id" value="<?= $contact["id"] ?>">
									<button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
								</form>

								</td>

						</tr>

					<?php endforeach; ?>

				</tbody>


			</table>


				<?php else: ?>

					<p id="empty-list-text">Ainda não há contatos cadastrados no seus registros de playlists, <a href="<?= $BASE_URL ?>create.php">Clique Aqui para Adicionar</a></p>

				<?php endif; ?>



			

		</div>
		



<?php
include_once("templates/footer.php");
?>