<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="/css/search.css">-->
    <link rel="stylesheet" href="/css/curriculo.css">
    <title>Vagas - Encontradas</title>
</head>
<body>
@include('includes/menuNewCurriculo')
<div class="container">
    <h3 class="mt-3">Lista de vagas publicadas</h3>

        <section class="mt-3">

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Empresa</th>
                        <th scope="col">Área de atuação</th>
                        <th scope="col">Descrição da vaga</th>
                        <th scope="col">Ação</th>

                    </tr>
                </thead>
                <tbody>
        @foreach($vagas as $vaga)
                    <tr>
                        <td>{{$vaga->nome_empresa}}</td>
                        <td>{{$vaga->area_de_atuacao}}</td>
                        <td>{{$vaga->descricao}}</td>
                    <td><a href="{{route('showVaga', $vaga->id)}}" class="editar btn btn-info pl-3 m-1" type> Ver mais!</a>
                        </td>
                    </tr>
   
                @endforeach

                </tbody>
            </table>
        </section>
        <div>
        <a  href="{{route('inscricao')}}" class="btn btn-info font-weight-bold">Veja suas vagas</a>
        </div>

  
</div>
    <br>
    <br><br><br>
    <br><br>
    <br>
    <br><br><br>
    <br>

    <div class="rodape mt-3">
        <footer>
            <div class="logo">MigraJobs</div>
            <br>© MigraJobs atividades de Internet, Ltda. Todos os direitos reservados.
        </footer>
    </div>
</div>

<script src="/js/buscaCep.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

</body>
</html>