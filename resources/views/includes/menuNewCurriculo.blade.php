

<header>
    <div class="container">
        <div class="principal d-flex align-items-center">
        <div class="logo"><a href="/">MigraJobs</a></div>
            <nav class="pt-3">
                <ul class="">
                    <li><a href="/candidatos/homeCandidato">Home</a></li>
                    <li><a href="/vagasCandidato/vagasInscritas">Candidaturas</a></li>
                    <li><a href="/vagasCandidato/vagasEmpresa">Buscar vagas</a></li>
                    <li><a href="/candidatos/candidato">Currículo</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit()" class="sair">Sair</a>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav>

            <div class="user">
                Olá, {{ Auth::user()->name }}!
             </div>

             
            
             
         
        </ul>
    </nav>


        </div>
    </div>
