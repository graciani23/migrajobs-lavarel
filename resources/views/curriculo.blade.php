<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/curriculo.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="principal">
            <div class="logo"><a href="index.php">MigraJobs</a></div>

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
    </header>
    
    <!-- INÍCIO DA 1° GRID md 6 -->
    <!-- DADOS PESSOAIS -->
    <div class="container pt-3">
        <div class="row">
            <section class="dados-pessoais col-md-6 border">
                <div class="foto">
                    <img src="./assets/img/refugiado.jpg" alt="Foto Perfil">
                <form>
                    <div class="foto form-group pb-4">
                        <label for="foto"></label>
                        <input type="file" class="form-control-file" id="foto">
                    </div>
                </form>
                </div>
         
                <div class="dadosPessoais d-flex fledx-row justify-content-center pt-1">
                    <h4> Dados Pessoais</h4>
                </div>

                <form class="nome pt-3" method="GET"> 
                    <div class="form-group d-flex fledx-row justify-content-end pt-3">
                        <label class="pr-2 pt-2" for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                    </div>
                </form>  
            
                <form class="dataNascimento" method="GET" >
                    <div class="form-group d-flex fledx-row justify-content-end">
                        <label class="pr-2 pt-2" for="nome">Data Nascimento</label>
                        <input type="date" class="form-control" id="dtnsc" name="dtnsc" placeholder="DD/MM/AAAA" maxlength="10" required><br>
                    </div>
                </form>

                <div class="sexo d-flex fledx-row justify-content-end">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexoFeminino" name="sexoFeminino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoFeminino">Feminino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexoMasculino" name="sexoFeminino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoMasculino">Masculino</label>
                    </div>
                </div>

                <form class="idade" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end pt-3">
                        <label class="pr-2 pt-2" for="idade">Idade</label>
                        <input type="text" class="form-control" id="idade" placeholder="Digite sua idade">
                    </div>  
                </form>    
                    
                <form class="documento" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="documento">Documento</label>
                        <input type="text" class="form-control" id="documento" placeholder="Digite seu documento">
                    </div>
                </form>

                <div class="estadoCivil d-flex flex-row justify-content-end pb-2">
                    <label class="pr-2"for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil" name="estadoCivil" required="required">
                        <option value="estadoCivil">Estado Civil</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="sasado">Casado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="sivorciado">Divorciado(a)</option>
                        <option value="viuvo"<Viuvo(a)></option>
                    </select><br>
                </div>
            
    
                <form class="button d-flex justify-content-end pb-5" method="GET">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>

<!-- ENDEREÇO -->
                <div class="endereco1 d-flex fledx-row justify-content-center pt-1">
                        <h4>Endereço</h4>
                </div>
                
                <?php
                require './assets/includes/comboBoxPaises.html'
                ?><br>


            <div class="enderecoCompleto">
                <form class="cep" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end pt-3">
                        <label class="pr-2 pt-2" for="cep">CEP</label>
                        <input type="number" class="form-control" id="cep" placeholder="Somente número">
                    </div>  
                </form>    
                    
                <form class="endereco" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Ex. Avenida Brasil, 200">
                    </div>
                </form>
                
                <form class="complemento" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Ex. Apto. 23 Bloco A">
                    </div>
                </form>

                <form class="cidade" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Selecione sua cidade">
                    </div>
                </form>  

                <form class="estado" method="GET">
                    <div class="form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" placeholder="Selecione seu Estado">
                    </div>
                </form>
            </div>
            
            <form class="button d-flex justify-content-end pb-5" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
            </form>   

