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
                <img src="https://pbs.twimg.com/profile_images/1129626341370933250/dizro5ap_400x400.jpg" alt="">
            </div>
        </div>
        <form>
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
                <input type="file" class="form-control-file" name="edit-photo" id="edit-photo">
            </div>
        </form>
        <section class="dados-pessoais border">
        <div class="pt-3 mx-4">
                <h4>Sobre a empresa</h4>
            </div>
            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Área de atuação</label>
                    <select class="bg-light border-secondary" name="areas" id="areas" required="required">
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
                    <label class="label-nome pb-2" for="nome">Razão Social</label>
                    <input type="text" class="form-control border-secondary" name="name" id="nome" placeholder="Razão Social">
                </div>
                <div class="col pb-3">
                    <label class="label-nome pb-2" id="sobrenome" for="sobrenome">CNPJ</label>
                    <input type="text" class="form-control border-secondary" name="surname" id="surname" placeholder="CNPJ">
                </div>
            </div>

           
        </section>

        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>
            <div class="form-row pt-4 mx-4">
                    <label for="zip-code">CEP</label>
                    <input type="text" class="form-control border-secondary" name="zip-code" id="zip-code">
            </div>
            <div class="form-group mx-4 pt-3 px-1">
                <label for="adress">Logradouro</label>
                <input type="text" class="form-control border-secondary" name="adress" id="adress" placeholder="Ex. Avenida Brasil, 500">
            </div>

            <div class="form-group mx-4 px-1">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control border-secondary" name="complement" id="complement" placeholder="Ex. Apartamento 23 Bloco A">
            </div>

            <div class="form-row mx-4">
                <div class="form-group col-md-6">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control border-secondary" name="city" id="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="state">Estado</label>
                    <select class="form-control border-secondary" name="state" id="state">

                        @include('./includes/comboEstados')

                    </select>
                </div>
            </div>
         </section>

        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            <div class="email form-group mx-4 pt-3 px-1">
                <label class="pr-2" for="email">E-mail</label>
                <input type="mail" class="form-control border-secondary" name="email" id="email" placeholder="name@example.com">
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" name="linkedin" id="linkedin" placeholder="Linkedin">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" name="instagram" id="instagram" placeholder="Instagram">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" name="facebook" id="facebook" placeholder="Facebook">
                </div>
            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="salvar btn btn-primary pl-3" type="submit" value="Salvar" onCLick="">
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