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
    <link rel="stylesheet" href="/css/empresa.css">

</head>
<body>

@include('includes/menuPerfilEmpresa')

<div class="container">
    <main>
        
<div class="buscadecandidato">
	<div class="encontreCandidato">
				<p>ENCONTRE O SEU CANDIDATO</p>
	</div>
</div>
<br>


            
            <div class="lado-lado">
                @foreach ( $candidatos as $candidato)
                    
                <div class="candidato">
                    <img src="{{asset("storage/".$candidato->image)}}" alt="">
                    <div class="dados pt-2">
                        <div class="dados" style="color:black">{{ $candidato->name }}</div>
                    </div>
                
                    <div class="form-group pt-3">
                        <label class="dados d-flex justify-content-center" style="color:black font-style=bold" for="">Área de interesse:</label>
                        <div class="dados d-flex justify-content-center" style="color:black">{{ $candidato->areas }}</div>
                    </div>
                    <a href="{{route('perfilCandidato', $candidato->id)}}">Saiba mais</a>
                </div>
                @endforeach
            </div>
             
            <div>
                <a href="{{route('vagaIndex')}}" class="editar btn btn-info mt-3 p-2" type> Voltar para a área de vagas</a>
           </div>
        </main>
    </div>

	<!-- numeração de página a ser implementada com Laravel -->


    <div class="rodape mt-3">
        <footer>
            <div class="logo">MigraJobs</div>
            <br>© MigraJobs atividades de Internet, Ltda. Todos os direitos reservados.
        </footer>
    </div>
</div>
    </body>
</html>
