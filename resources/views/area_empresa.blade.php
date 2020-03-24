<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Área da empresa</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estiloAreaEmpresa.css">
</head>
<body>
<header>
<!-- primeira linha -->
<nav> 
    <div class="cabecalho">
		<span class="logo">MigraJobs</span>
        <div class="links">
		<a href="cad-log-empresa">Minha área</a>
        <a href="cad-log-usuario">Área do Usuário</a>
		<a href="index">Contato</a>
		</div>
		<div class="user">Olá, XXXXX</div>
    </div>
</nav>     
            
<!-- terceira linha -->
</header>
<div class="buscadecandidato">
	<div class="encontreCandidato">
				<p>ENCONTRE O SEU CANDIDATO</p>
	</div>
		<form>
		<select class="estadocidade" name="estados-brasil">
			<option value="">Selecione um estado</option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
	</form>
<!-- Utilização de recurso do JavaScript para habilitar a escolha das cidades a partir da seleção de um estado-->
<!-- <select name="cidades"></select>>
	<option value="">Selecione a cidade</option>
</select> -->
		<form>
			<input class="funcao" type="text" name="buscavaga" placeholder="Vaga por palavra-chave" autocomplete="off">
			<input class="botao" type="submit" value="Buscar">
		</form>
	</div>

	<div id="resultado">
		<p>
			Resultados para a pesquisa: Enfermeiro(a) em São Paulo/SP
		</p>
	</div>

	<div class="lado-lado">
		
		<main>
			
			<div class="candidato">
				<img src="assets/img/omar.jpg" alt="Foto do candidato Omar Al-Amin">
				<h3>Omar Al-Amin</h3>
				<p>50 anos</p>
				<p>Idiomas: Inglês e árabe</p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/isabel.jpg" alt="Foto da candidata Isabel Sanchez">
				<h3>Isabel Sanchez</h3>
				<p>44 anos</p>
				<p>Idiomas: Espanhol </p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/julianne.jpg" alt="Foto da candidata Julianne Gonzalez">
				<h3>Julianne Gonzalez</h3>
				<p>25 anos</p>
				<p>Idiomas: Espanhol</p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/alika.jpg" alt="Foto da candidata Alika Toussant">
				<h3>Alika Toussant</h3>
				<p>30 anos</p>
				<p>Idiomas: Francês</p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/hernando.jpg" alt="Foto do candidato Hernando Rodriguez">
				<h3>Hernando Rodriguez</h3>
				<p>36 anos</p>
				<p>Idiomas: Espanhol</p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/adegoke.jpg" alt="Foto do candidato Adegoke Kiwila">
				<h3>Adegoke Kiwila</h3>
				<p>38 anos</p>
				<p>Idiomas: Português</p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/houssam.jpg" alt="Foto do candidato Houssam El Shogre">
				<h3>Houssam El Shogre</h3>
				<p>52 anos</p>
				<p>Idiomas: Árabe </p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

			<div class="candidato">
				<img src="assets/img/massad.jpg" alt="Foto do candidato Massad Safwan">
				<h3>Massad Safwan</h3>
				<p>47 anos</p>
				<p>Idiomas: Árabe </p>
				<a href="curriculo.php">Saiba mais</a>
			</div>

		</main>
	</div>
	<!-- numeração de página a ser implementada com Laravel -->
	<div class="pagina">
		<p>1>>2>>3>>Última</p>
	</div>

		<footer>
			<div class="footer">
				<p>Criado por equipe MigraJobs em 2020</p>
			</div>
		</footer> 
		</body>
	</html>