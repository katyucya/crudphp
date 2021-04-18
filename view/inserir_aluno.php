<?php
include 'db.php';
?>

<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome Aluno:</label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
	<br><br>
	<label class="badge badge-secondary">E-mail:</label><br>
	<input lass="form-control" type="text" name="email" placeholder="Insira email">
	<br><br>
	<label class="badge badge-secondary">Data de Nascimento:</label><br>
	<input lass="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
	<br><br>
	<input type="submit" name="Inserir aluno">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_alunos'] == $_GET['editar']){ ?>

			<h1>Editar aluno</h1>
			<form method="post" action="edita_aluno.php">
				<input type="hidden" name="id_alunos" value="<?php echo $linha['id_alunos']; ?>">
				<br>
				<label class="badge badge-secondary">Nome aluno:</label><br>
				<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
				<br><br>
				<label class="badge badge-secondary">E-mail:</label><br>
				<input class="form-control" type="text" name="email" placeholder="Insira o email" value="<?php echo $linha['email']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data Nascimento</label><br>
				<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento"  value="<?php echo $linha['data_nascimento']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar aluno">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>