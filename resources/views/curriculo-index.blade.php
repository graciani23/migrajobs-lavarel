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

    <div class="container">
        <div class="fundo">
            <div class="foto">
                @foreach ($candidatos as $candidato)
            <img src="{{ asset($candidato->image) }}" alt="">
                @endforeach
            </div>
        </div>
        <form>
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
                <input type="file" class="form-control-file" name="edit-photo" id="edit-photo">
            </div>
        </form>
        <section class="dados-pessoais border">

            @foreach ($candidatos as $candidato)
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pt-5" for="nome">Nome</label>
                <input type="text" class="form-control border-secondary" name="name" id="name" placeholder="Nome" value="{{ $candidato->name }}">
                </div>
                <div class="col">
                    <label class="label-nome pt-5" id="nationality" for="nationality">Nacionalidade</label>
                <input type="text" class="form-control border-secondary" name="nationality" id="nationality" placeholder="Nacionalidade" value="{{ $candidato->nationality }}">
                </div>
            </div>
            @endforeach

            <div class="form-group pt-3 mx-4 px-1">
                <textarea class="form-control border-secondary" name="about-you" id="about-you" rows="4" placeholder="Fale sobre você">@foreach ($candidatos as $candidato) {{ $candidado->about-you }} @endforeach</textarea>
            </div>

            @foreach ($candidatos as $candidato)
            <div class="form-row pt-2 mx-4">
                <div class="col">
                    <label class="data-nascimento" for="data-nascimento">Data de Nascimento</label>
                <input type="text" class="form-control border-secondary" name="birth" id="birth" placeholder="dd/mm/aaaa" value="{{ $candidato->birth }}">
                </div>
                <div class="col">
                    <label class="idade" id="idade" for="idade">Idade</label>
                <input type="text" class="form-control border-secondary" name="age" id="age" placeholder="Digite sua idade" value="{{ $candidato->age }}">
                </div>
            </div>

            <div class="sexo form-row pt-4 mx-4">
                <div class="custom-control custom-radio custom-control-inline pt-1 ">
                <input type="radio" id="female" name="genre-female" class="custom-control-input" value="{{ $candidato->genre-female }}">
                    <label class="custom-control-label" for="genre-female">Feminino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="male" name="genre-male" class="custom-control-input" value="{{ $candidato->genre-male }}">
                    <label class="custom-control-label" for="genre-male">Masculino</label>
                </div>
                <div class="estadoCivil">
                    <label class=""for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil bg-white border-secondary " name="status" id="status" required="required">
                        <option value="{{ $candidado->status }}">Estado Civil</option>
                        <option value="{{ $candidado->status }}">Solteiro(a)</option>
                        <option value="{{ $candidado->status }}">Casado(a)</option>
                        <option value="{{ $candidado->status }}">Separado(a)</option>
                        <option value="{{ $candidado->status }}">Divorciado(a)</option>
                        <option value="{{ $candidado->status }}"> Viúvo(a)></option>
                    </select><br>
                </div>
            </div>
            @endforeach

                <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
                </form>
        </section>

        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>

            @foreach ($candidatos as $candidato)
            <div class="form-row mx-4">
                <div class="form-group col-md-4">
                    <label for="zip-code">CEP</label>
                <input type="text" class="form-control border-secondary" name="zip-code" id="cep" value="{{ $candidato->zip-code }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control border-secondary" name="city" id="cidade" value="{{ $candidato->city }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="city">UF</label>
                    <input type="text" class="form-control border-secondary" name="uf" id="uf" value="{{ $candidato->uf }}">
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
                    <input type="text" class="form-control border-secondary" name="adress" id="rua" placeholder="Ex. Avenida Brasil" value="{{ $candidato->adress }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control border-secondary" name="number" id="numero" {{ $candidato->number }}>
                </div>

            </div>

            <div class="form-group mx-4 px-1">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control border-secondary" name="complement" id="complemento" placeholder="Ex. Apartamento 23 Bloco A" {{ $candidato->complement }}>
            </div>
            @endforeach


            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>

        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            @foreach ($candidatos as $candidato)
            <div class="email form-group mx-4 pt-3 px-1">
                <label class="pr-2" for="email">E-mail</label>
            <input type="mail" class="form-control border-secondary" name="email" id="email" placeholder="name@example.com" value="{{ $candidato->email }}">
            </div>

            <div class="form-row pt-3 mx-4">
                <div class="col">
                <label class="telefone-fixo" id="telefone-fixo" for="telephone">Telefone fixo</label>
                    <input type="number" class="form-control border-secondary" name="telephone" id="telephone" placeholder="+55 (00) 0000-0000" value="{{ $candidato->telephone }}">
                </div>
                <div class="col">
                    <label class="celular" for="cell-phone">Celular</label>
                    <input type="number" class="form-control border-secondary" name="cell-phone" id="cell-phone" placeholder="+55 (00) 00000-0000" value="{{ $candidato->cel-phone }}">
                </div>
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" name="linkedin" id="linkedin" placeholder="Linkedin" value="{{ $candidato->linkedin }}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" name="instagram" id="instagram" placeholder="Instagram" value="{{ $candidato->instagram }}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" name="facebook" id="facebook" placeholder="Facebook" value="{{ $candidato->facebook }}">
                </div>
            </div>
            @endforeach

            <form class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </form>
        </section>

        <section class="objetivo-profissional border mt-3">
            <div class="Experiência pt-3 mx-4">
                <h4>Experiência</h4>
            </div>

            <div class="form-group pt-3 px-1 mx-4">
                <label for="professional-goal">Objetivo Profissional</label>
                <textarea class="form-control border-secondary" name="professional-goal" id="professional-goal" rows="4" placeholder="Digite seu objetivo profissional">@foreach ($candidatos as $candidato) {{ $candidato->professional-goal}} @endforeach</textarea>
            </div>

            @foreach ($candidatos as $candidato)
            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Areas de interesse</label>
                <select class="bg-light border-secondary" name="areas" id="areas" required="required">
                    <option value="{{ $candidato->areas }}">Selecione a área</option>
                    <option value="{{ $candidato->areas }}">Administrativo</option>
                    <option value="{{ $candidato->areas }}">Financeiro</option>
                    <option value="{{ $candidato->areas }}">Recursos Humanos</option>
                    <option value="{{ $candidato->areas }}">Setor Comercial</option>
                    <option value="{{ $candidato->areas }}">Setor Operacional</option>
                    <option value="{{ $candidato->areas }}">Tecnologia</option>
                </select><br>
            </div>
            @endforeach

            <div class="form-group pt-4 px-1 mx-4">
                <label for="experience">Experiência</label>
            <textarea class="form-control border-secondary" name="professional-experience" id="professional-experience" rows="4" placeholder="Digite seu resumo profissional">@foreach ($candidatos as $candidato) {{ $candidato->professional-experience }} @endforeach</textarea>
            </div>

            @foreach ($candidatos as $candidato)
            <div class="empresa form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="company">Empresa</label>
            <input type="text" class="form-control border-secondary" name="company" id="company" placeholder="" value="{{ $candidato->company }}">
            </div>

            <div class="cargo form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="cargo">Cargo</label>
                <input type="text" class="form-control border-secondary" name="job-role" id="job-role" placeholder="" value="{{ $candidato->job-role }}">
            </div>
            
            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <label class="termino pr-2" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

                </div><br>

            <div class="form-group pt-3 mx-4">
                <label for="job-description">Descrição</label>
                <textarea class="form-control border-secondary" name='job-description' id="job-description" rows="4" placeholder="Descrição do cargo">@foreach ($candidatos as $candidato) {{ $candidato->job-description }} @endforeach</textarea>
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
                    <input type="text" class="form-control border-secondary" name="instution" id="instution" placeholder="">
                </div>

                <div class="formacao form-group">
                    <label class="pr-2 pt-2" for="formation">Formação</label>
                <input type="text" class="form-control border-secondary" name="formation" id="formation" placeholder="" value=" {{ $candidato->formation }} ">
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
                <textarea class="form-control border-secondary" name="course-description" id="course-description" rows="4" placeholder="Descrição do curso"> @foreach ($candidatos as $candidato) {{ $candidato->course-description }} @endforeach</textarea>
            </div>
            @endforeach

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

<script src="/js/buscaCep.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
