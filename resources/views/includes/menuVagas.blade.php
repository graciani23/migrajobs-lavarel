<header>
        <div class="container">

            <div class="principal">
                <div class="logo mt-2"><a href="index">MigraJobs</a></div>
                <nav>
                    <ul>
                        <li><a href="empresa-index">Home</a></li>
                        <li><a href="empresa">Área da empresa</a></li>
                        <li><a href="vaga-index">Minhas vagas</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()" class="sair">Sair</a>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    </ul>
                </nav>

                <div class="user">
                   Olá, {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </header>