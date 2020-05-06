<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/curriculo.css">

    <title>Home - Candidato</title>
</head>
<body>
    @include('includes/menuHomeEmpresa')
               
  
    <section class="homeCandidato">
        <div class="container">

            <div class="escolha d-flex justify-content-center">
                <h1 class="novoCaminho" >AJUDE A CONSTRUIR UM NOVO CAMINHO</h1>
            </div>

            <div class="caminhoEmpresa d-flex justify-content-center">
                <div>
                    <a href="{{route('empresaMostrar', $registros)}}" class="btn btn-dark font-weight-bold mr-2 pt-4 pb-4">Veja o perfil da sua empresa</a>
                </div>
                <div>
                    <a href="{{route('empresaEditar',$registros->id)}}" class="btn btn-dark font-weight-bold ml-3 pt-4 pb-4 pl-3 pr-3">Edite o perfil da sua empresa</a>
                </div>
            </div>
            

            <div class="d-flex justify-content-center">
                <div class="d-flex align-items-center">
                    <a  href="{{route('vagaIndex')}}" class="btn btn-info font-weight-bold d-flex align-items-center mr-2 pt-4 pb-4">Confira suas vagas abertas</a>
                </div>
                <div>
                    <a  href="{{route('vagasPublicar')}}" class="btn btn-success font-weight-bold d-flex align-items-center ml-3 pt-4 pb-4 pl-3 pr-4">Publique uma nova vaga!</a>
                </div>

            </div>

                <div class="d-flex justify-content-center mt-2 ">
                                    
                        <a class="botaoSair btn btn-danger font-weight-bold mr-2 p-4" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} 
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                </div> 

        </div>

    </section>


    <div class="rodape">
        <footer>
            <div class="logo">MigraJobs</div>
            <br>© MigraJobs atividades de Internet, Ltda. Todos os direitos reservados.
        </footer>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>