

<header>
    <div class="container">
        <div class="principal d-flex align-items-center">
        <div class="logo"><a href="/index">MigraJobs</a></div>
            <nav class="pt-3">
                <ul class="">
                    <li><a href="">Home</a></li>
                    <li><a href="#">Candidaturas</a></li>
                    <li><a href="search">Buscar vagas</a></li>
                    <li><a href="#">Currículo</a></li>
                </ul>
            </nav>

            <div class="user">
            <label class="px-1" for="">Seja bem vindo(a), {{ Auth::user()->name }}! </label>
            </div>

            <div class="logout">

                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit()"; class="sair">Sair
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
