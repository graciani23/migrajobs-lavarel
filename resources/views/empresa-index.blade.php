<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/curriculo.css">
    <title>Empresa</title>
</head>

<body>
@include('includes/menuPerfilEmpresa')


    <div class="container">
        <div class="fundo">
            <div class="foto">
            @foreach($registros as $registro)
                <img src="{{asset($registro->imagem)}}" alt="">
                @endforeach
            </div>
        </div>
        <form>
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
            </div>
        </form>
        <section class="dados-pessoais border">
        <div class="pt-3 mx-4">
                <h4>Sobre a empresa</h4>
                @foreach($registros as $registro)

            </div>
            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Área de atuação</label>
                    <select>{{$registro->area_de_atuacao}} </select><br>
            </div>
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pb-2" for="nome">Razão Social</label>
                    {{$registro->razao_social}}
                </div>
                <div class="col pb-3">
                    <label class="label-nome pb-2" id="sobrenome" for="sobrenome">CNPJ</label>
                    {{$registro->cnpj}}
                </div>
            </div>
         
            @endforeach

        </section>
        
        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
                @foreach($registros as $registro)

            </div>


                {{$registro->endereco}}


            </div>



            @endforeach

        </section>


        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>
            @foreach($registros as $registro)

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    {{$registro->linkedin}}
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    {{$registro->instagram}}
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    {{$registro->facebook}}
                </div>
                @endforeach

            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="editar btn btn-primary pl-3 m-1" type="submit" value="Editar"  >
                <input class="deletar btn btn-danger pl-3 m-1" type="submit" value="Deletar" >

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