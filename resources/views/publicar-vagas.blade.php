<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/empresa.css">
    <title>Publicar vaga</title>
</head>

<body>
@include('includes/menuVagas')
    <form action="publicar-vagas" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="container">
        <div class="fundo">
            <div class="publiqueVaga">
                <h4 class="h4">Publique uma vaga</h4>
            </div>
        </div>
                  
        <section class="dados-pessoais border">
        <div class="pt-3 mx-4">
                <h4 class="sobreAVaga">Sobre a vaga</h4>
            </div>
            <div class="form-group px-1 mx-4">

            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Área de atuação</label>
                    <select class="bg-light border-secondary" name="area_de_atuacao" id="area_de_atuacao">
                        <option value="">Selecione a área</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="RH">Recursos Humanos</option>
                        <option value="Comercial">Setor Comercial</option>
                        <option value="Operacional">Setor Operacional</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Outros">Outras</option>
                    </select><br>
            </div>
            <div class="form-group pt-3 px-1 mx-4">
                <label for="descricao">Descrição da vaga</label>
                <textarea class="form-control border-secondary" name="descricao" id="descricao" rows="4" placeholder="Descreva todas as informações sobre a vaga" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"></textarea>
            </div>

            <div class="form-group pt-3 px-1 mx-4">
                <label for="idioma_requerido">Idiomas requeridos:</label>
                <div class="custom-control custom-radio custom-control-inline pt-1 ">
                    <input type="radio" id="portugues" name="idioma_requerido" class="custom-control-input" value="Português">
                    <label class="custom-control-label" for="portugues">Português</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="espanhol" name="idioma_requerido" class="custom-control-input"  value="Espanhol">
                    <label class="custom-control-label" for="espanhol">Espanhol</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="ingles" name="idioma_requerido" class="custom-control-input"  value="Inglês" >
                    <label class="custom-control-label" for="ingles">Inglês</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="frances" name="idioma_requerido" class="custom-control-input"  value="Francês">
                    <label class="custom-control-label" for="frances">Francês</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="outros" name="idioma_requerido" class="custom-control-input"  value="Outros">
                    <label class="custom-control-label" for="male">Outros</label>
                </div>
            </div>    
       
                <input class="salvar btn btn-primary pl-3 m-4" type="submit" value="Salvar" onCLick="">
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



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

</body>
</html>