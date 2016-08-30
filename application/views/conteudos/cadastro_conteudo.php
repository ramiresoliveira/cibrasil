<html>
<head>
	<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url()?>assets/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
	<title>Cadastro Conteúdos</title>
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Cadastro de Conteúdos</h1>
		</div>

		<form action="<?php echo base_url().index_page(); ?>/Conteudos/salvar_conteudo" class="" method="POST">
			<div class="row">
				<div class="form-group">
					<div class="col-md-6">
						<label for="titulo">Título</label>
						<input class="form-control" name="titulo" id="titulo"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-md-6">
						<label for="titulo">Conteúdo</label>
						<textarea class="form-control" name="conteudo" id="conteudo"><?php echo $conteudo ?></textarea>
						<script>
		          CKEDITOR.replace( 'conteudo' );
		        </script>
					</div>
				</div>
			</div>

				<button type="submit" class="btn btn-success"> Salvar</button>

		</form>
	</div>
</body>
</html>
