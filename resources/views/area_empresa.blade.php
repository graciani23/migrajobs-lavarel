<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Área da empresa</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/estiloAreaEmpresa.css">
</head>
<body>

@include('includes/menuResponsivo')

<div class="buscadecandidato">
	<div class="encontreCandidato">
				<p>ENCONTRE O SEU CANDIDATO</p>
	</div>
		<form>
		<select class="estadocidade" name="estados-brasil">
            @include('includes/comboEstados')
		</select>
	</form>
<!-- Utilização de recurso do JavaScript para habilitar a escolha das cidades a partir da seleção de um estado-->
<!-- <select name="cidades"></select>>
	<option value="">Selecione a cidade</option>
</select> -->
		<form>
			<input class="funcao" type="text" name="buscavaga" placeholder="Vaga por palavra-chave" autocomplete="off">
            <button class="btn-info btn-sm">Buscar</button>
		</form>
	</div>

    <div class="container">
        <main>

            <div id="resultado">
                <p>
                    Resultados para a pesquisa: Enfermeiro(a) em São Paulo/SP
                </p>
            </div>

            <div class="lado-lado">

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

            </div>
                <div class="pagina">
                    <p>1>>2>>3>>Última</p>
                </div>
        </main>
    </div>

	<!-- numeração de página a ser implementada com Laravel -->

        @include('includes/footer')

        <link rel="stylesheet" href="/css/estiloFooter.css">
    </body>
</html>