<!-- CONTATO E REDES SOCIAIS -->

                <div class="contatos d-flex fledx-row justify-content-center pt-1">
                    <h4>Contato</h4>
                </div>

                <form class="contatoPessoal" method="GET">
                    <div class="email form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="email">E-mail</label>
                        <input type="mail" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="telefone form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="telefone">Telefone</label>
                        <input type="number" class="form-control" id="telefone" placeholder="(00) 0000-0000">
                    </div>
                    <div class="celular form-group d-flex flex-row justify-content-end">
                        <label class="pr-2 pt-2" for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" placeholder="(00) 00000-0000">
                    </div>
                </form>


                <div class="redes-sociais pt-4">
                    <h4>Redes Sociais</h4>
                    <div class="redes-sociais pt-2 pb-2">
                        <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                            <a href="https://www.linkedin.com">Linkedin: linkedin.com/kaysar254895</a><br>
                        <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                            <a href="https://www.instagram.com/">Instagram: @kaysar </a><br>
                        <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                            <a href="https://www.facebook.com/">Facebook: Kaysar Dadour</a>
                    </div>
                </div>

                <form class="button d-flex justify-content-end pb-3" method="GET">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>
            </section>
       <!-- </div>
 <!-- TÉRMINO DA 1° GRID -->


 <!-- INÍCIO DA 2° GRID md 6 -->
 <!-- OBJETIVO PROFISSIONAL -->
        <section class="objetivo-profissional col-md-6 border">

            <div class="objetivoProfissional d-flex flex-row justify-content-center pt-2">
                <h4>Objetivo Profissional</h4>
            </div>

            <div class="form-group pt-2">
                <textarea class="form-control" id="resumo" rows="3">Digite aqui o seu objetivo profissional</textarea>
            </div>
                
            <div class="areasInteresse d-flex flex-row justify-content-center pt-4">
                <h5>Areas de Interesse</h5>
            </div>

            <div class="areasInteresses d-flex flex-row justify-content-end pb-2">
                <label class="areas pr-2"for="areas">Selecione a área</label>
                <select class="areasInteresses" name="areas" required="required">
                    <option value="">Selecione a área</option>
                    <option value="administrativo">Administrativo</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="recursosHumanos">Recursos Humanos</option>
                    <option value="setorComercial">Setor Comercial</option>
                    <option value="setorOperacional">Setor Operacional</option>
                    <option value="tecnologia">Tecnologia</option>
                </select><br>
            </div>

<!-- EXPERIÊNCIA PROFISSIONAL -->
            <div class="experiencia d-flex flex-row justify-content-center pt-5">
                <h5>Experiência</h5>
            </div>
            
            <div class="form-group pt-2">
                <label for="resumo">Resumo Profissional</label>
                <textarea class="form-control" id="resumo" rows="3"></textarea>
            </div>

            <div class="cargo form-group d-flex flex-row justify-content-end">
                <label class="pr-2 pt-2" for="cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" placeholder="">
            </div>               
                
            <div class="data pt-2">
                <label class="pr-2 pt-2" for="dataInicio">Data início</label>
                    <?php
                        require './assets/includes/comboBoxMesAno.html'
                    ?><br>
                
                <label class="pr-2 pt-2" for="dataTermino">Data término</label>
                    <?php
                        require './assets/includes/comboBoxMesAno.html'
                    ?>
                </div><br>
                
            <div class="form-group">
                <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" rows="3"></textarea>
            </div>

            <form class="button d-flex justify-content-end pb-3">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
            </form>

        
    
                <div class="formacaoAcademica1 d-flex flex-row justify-content-center pt-2">
                    <h4>Formação Acadêmica</h4>
                </div>

                <form class="formacaoAcademica pt-2" method="GET">
                    <div class="instituicao form-group d-flex flex-row justify-content-center pt-3">
                        <label class="pr-2 pt-2" for="instituicao">Instituição</label>
                        <input type="text" class="form-control" id="instituicao" placeholder="">
                    </div>
                    <div class="formacao form-group d-flex flex-row justify-content-center">
                        <label class="pr-2 pt-2" for="formacao">Formação</label>
                        <input type="text" class="form-control" id="formacao" placeholder="">
                    </div>
                </form>
                
                <div class="data pt-2">
                    <label class="pr-2 pt-2" for="dataInicio">Data início</label>
                        <?php
                            require './assets/includes/comboBoxMesAno.html'
                        ?><br>
            
                    <label class="pr-2 pt-2" for="dataTermino">Data término</label>
                        <?php
                            require './assets/includes/comboBoxMesAno.html'
                        ?>
                </div>

                <div class="form-group pt-4">
                    <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3"></textarea>
                </div>

                <form class="button d-flex justify-content-end pb-3" method="GET">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>  

            </section>
        </div>
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