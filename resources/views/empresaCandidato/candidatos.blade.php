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

<div class="container">
    <main>
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


            <div id="resultado">
                <p>
                    Resultados para a pesquisa: Enfermeiro(a) em São Paulo/SP
                </p>
            </div>

            <div class="lado-lado">

                <div class="candidato">
                    <img src="{{asset("storage/".$candidatos->image)}}" alt="">
                    <div class="dados pt-2">
                        <div class="dados" style="color:black">{{ $candidatos->name }}</div>
                    </div>
                    <div class="dados pt-2">
                        <div class="dados" style="color:black">{{ $candidatos->birth }}</div>
                    </div>
                    <div class="form-group pt-3">
                        <label class="dados d-flex justify-content-center" style="color:black" for="">Area de interesse</label>
                        <div class="dados d-flex justify-content-center" style="color:black">{{ $candidatos->areas }}</div>
                    </div>
                    <a href="{{route('perfilCandidato', $candidatos->id)}}">Saiba mais</a>
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
