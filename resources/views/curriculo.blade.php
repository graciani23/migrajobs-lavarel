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
@include('includes/menuCurriculo')
                <img src="assets/icones/user.svg" alt="">
            </div>
        </div>
    </header>
<form action="curriculo" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="fundo">
            
            <div class="foto">
                <img src="assets/img/refugiado.jpg" alt="">
            </div>
            
        </div>
        {{csrf_field()}}

        <div class="editar-foto form-group">
            <label for="edit-photo"></label>    
            <input type="file" class="form-control-file" name="edit_photo" id="edit_photo">
        </div>

        <section class="dados-pessoais border">

            
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pt-3" for="nome">Nome</label>
                    <input type="text" class="form-control border-secondary" name="name" id="name" placeholder="Nome" value="{{isset($candidato->name) ? $candidato->name : ''}}">
                </div>
                <div class="col">
                    <label class="label-nome pt-3" id="nationality" for="nationality">Nacionalidade</label>
                    <input type="text" class="form-control border-secondary" name="nationality" id="nationality" placeholder="Nacionalidade" value="{{isset($candidato->nationality) ? $candidato->nationality : ''}}">
                </div>
            </div>
            

            <div class="form-group pt-3 mx-4 px-1">
                <textarea class="form-control border-secondary" name="about_you" id="about_you" rows="4" placeholder="Fale sobre você">{{isset($candidato->about_you) ? $candidato->about_you : ''}}</textarea>
            </div>

            
            <div class="form-row pt-2 mx-4">
                <div class="col">
                    <label class="documento" id="document" for="document">Documento</label>
                    <input type="text" class="form-control border-secondary" name="document" id="document" placeholder="Digite seu documento" value="{{isset($candidato->document) ? $candidato->document : ''}}">
                </div>
                <div class="col">
                    <label class="data-nascimento" for="data-nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control border-secondary" name="birth" id="birth" placeholder="dd/mm/aaaa" value="{{isset($candidato->birth) ? $candidato->birth : ''}}">
                </div>
            </div>
            

            <div class="sexo form-row pt-4 mx-4">
                <!--<div class="custom-control custom-radio custom-control-inline pt-1 ">
                    <input type="checkbox" id="genre_female" name="genre_female" class="custom-control-input" value="{{isset($candidato->genre_female) ? $candidato->genre_female : ''}}">
                    <label class="custom-control-label" for="genre_female">Feminino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="checkbox" id="genre_male" name="genre_male" class="custom-control-input" value="{{isset($candidato->genre_male) ? $candidato->genre_male : ''}}">
                    <label class="custom-control-label" for="genre_male">Masculino</label>
                </div>-->

                <div class="estadoCivil pb-4">
                    <label class=""for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil bg-white border-secondary" name="status" id="status" >
                        <option value="">Estado Civil</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo"> Viúvo(a)</option>
                    </select><br>
                </div>
            </div>

                <!--<div class="button d-flex justify-content-end py-4 mr-4" method="">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
                </div>-->
        </section>

        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>


            <div class="form-row mx-4">
                <div class="form-group col-md-4">
                    <label for="zip-code">CEP</label>
                    <input type="text" class="form-control border-secondary" name="zip_code" id="cep" value="{{isset($candidato->zip_code) ? $candidato->zip_code : ''}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control border-secondary" name="city" id="cidade" value="{{isset($candidato->city) ? $candidato->city : ''}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="city">UF</label>
                        <input type="text" class="form-control border-secondary" name="uf" id="uf" value="{{isset($candidato->uf) ? $candidato->uf : ''}}">
                </div>
                <!--
                <div class="form-group col-md-4">
                    <label for="state">Estado</label>
                    <select class="form-control border-secondary" name="state" id="state">

                        @include('./includes/comboEstados')

                    </select>
                </div>
                -->

            </div>

            <div class="form-row mx-4">
                <div class="form-group col-md-10">
                    <label for="adress">Logradouro</label>
                    <input type="text" class="form-control border-secondary" name="adress" id="rua" placeholder="Ex. Avenida Brasil" value="{{isset($candidato->adress) ? $candidato->adress : ''}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control border-secondary" name="number" id="numero" value="{{isset($candidato->number) ? $candidato->number : ''}}">
                </div>
            </div>

            <div class="form-group mx-4 px-1 pb-3">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control border-secondary" name="complement" id="complemento" placeholder="Ex. Apartamento 23 Bloco A" value="{{isset($candidato->complement) ? $candidato->complement : ''}}">
            </div>
                 
            <!--<div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>-->
        </section>
        

        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>


            <div class="form-row pt-3 mx-4">
                <div class="col">
                <label class="telefone-fixo" id="telefone-fixo" for="telephone">Telefone fixo</label>
                    <input type="number" class="form-control border-secondary" name="telephone" id="telephone" placeholder="+55 (00) 0000-0000" value="{{isset($candidato->telephone) ? $candidato->telephone : ''}}">
                </div>
                <div class="col">
                    <label class="celular" for="cell-phone">Celular</label>
                    <input type="number" class="form-control border-secondary" name="cell_phone" id="cell_phone" placeholder="+55 (00) 00000-0000" value="{{isset($candidato->cell_phone) ? $candidato->cell_phone : ''}}">
                </div>
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" name="linkedin" id="linkedin" placeholder="Linkedin" value="{{isset($candidato->linkedin) ? $candidato->linkedin : ''}}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" name="instagram" id="instagram" placeholder="Instagram" value="{{isset($candidato->instagram) ? $candidato->instagram : ''}}">
                </div>
                    <div class="col pb-4">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" name="facebook" id="facebook" placeholder="Facebook" value="{{isset($candidato->facebook) ? $candidato->facebook : ''}}">
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
                <label for="professional-goal">Objetivo Profissional</label>
                <textarea class="form-control border-secondary" name="professional_goal" id="professional_goal" rows="4" placeholder="Digite seu objetivo profissional">{{isset($candidato->profissional_goal) ? $candidato->profissional_goal : ''}}</textarea>
            </div>

            <div class="areasInteresses pb-2 px-1 mx-4">
                
            </div>

            <div class="form-group pt-4 px-1 mx-4">
                <label for="experience">Experiência</label>
                <textarea class="form-control border-secondary" name="professional_experience" id="professional_experience" rows="4" placeholder="Digite seu resumo profissional">{{isset($candidato->professional_experience) ? $candidato->professional_experience : ''}}</textarea>
            </div>

            <div class="empresa form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="company">Empresa</label>
                <input type="text" class="form-control border-secondary" name="company" id="company" placeholder="" value="{{isset($candidato->company) ? $candidato->company : ''}}">
            </div>

            <div class="cargo form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="cargo">Cargo</label>
                <input type="text" class="form-control border-secondary" name="job_role" id="job_role" placeholder="" value="{{isset($candidato->job_role) ? $candidato->job_role : ''}}">
            </div>

            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <label class="termino pr-2" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

                </div><br>

            <div class="form-group pt-3 pb-3 mx-4">
                <label for="job-description">Descrição</label>
                <textarea class="form-control border-secondary" name='job_description' id="job_description" rows="4" placeholder="Descrição do cargo">{{isset($candidato->job_description) ? $candidato->job_description : ''}}</textarea>
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
                <div class="instituicao form-group pt-3 mx-4">
                    <label class="pr-2" for="instituicao">Instituição</label>
                    <input type="text" class="form-control border-secondary" name="instution" id="instution" placeholder="" value="{{isset($candidato->instution) ? $candidato->instution : ''}}">
                </div>

                <div class="formacao form-group mx-4">
                    <label class="pr-2 pt-2" for="formation">Formação</label>
                    <input type="text" class="form-control border-secondary" name="formation" id="formation" placeholder="" value="{{isset($candidato->formation) ? $candidato->formation : ''}}">
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
                <label for="course-description">Descrição</label>
                <textarea class="form-control border-secondary" name="course_description" id="course_description" rows="4" placeholder="Descrição do curso">{{isset($candidato->course_description) ? $candidato->course_description : ''}}</textarea>
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>
        </section>
    </div>
</form>

 

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
