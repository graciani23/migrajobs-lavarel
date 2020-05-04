<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/curriculo.css">

    <title>Candidato</title>
</head>

<body>
    @include('includes/menuNewCurriculo')
                <img src="assets/icones/user.svg" alt="">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="fundo">
            <div class="foto">
                <img src="" alt="">
            </div>
        </div>

        <section class="dados-pessoais border pt-4">
            <div class="form-row mx-4">
                <div class="col">
                    <label class="label-nome pt-5" style="font-weight:bold" for="nome">Nome</label>
                    <div style="color:black">Isa Mary</div> 
                    
                </div>
                <div class="col">
                    <label class="label-nome pt-5" style="font-weight:bold" id="nationality" for="nationality">Nacionalidade</label>
                    <div style="color:black"> Brasileira</div> 
                </div>
            </div>

            <div class="form-group mx-4 px-1">
                <label class="label-nome pt-4" style="font-weight:bold" id="about_you" for="about_you">Sobre você</label>
                <div style="color:black">Várias coias</div> 
            </div>

            <div class="form-row pt-2 mx-4">
                <div class="col">
                    <label class="data-nascimento" style="font-weight:bold" for="birth">Data de Nascimento</label>
                    <div style="color:black">10/06/1986</div>
                </div>
                <div class="col">
                    <label class="document" style="font-weight:bold" id="document" for="idade">Documento</label>
                    <div style="color:black">123456789</div>
                </div>
            </div>

            <div class="sexo form-row pt-4 mx-4">
                <div class="col form-row">
                    <label class="pl-1" style="font-weight:bold" for="gender">Sexo</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="genge" name="genre" class="custom-control-input">
                        <div style="color:black">Feminino</div>
                    </div>
                </div>
            
                <div class="estadoCivil col form-row pb-4 mx-4">
                    <label class="pl-1" style="font-weight:bold" for="status">Estado Civil</label>
                    <div class="pl-3" style="color:black">Solteira</div> 
                </div>
            </div>
        </section>

        <section class="endereco border mt-3 d-flex flex-column">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>
            <div class="row">
            <div class="form-row ml-4 col pr-5">
                <div class="form-group ">
                    <label for="zip-code" style="font-weight:bold">CEP</label>
                    <div style="color:black">09655000</div> 
                    <div class="form-group pt-4">
                        <label for="adress" style="font-weight:bold">Logradouro</label>
                        <div style="color:black">Rua Antonio Frederico</div> 
                    </div>
                </div>

                <div class="form-group col px-5 ">
                    <label for="city" style="font-weight:bold">Cidade</label>
                    <div style="color:black"> São Paulo </div> 
                    <div class="form-group pt-4">
                        <label for="number" style="font-weight:bold">Número</label>
                        <div style="color:black"> 254 </div> 
                    </div>
                </div>

                <div class="form-group col">
                    <label for="uf" style="font-weight:bold">UF</label>
                    <div style="color:black"> SP </div> 
                    <div class="form-group pt-4">
                        <label for="complement" style="font-weight:bold">Complemento</label>
                        <div style="color:black">Galpão </div> 
                    </div>
                </div>
            </div>
        </div>


            <!--<div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>-->
        </section> 

        <section class="contato border mt-3 display">
            <div class=" align-self-start pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            <div class="row">
                <div class="form-row col align-self-center py-3 mx-4">
                    <div class="">
                        <label class="telefone-fixo pr-5" style="font-weight:bold" id="telephone" for="telephone">Telefone fixo</label>
                        <div style="color:black">11123456789</div> 
                    </div>
                    <div class="">
                        <label class="celular" style="font-weight:bold" for="cell_phone">Celular</label>
                        <div style="color:black"> 987654321</div> 
                    </div>
                </div>

                <div class="redes-sociais col form-row px-2">
                    <div class="align-self-center pr-5">
                        <img src="/assets/icones/quadrado-linkedin.png" alt="linkedin">
                        <a href="">Likedin</a> 
                    </div>
                        <div class="align-self-center pr-5">
                        <img src="/assets/icones/quadrado-Instagram.png" alt="instagram">
                        <a href="">Instagram</a>
                    </div>
                        <div class="align-self-center">
                        <img src="/assets/icones/quadrado-facebook.png" alt="facebook">
                        <a href="">Facobook</a>
                    </div>
                </div>
            </div>

    <!--<div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>-->
        </section>  

        <section class="objetivo-profissional border mt-3">
            <div class="Experiência pt-3 mx-4">
                <h4>Experiência</h4>
            </div>

            <div class="form-group pt-3 px-1 mx-4">
                <label for="professional-goal" style="font-weight:bold">Objetivo Profissional</label>
                <div style="color:black"> Vários </div> 
            </div>

            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas" style="font-weight:bold">Areas de interesse</label>
                <div style="color:black"> Tecnologia </div> 
            </div>

            <div class="form-group pt-4 px-1 mx-4">
                <label for="professional_experience" style="font-weight:bold">Experiência</label>
                <div style="color:black"> Várias  </div> 
            </div>

            <div class="empresa form-group px-1 mx-4">
                <label class="pr-2 pt-2" style="font-weight:bold" for="company">Empresa</label>
                <div style="color:black"> Banco Itaú  </div> 
            </div>

            <div class="cargo form-group px-1 mx-4">
                <label class="pr-2 pt-2" style="font-weight:bold" for="jobe_role">Cargo</label>
                <div style="color:black">Desenvolvedora Back-end </div> 
            </div>
            
            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" name="month" style="font-weight:bold" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <label class="termino pr-2" name="year" style="font-weight:bold" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

                </div><br>

            <div class="form-group pt-3 mx-4 pb-3">
                <label for="job_description" style="font-weight:bold">Descrição</label>
                <div style="color:black"> Muitas coisas  </div> 
            </div>

            <!--<div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>-->
        </section>

        <section class="formacao-academica border mt-3">
            <div class="formacaoAcademica pt-3 mx-4">
                <h4>Formação Acadêmica</h4>
            </div>

            <form class="formacaoAcademica mx-4" method="">
                <div class="instituicao form-group pt-3">
                    <label class="pr-2" style="font-weight:bold" for="instution">Instituição</label>
                    <div style="color:black"> Digital House  </div> 
                </div>

                <div class="formacao form-group">
                    <label class="pr-2 pt-2" style="font-weight:bold" for="formation">Formação</label>
                    <div style="color:black"> Desenvolvimento Web Full Stack  </div> 
                </div>
            </form>

            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" style="font-weight:bold" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <br>
                <label class="termino pr-2" style="font-weight:bold" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

            </div><br>

            <div class="form-group pt-3 mx-4">
                <label for="course_description" style="font-weight:bold">Descrição</label>
                <div style="color:black"> PHP, JS, e muitos outros </div> 
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4" method="post">

                <a href="{{route('areaEmpresa')}}" class="editar btn btn-primary pl-3 m-1" type> Voltar</a>
                
            </div>
        </section>
    </div>

    <div class="rodape mt-3">
        <footer>
            <div class="logo">MigraJobs</div>
            <br>© MigraJobs atividades de Internet, Ltda. Todos os direitos reservados.
        </footer>
    </div>

<script src="/js/buscaCep.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
