<header>
        <div class="container">

            <div class="principal">
                <div class="logo mt-2"><a href="index">MigraJobs</a></div>
                <nav>
                    <ul>
                        <li><a href="/empresa-index">Home</a></li>
                        <li><a href="/empresa">Meu perfil</a></li>
                        <li><a href="/publicar-vagas">Publicar vagas</a></li>
                    </ul>
                </nav>

                <div class="user">
                   Olá, {{ Auth::user()->name }}
                </div>

            </div>
        </div>
    </header>
