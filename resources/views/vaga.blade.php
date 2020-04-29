<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/curriculo.css">
    <title>Vaga</title>
</head>

<body>
@include('includes/menuVagas')
    @csrf 
    <div class="container">
        <div class="fundo">
            <div class="foto">
                <img src="https://pbs.twimg.com/profile_images/1129626341370933250/dizro5ap_400x400.jpg" alt="">
            </div>
        </div>
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
            </div>
       
        <section class="dados-pessoais border">
        <div class="pt-3 mx-4">
                <h4>Sobre a vaga</h4>
            </div>
            <div class="form-group px-1 mx-4">

            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas" style="font-weight:bold">Área de atuação:</label>
                <div style="color:black"> {{$dadosVaga->area_de_atuacao}}</div> 

                    </select><br>
            </div>
            <div class="form-group pt-3 px-1 mx-4">
                <label for="descricao" style="font-weight:bold">Descrição da vaga</label>
                <div style="color:black"> {{$dadosVaga->descricao}}</div> 
            </div>

            <div class="form-group pt-3 px-1 mx-4">
                <label for="descricao-vaga">Idiomas requeridos:</label>
                <div class="custom-control custom-radio custom-control-inline pt-1 ">
                    <input type="radio" id="portugues" name="portugues" class="custom-control-input">
                    <div style="color:black"> {{$dadosVaga->idioma_requerido}}</div> 
               
            </div>    
       
            <a href="{{route('vagaDeletar',$dadosVaga->id)}}" class="editar btn btn-danger btn-block" type> Deletar</a>
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