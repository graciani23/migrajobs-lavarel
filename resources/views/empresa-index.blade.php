<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/empresa.css">
    <title>Empresa</title>
</head>

<body>
@include('includes/menuPerfilEmpresa')


    <div class="container">
        <div class="fundo">
            <div class="foto">
            @foreach($registros as $registro)
                <img src="{{asset($registro->imagem)}}" alt="">
            </div>
        </div>
        <form>
            
            
            
        <section class="endereco border mt-3">
            <h4>Sobre a empresa</h4>
            </div>
            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Área de atuação</label>
                <div style="color:black"> {{$registro->area_de_atuacao}}  </div> 
            </div>
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pb-2" for="nome">Razão Social</label>
                    <div style="color:black"> {{$registro->razao_social}} </div>
                </div>
                    <label class="label-nome pb-2" id="sobrenome" for="sobrenome">CNPJ</label>
                    <div style="color:black"> {{$registro->cnpj}}</div> 
                </div>
            </div>
        </section>
        
        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4 class="pt-3 mx-4">Endereço</h4>

           
                <div style="color:black">
                {{$registro->CEP}}
                {{$registro->UF}}
                {{$registro->city}}
                {{$registro->rua}}
                {{$registro->numero}}
                {{$registro->complemento}}
                </div>
            </div>


          
        </section>


        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="/assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <div style="color:black">
                    {{$registro->linkedin}}
                    </div>
                </div>
                    <div class="col">
                    <img src="/assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <div style="color:black">
                    {{$registro->instagram}}
                    </div>
                </div>
                    <div class="col">
                    <img src="/assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <div style="color:black">
                    {{$registro->facebook}}
                    </div>

                </div>
                @endforeach

            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="post">

            <a href="{{route('empresaEditar', $registro->id)}}" class="editar btn btn-primary pl-3 m-1" type> Editar</a>
            <a href="{{route('empresaDeletar', $registro->id)}}" class="editar btn btn-danger pl-3 m-1" type> Deletar</a>

            </form>

        </section>

  
    </div>
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