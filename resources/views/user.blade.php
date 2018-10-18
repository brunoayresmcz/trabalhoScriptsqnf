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

				
				{{-- aqui estará o conteudo --}}


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