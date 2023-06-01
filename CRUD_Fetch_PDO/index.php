<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="./JavaScript/script.js" defer></script>
	<link rel="stylesheet" href="./Css/styles.css">

	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Teste AJAX</title>
</head>


<body>

	<!-- header -->
	<div class="header">
		<h1>Header</h1>
	</div>

	<!-- Barra de navegação -->
	<ul id="navBar">
		<li><a href="#" class="aba" id="voltar">
				<i class="fa fa-arrow-left"></i></a>
		</li>
		<li><a href="?page=inicio" class="aba">
				<i class="fa fa-fw fa-home"></i>Home</a>
		</li>
		<li><a href="?page=listar" class="aba">
				<i class="fa fa-fw fa-search"></i> Lista de usuarios</a>
		</li>
		<li><a href="?page=salvar" class="aba">
				<i class="fa fa-fw fa-user"></i>Cadastrar Usuarios</a>
		</li>
	</ul>




	<div class="container">
		<div class="row align-items-start">
			<div class="col">
				<h1>Coluna 1</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.</p>
			</div>
			<div class="col">
				<h1>Coluna 2</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.</p>
			</div>
			<div class="col">
				<h1>Coluna 3</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.</p>
			</div>
		</div>

		<!-- Verificando o valor do "page" na URL para atender o switch -->
		<?php
		echo "<div style='margin:10px;'>";

		switch (@$_REQUEST["page"]) {
			case "listar":
				include_once 'listar.php';
				break;
			case "salvar":
				include_once 'FormSalvar.php';
				break;
			case "editar":
				include_once 'FormEditar.php';
				break;
			case "inicio":
				echo "<h1 id='inicio'>Seja Bem-Vindo</h1>";
				break;

			default:
				echo "";
		}
		echo "</div>"
		?>

		<div class="row">
			<div class="column">
				<h2>Column</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.
					Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula,
					risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent
					scelerisque tortor sed accumsan convallis.</p>
			</div>

			<div class="column">
				<h2>Column</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus
					venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget
					aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque
					tortor sed accumsan convallis.</p>
			</div>

			<div class="column last">
				<h2>Column</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus
					venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget
					aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque
					tortor sed accumsan convallis.</p>
			</div>
		</div>

</body>

</html>
