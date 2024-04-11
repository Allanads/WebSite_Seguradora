<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
	<title>WebSite SEGURADORA ATK</title>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="subpage">

	<!-- Header -->

	<header id="header" class="alt">
		<div class="logo"><a href="index.html">WebSite <span>by ATK
					Company</span></a></div>
		<a href="#menu"><span>Menu</span></a>
	</header>
	<!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Home</a></li>
            <li><a href="usu_cad.php">Cadastrar</a></li>
            <li><a href="usu_pes_usu1.php">Pesquisar</a></li>
            <li><a href="usu_pes_atua1.php">Atualizar</a></li>
            <li><a href="usu_pes_exclui1.php">Excluir</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>
	<!-- Content -->

	<section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
		<div class="inner">
			<article class="box">
				<header>
					<center>
						<h2>DADOS DO USUÁRIO</h2>
						<br>
						<div class="form-container">
							<?php
							$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
							$result_usuario = "SELECT id, nome, email, senha FROM e0_usuario WHERE email='$email'";         
							$resultado_usuario = mysqli_query($conn, $result_usuario);
							$row_usuario;
							?>
							<form method="POST" name="alterar_usuario" action="usu_alt_atualiza.php">
								<?php
								if ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {

									echo "Para realizar a alteração preencha os campos abaixo:<br><br>";

									echo "<input type='hidden' name='id' value='".$row_usuario['id']."' />";

									echo "<label><strong>E-mail:</strong></label>
									<input name='email' type='email' placeholder='".$row_usuario['email']."' value='".$row_usuario['email']."'><br></br>";

									echo "<label><strong>Nome:</strong></label>
									<input name='nome' type='text' placeholder='".$row_usuario['nome']."' value='".$row_usuario['nome']."'><br></br>";

									echo "<label><strong>Senha:</strong></label>
									<input name='senha' type='text' placeholder='".$row_usuario['senha']."' value='".$row_usuario['senha']."'><br></br>";

									echo "<input type='submit' name='Atualiza' value='Atualiza'> ";
								} else {
									echo "<h2><font color='red' size='+2'>Usuário não existe!!!!!</font></h2>";
								}
								?>
							</form>
						</div>
</body>

</header>

</article>
</div>
</section>
<div class="copyright">
	WebSite <a>By Company ATK</a>
</div>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>
</body>

</html>