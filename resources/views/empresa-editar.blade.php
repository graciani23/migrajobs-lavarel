<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/curriculo.css">
    <title>Editar</title>
</head>

<body>
@include('includes/menuPerfilEmpresa')

<form action="{{route('empresaAtualizar', $registros->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('put')
    <input type="hidden" name="_method" value="PUT">
    <div class="container">
        <div class="fundo">
            @if(isset($registros->imagem))
            <div class="foto">
                <img src="{{asset($registros->imagem)}}">
            </div>
            @endif
        </div>

    
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
                <input type="file" class="form-control-file" name="edit-photo" id="edit-photo">
            </div>
        
        <section class="dados-pessoais border">
        <div class="pt-3 mx-4">
                <h4>Sobre a empresa</h4>
            </div>
            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="area_de_atuacao">Área de atuação</label>
                    <select class="bg-light border-secondary" name="area_de_atuacao" id="area_de_atuacao">
                        <option value="">Selecione a área</option>
                        <option value="administrativo">Administrativo</option>
                        <option value="financeiro">Financeiro</option>
                        <option value="recursosHumanos">Recursos Humanos</option>
                        <option value="setorComercial">Setor Comercial</option>
                        <option value="setorOperacional">Setor Operacional</option>
                        <option value="tecnologia">Tecnologia</option>
                        <option value="tecnologia">Outras</option>
                    </select><br>
            </div>
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pb-2" for="razao_social">Razão Social</label>
                    <input type="text" class="form-control border-secondary" name="razao_social" id="razao_social" placeholder="Razão Social" value="{{isset($registros->razao_social) ? $registros->razao_social : ''}}">
                </div>
                <div class="col pb-3">
                    <label class="label-nome pb-2" id="cnpj" for="sobrenome">CNPJ</label>
                    <input type="number" class="form-control border-secondary" name="cnpj" id="cnpj" placeholder="CNPJ" value="{{isset($registros->cnpj) ? $registros->cnpj : ''}}">
                </div>
            </div>

           
        </section>
        
       <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>


            <div class="form-row mx-4">
                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control border-secondary" name="cep" id="cep" value="{{isset($registros->cep) ? $registros->cep : ''}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control border-secondary" name="city" id="city" value="{{isset($registros->city) ? $registros->city : ''}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control border-secondary" name="uf" id="uf" value="{{isset($registros->uf) ? $registros->uf : ''}}">
                </div>
                
            </div>

            <div class="form-row mx-4">
                <div class="form-group col-md-10">
                    <label for="rua">Logradouro</label>
                    <input type="text" class="form-control border-secondary" name="rua" id="rua" placeholder="Ex. Avenida Brasil" value="{{isset($registros->rua) ? $registros->rua : ''}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control border-secondary" name="numero" id="numero" value="{{isset($registros->numero) ? $registros->numero : ''}}">
                </div>

            </div>

            <div class="form-group mx-4 px-1">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control border-secondary" name="complemento" id="complemento" placeholder="Ex. Apartamento 23 Bloco A" value="{{isset($registros->complemento) ? $registros->complemento : ''}}">
            </div>
        </section>

        
        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>
            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" name="linkedin" id="linkedin" placeholder="Linkedin" value="{{isset($registros->linkedin) ? $registros->linkedin : ''}}" >
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" name="instagram" id="instagram" placeholder="Instagram" value="{{isset($registros->instagram) ? $registros->instagram : ''}}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" name="facebook" id="facebook" placeholder="Facebook" value="{{isset($registros->facebook) ? $registros->facebook : ''}}">
                </div>
            </div>
            
            <button class="editar btn btn-primary pl-3 m-1" type> Editar</button>
    
      </section>

    </div>
    </form>  
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