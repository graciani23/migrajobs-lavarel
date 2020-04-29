<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/curriculo.css">

    <title>Empresa</title>
</head>

<body>
@include('includes/menuPerfilEmpresa')

    <div class="container">
        <div class="fundo">
            <div class="foto">
                <img src="{{asset("storage/".$registros->imagem)}}" alt="">
            </div>
        </div>


        <form>

        <div class="container">
            <div class="row">
                <div class="col">
                    <section class="container endereco border mt-5">
                        <h4 class="m-3 mx-auto">Sobre a empresa</h4>
                        <div class="col mb-2">
                            <label for="areas" style="font-weight:bold">Área de atuação:</label>
                            <div style="color:black"> {{$registros->area_de_atuacao}}  </div> 
                        </div>

                        <div class="col mb-2">
                            <label class="label-nome" for="nome" style="font-weight:bold">Razão Social:</label>
                            <div style="color:black"> {{$registros->razao_social}} </div>
                        </div>
            
                        <div class="col mb-2">
                            <label class="label-nome" id="cnpj" for="cnpj" style="font-weight:bold">CNPJ:</label>
                            <div style="color:black"> {{$registros->cnpj}}</div> 
                        </div>
                    </section>

                    <section class="contato border mt-4">
                        <div class="pt-3 mx-4">
                            <h4>Contato</h4>
                        </div>

                        <div class="redes-sociais form-row mx-4">
                            <div class="col mb-3">
                                <img src="/assets/icones/quadrado-linkedin.png" alt="linkedin">
                                <a href="http://{{$registros->likedin}}">Likedin</a>
                        </div>

                        <div class="col mb-3">
                            <img src="/assets/icones/quadrado-Instagram.png" alt="instagram">
                            <a href="http://{{$registros->instagram}}">Instagram</a>
                        </div>

                        <div class="col mb-3">
                            <img src="/assets/icones/quadrado-facebook.png" alt="facebook">
                            <a href="http://{{$registros->facebook}}">Facebook</a>
                         </div>
                    </section>

                    <div class="col mr">
                    <form class="button mx-auto" method="post">
                    <br>
                        <a href="{{route('empresaEditar', $registros)}}" class="editar btn btn-primary btn-block" type> Editar</a>
                        <a href="{{route('empresaDeletar',$registros->id)}}" class="editar btn btn-danger btn-block" type> Deletar</a>

                    </form>                
                </div>
                </div>

                <div class="col">
                    <section class="endereco border mt-3">
                        <div class="pt-3 mx-4 ">
                            <h4 class="m-3 mx-auto">Endereço</h4>
                            <div class="col mb-2">
                                <label for="cep" style="font-weight:bold">CEP:</label>
                                <div style="color:black">{{$registros->cep}} </div> 
                            </div>

                            <div class="col mb-2">
                                <label for="cep" style="font-weight:bold">Rua:</label>
                                <div style="color:black">{{$registros->rua}} </div> 
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cep" style="font-weight:bold">Número:</label>
                                <div style="color:black">{{$registros->numero}} </div> 
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cep" style="font-weight:bold">Complemento:</label>
                                <div style="color:black">{{$registros->complemento}} </div> 
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cep" style="font-weight:bold">Cidade:</label>
                                <div style="color:black">{{$registros->city}} </div> 
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cep" style="font-weight:bold">Estado:</label>
                                <div style="color:black">{{$registros->uf}} </div> 
                            </div>

                        </div>
                    </section>

                    
                </div>
        </div>
    </div>
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