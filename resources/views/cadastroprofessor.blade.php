<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>EduSis</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sismain.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">

	<header class="mainHeader">
		<img align="center" src="{{'assets/img/educ.jpg'}}">
		<nav><ul>
				<li><a href="{{'professorInsert'}}">Inserir Professor</a></li>
				<li><a href="{{'user'}}">Usuário</a></li>
				<li><a href="{{route('login')}}">Sair</a></li>
			</ul></nav>
	</header>

		<div class="mainContent">
			<div class="content">
				<article class="topcontent"></article>
				<header>
					<h2><a href="#" title="First post">Cadastro de Professor</a></h2>
				</header>
				<footer>
					<p class="post-info">Insira as informações abaixo</p>
				</footer>

				
				<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nome</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Matrícula</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">CPF</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Escola</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
						</div>



			</div>
		</div>

		<aside class="top-sidebar">
			<article>
				<h2>Top sidebar</h2>
				<p>>lore ipsum etc...</p>
			</article>
		</aside>

		<aside class="mid-sidebar">
			<article>
				<h2>mid sidebar</h2>
				<p>>lore ipsum etc...</p>
			</article>
		</aside>

		<aside class="bot-sidebar">
			<article>
				<h2>bot sidebar</h2>
				<p>>lore ipsum etc...</p>
			</article>
		</aside>

		<footer class="mainFooter">
			<p>Copyright &copy; <a href="#" title="Bruno o escritor">brunohtml</a></p>
		</footer>

</body>

</html>