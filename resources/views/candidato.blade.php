<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/curriculo.css">

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
                <img src="{{ asset($candidato->image) }}" alt="">
            </div>
        </div>
        <form>
            <div class="editar-foto form-group">
                <label for="edit-photo"></label>
                <input type="file" class="form-control-file" name="edit_photo" id="edit_photo">
            </div>
        </form>
        <section class="dados-pessoais border">
)
            <div class="form-row pt-4 mx-4">
                <div class="col">
                    <label class="label-nome pt-5" for="nome">Nome</label>
                <input type="text" class="form-control border-secondary" name="name" id="name" placeholder="Nome" value="{{ $candidatos->name }}">
                </div>
                <div class="col">
                    <label class="label-nome pt-5" id="nationality" for="nationality">Nacionalidade</label>
                <input type="text" class="form-control border-secondary" name="nationality" id="nationality" placeholder="Nacionalidade" value="{{ $candidatos->nationality }}">
                </div>
            </div>

            <div class="form-group pt-3 mx-4 px-1">
                <textarea class="form-control border-secondary" name="about_you" id="about_you" rows="4" placeholder="Fale sobre você">{{ $candidados->about_you }}</textarea>
            </div>

            <div class="form-row pt-2 mx-4">
                <div class="col">
                    <label class="data-nascimento" for="data-nascimento">Data de Nascimento</label>
                <input type="text" class="form-control border-secondary" name="birth" id="birth" placeholder="dd/mm/aaaa" value="{{ $candidatos->birth }}">
                </div>
                <div class="col">
                    <label class="idade" id="idade" for="idade">Idade</label>
                <input type="text" class="form-control border-secondary" name="age" id="age" placeholder="Digite sua idade" value="{{ $candidatos->age }}">
                </div>
            </div>

            <div class="sexo form-row pt-4 mx-4">
                <div class="custom-control custom-radio custom-control-inline pt-1 ">
                <input type="radio" id="genre_female" name="genre_female" class="custom-control-input" value="{{ $candidatos->genre_female }}">
                    <label class="custom-control-label" for="genre_female">Feminino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline pt-1">
                    <input type="radio" id="genre_male" name="genre_male" class="custom-control-input" value="{{ $candidatos->genre_male }}">
                    <label class="custom-control-label" for="genre_male">Masculino</label>
                </div>
                <div class="estadoCivil">
                    <label class=""for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil bg-white border-secondary " name="status" id="status" >
                        <option value="{{ $candidados->status }}">Estado Civil</option>
                        <option value="{{ $candidados->status }}">Solteiro(a)</option>
                        <option value="{{ $candidados->status }}">Casado(a)</option>
                        <option value="{{ $candidados->status }}">Separado(a)</option>
                        <option value="{{ $candidados->status }}">Divorciado(a)</option>
                        <option value="{{ $candidados->status }}"> Viúvo(a)></option>
                    </select><br>
                </div>
            </div>
            @endforeach

                <div class="button d-flex justify-content-end py-4 mr-4" method="">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
                </div>
        </section>

        <section class="endereco border mt-3">
            <div class="pt-3 mx-4">
                <h4>Endereço</h4>
            </div>

            <div class="form-row mx-4">
                <div class="form-group col-md-4">
                    <label for="zip-code">CEP</label>
                <input type="text" class="form-control border-secondary" name="zip_code" id="cep" value="{{ $candidatos->zip_code }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control border-secondary" name="city" id="cidade" value="{{ $candidatos->city }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="city">UF</label>
                    <input type="text" class="form-control border-secondary" name="uf" id="uf" value="{{ $candidatos->uf }}">
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
                    <input type="text" class="form-control border-secondary" name="adress" id="rua" placeholder="Ex. Avenida Brasil" value="{{ $candidatos->adress }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control border-secondary" name="number" id="numero" {{ $candidatos->number }}>
                </div>

            </div>

            <div class="form-group mx-4 px-1">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control border-secondary" name="complement" id="complemento" placeholder="Ex. Apartamento 23 Bloco A" {{ $candidatos->complement }}>
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>
        </section>

        <section class="contato border mt-3">
            <div class="pt-3 mx-4">
                <h4>Contato</h4>
            </div>

            <div class="email form-group mx-4 pt-3 px-1">
                <label class="pr-2" for="email">E-mail</label>
            <input type="mail" class="form-control border-secondary" name="email" id="email" placeholder="name@example.com" value="{{ $candidatos->email }}">
            </div>

            <div class="form-row pt-3 mx-4">
                <div class="col">
                <label class="telefone-fixo" id="telefone-fixo" for="telephone">Telefone fixo</label>
                    <input type="number" class="form-control border-secondary" name="telephone" id="telephone" placeholder="+55 (00) 0000-0000" value="{{ $candidatos->telephone }}">
                </div>
                <div class="col">
                    <label class="celular" for="cell-phone">Celular</label>
                    <input type="number" class="form-control border-secondary" name="cell_phone" id="cell_phone" placeholder="+55 (00) 00000-0000" value="{{ $candidatos->cel_phone }}">
                </div>
            </div>

            <div class="redes-sociais form-row mx-4">
                <div class="col">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com"></a>
                    <label class="linkedin pt-4" for="linkedin">Linkedin</label>
                    <input type="text" class="form-control border-secondary" name="linkedin" id="linkedin" placeholder="Linkedin" value="{{ $candidatos->linkedin }}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/"></a>
                    <label class="instagram pt-4" for="instagram">Instagram</label>
                    <input type="text" class="form-control border-secondary" name="instagram" id="instagram" placeholder="Instagram" value="{{ $candidatos->instagram }}">
                </div>
                    <div class="col">
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/"></a>
                    <label class="facebook pt-4" for="facebook">Facebook</label>
                    <input type="text" class="form-control border-secondary" name="facebook" id="facebook" placeholder="Facebook" value="{{ $candidatos->facebook }}">
                </div>
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>
        </section>

        <section class="objetivo-profissional border mt-3">
            <div class="Experiência pt-3 mx-4">
                <h4>Experiência</h4>
            </div>

            <div class="form-group pt-3 px-1 mx-4">
                <label for="professional-goal">Objetivo Profissional</label>
                <textarea class="form-control border-secondary" name="professional_goal" id="professional_goal" rows="4" placeholder="Digite seu objetivo profissional"> {{ $candidatos->professional_goal}} @endforeach</textarea>
            </div>

            <div class="areasInteresses pb-2 px-1 mx-4">
                <label for="areas">Areas de interesse</label>
                <select class="bg-light border-secondary" name="areas" id="areas" >
                    <option value="{{ $candidatos->areas }}">Selecione a área</option>
                    <option value="{{ $candidatos->areas }}">Administrativo</option>
                    <option value="{{ $candidatos->areas }}">Financeiro</option>
                    <option value="{{ $candidatos->areas }}">Recursos Humanos</option>
                    <option value="{{ $candidatos->areas }}">Setor Comercial</option>
                    <option value="{{ $candidatos->areas }}">Setor Operacional</option>
                    <option value="{{ $candidatos->areas }}">Tecnologia</option>
                </select><br>
            </div>

            <div class="form-group pt-4 px-1 mx-4">
                <label for="experience">Experiência</label>
                <textarea class="form-control border-secondary" name="professional_experience" id="professional_experience" rows="4" placeholder="Digite seu resumo profissional"> {{ $candidatos->professional_experience }} </textarea>
            </div>

            <div class="empresa form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="company">Empresa</label>
                <input type="text" class="form-control border-secondary" name="company" id="company" placeholder="" value="{{ $candidatos->company }}">
            </div>

            <div class="cargo form-group px-1 mx-4">
                <label class="pr-2 pt-2" for="cargo">Cargo</label>
                <input type="text" class="form-control border-secondary" name="job_role" id="job_role" placeholder="" value="{{ $candidatos->job_role }}">
            </div>
            
            <div class="data form-row pt-2 mx-4">
                <label class="inicio pr-2" for="dataInicio">Data início:</label>

                    @include('./includes/comboBoxMesAno')

                <label class="termino pr-2" for="dataTermino">Data término:</label>

                    @include('./includes/comboBoxMesAno')

                </div><br>

            <div class="form-group pt-3 mx-4">
                <label for="job-description">Descrição</label>
                <textarea class="form-control border-secondary" name='job_description' id="job_description" rows="4" placeholder="Descrição do cargo"> {{ $candidatos->job_description }} </textarea>
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4" method="">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>
        </section>

        <section class="formacao-academica border mt-3">
            <div class="formacaoAcademica pt-3 mx-4">
                <h4>Formação Acadêmica</h4>
            </div>

            <form class="formacaoAcademica mx-4" method="">
                <div class="instituicao form-group pt-3">
                    <label class="pr-2" for="instituicao">Instituição</label>
                    <input type="text" class="form-control border-secondary" name="instution" id="instution" placeholder="">
                </div>

                <div class="formacao form-group">
                    <label class="pr-2 pt-2" for="formation">Formação</label>
                <input type="text" class="form-control border-secondary" name="formation" id="formation" placeholder="" value=" {{ $candidatos->formation }} ">
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
                <textarea class="form-control border-secondary" name="course_description" id="course_description" rows="4" placeholder="Descrição do curso"> {{ $candidatos->course_description }} </textarea>
            </div>

            <div class="button d-flex justify-content-end py-4 mr-4" method="GET">
                <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick="">
                <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick="">
            </div>
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
