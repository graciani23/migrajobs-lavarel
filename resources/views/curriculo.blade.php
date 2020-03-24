<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/curriculo.css">
    <title>Curriculo</title>
</head>

<body>
    <header>
        <div class="container">

            <div class="principal">
                <div class="logo"><a href="index">MigraJobs</a></div>

                <nav>
                    <ul>
                        <li><a href="#">Minha área</a></li>
                        <li><a href="#">Candidaturas</a></li>
                        <li><a href="#">Buscar vagas</a></li>
                        <li><a href="#">Currículo</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>

                <div class="user">
                    Olá, Jeferson
                </div>

                <img src="assets/icones/user.svg" alt="">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="fundo">
            <div class="foto">
                <img src="assets/img/refugiado.jpg" alt="">
            </div>
        </div>
        <section class="dados-pessoais border">
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pt-5" id="nome" for="nome">Nome</label>
                    <input type="text" class="form-control border-secondary" placeholder="Nome">
                </div>
                <div class="col">
                    <label class="label-nome pt-5" id="sobrenome" for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control border-secondary" placeholder="Sobrenome">
                </div>
            </div>

            <div class="form-group pt-3 mx-4">
                <textarea class="form-control border-secondary" id="sobre-voce" rows="4" placeholder="Fale sobre você"></textarea>
            </div>

                <div class="form-row pt-2 mx-4">
                    <div class="col">
                        <label class="data-nascimento" id="data-nascimento" for="data-nascimento">Data de Nascimento</label>
                        <input type="text" class="form-control border-secondary" placeholder="dd/mm/aaaa">
                    </div>
                    <div class="col">
                        <label class="idade" id="idade" for="idade">Idade</label>
                        <input type="text" class="form-control border-secondary" placeholder="Digite sua idade">
                    </div>
                </div>

                <div class="sexo form-row pt-4 mx-4">
                    <div class="custom-control custom-radio custom-control-inline pt-1 ">
                        <input type="radio" id="sexoFeminino" name="sexoFeminino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoFeminino">Feminino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline pt-1">
                        <input type="radio" id="sexoMasculino" name="sexoMasculino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoMasculino">Masculino</label>
                    </div>
                    <div class="estadoCivil">
                        <label class=""for="estadoCivil">Estado Civil</label>
                        <select class="estadoCivil bg-white border-secondary " name="estadoCivil" required="required">
                            <option value="estadoCivil">Estado Civil</option>
                            <option value="solteiro">Solteiro(a)</option>
                            <option value="sasado">Casado(a)</option>
                            <option value="separado">Separado(a)</option>
                            <option value="sivorciado">Divorciado(a)</option>
                            <option value="viuvo"<Viuvo(a)></option>
                        </select><br>
                    </div>
                </div>

                <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
                </form>
        </section>

        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>

            <div class="form-group mx-4 pt-3">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control border-secondary" id="logradouro" placeholder="Ex. Avenida Brasil, 500">
            </div>

            <div class="form-group mx-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control border-secondary" id="complemento" placeholder="Ex. Apartamento 23 Bloco A">
            </div>

            <div class="form-row mx-4">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control border-secondary" id="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <select id="estado" class="form-control border-secondary">

                        @include('./includes/comboEstados')

                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control border-secondary" id="cep">
                </div>
            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>

        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            <div class="email form-group mx-4 pt-3">
                <label class="pr-2" for="email">E-mail</label>
                <input type="mail" class="form-control border-secondary" id="email" placeholder="name@example.com">
            </div>

            <div class="form-row pt-3 mx-4">
                <div class="col">
                <label class="telefone-fixo" id="telefone-fixo" for="telefone-fixo">Telefone fixo</label>
                    <input type="number" class="form-control border-secondary" placeholder="+55 (00) 0000-0000">
                </div>
                <div class="col">
                    <label class="celular" id="celular" for="celular">Celular</label>
                    <input type="number" class="form-control border-secondary" placeholder="+55 (00) 00000-0000">
                </div>
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" id="linkedin" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" placeholder="Linkedin">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" id="instagram" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" placeholder="Instagram">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" id="facebook" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" placeholder="Facebook">
                </div>
            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>

        <section class="objetivo-profissional border mt-3">
            <div class="Experiência pt-3 mx-4">
                <h4>Experiência</h4>
            </div>

            <div class="form-group pt-3 mx-4">
                <label for="objetivo-profissional">Objetivo Profissional</label>
                <textarea class="form-control border-secondary" id="objetivo-profissional" rows="4" placeholder="Digite seu objetivo profissional"></textarea>
            </div>

            <div class="areasInteresses pb-2 mx-4">
                <label for="areasInteresses">Areas de interesse</label>
                <select class="bg-light border-secondary" name="areas" required="required">
                    <option value="">Selecione a área</option>
                    <option value="administrativo">Administrativo</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="recursosHumanos">Recursos Humanos</option>
                    <option value="setorComercial">Setor Comercial</option>
                    <option value="setorOperacional">Setor Operacional</option>
                    <option value="tecnologia">Tecnologia</option>
                </select><br>
            </div>

            <div class="form-group pt-4 mx-4">
                <label for="experiencia">Experiência</label>
                <textarea class="form-control border-secondary" id="experiencia" rows="4" placeholder="Digite seu resumo profissional"></textarea>
            </div>

            <div class="empresa form-group mx-4">
                <label class="pr-2 pt-2" for="empresa">Empresa</label>
                <input type="text" class="form-control border-secondary" id="empresa" placeholder="">
            </div>

            <div class="cargo form-group mx-4">
                <label class="pr-2 pt-2" for="cargo">Cargo</label>
                <input type="text" class="form-control border-secondary" id="cargo" placeholder="">
            </div>

            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <label class="termino pr-2" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

                </div><br>

            <div class="form-group pt-3 mx-4">
                <label for="descricao-cargo">Descrição</label>
                <textarea class="form-control border-secondary" id="descricao-cargo" rows="4" placeholder="Descrição do cargo"></textarea>
            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>

        <section class="formacao-academica border mt-3">
            <div class="formacaoAcademica pt-3 mx-4">
                <h4>Formação Acadêmica</h4>
            </div>

            <form class="formacaoAcademica mx-4" method="GET">
                <div class="instituicao form-group pt-3">
                    <label class="pr-2" for="instituicao">Instituição</label>
                    <input type="text" class="form-control border-secondary" id="instituicao" placeholder="">
                </div>

                <div class="formacao form-group">
                    <label class="pr-2 pt-2" for="formacao">Formação</label>
                    <input type="text" class="form-control border-secondary" id="formacao" placeholder="">
                </div>
            </form>

            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <br>
                <label class="termino pr-2" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

            </div><br>

            <div class="form-group pt-3 mx-4">
                <label for="descricao-formacao-academica">Descrição</label>
                <textarea class="form-control border-secondary" id="descricao-formacao-academica" rows="4" placeholder="Descrição do curso"></textarea>
            </div>

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>
    </div>

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
