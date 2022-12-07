
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Free</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}" sizes="16x16" />
    <!--Bootstrap -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    >
    <!-- CSS -->
    @vite([
            'resources/css/bootstrap/bootstrap.min.css',
            'resources/plugins/fontawesome-free/css/all.min.css',
            'resources/css/app.css',
            'resources/css/landing.css',
            'resources/js/app.js'
        ])
</head>
<body>
    <header class="header">
        <nav class="navbar d-flex justify-content-between">
            <img class="logo" src="{{ asset('storage/logo.png') }}" alt="Logo">
            <div class="header-button">
                <a class="btn fst-italic header-button-register" href='{{route('register')}}' type="button">Cadastrar</a>
                <a class="btn fst-italic header-button-login" href='{{route('login')}}' type="button">Entrar</a>
            </div>
        </nav>
    </header>
    <main class="bg-dark text-white">
        <div class="text-center pt-5 pb-5 fst-italic title-logo"><h1>Job Free</h1></div>
        <div class="d-flex justify-content-around">
            <div class="ladoA">
                <h2><span class="title-logo">Job Free</span> - Sua plataforma de Jobs</h2> <br>
                <p>
                    Nossa plataforma ajuda tanto o empregado quanto o empregador, facilitando a sua oferta de serviços, assim como a contratação desses jobs.
                </p>
                <p>
                    Devido à pandemia o <span class="fst-italic fst-bold">homeoffice</span> ficou muito mais visado e o desemprego aumentou em diversas áreas que não
                    são possíveis atuarem em <span class="fst-italic fst-bold">homeoffice</span> e as áreas que são possiveis ouve um crescimento significativamente, com a
                    <span class="title-logo">Job Free</span> queremos fomentar mais ainda o trabalho <span class="fst-italic fst-bold">homeoffice</span>, temos foco nas
                    áreas que possam ser desenvolvidas em casa: Programação, design, música, assessorias em geral, advocacia dentre outros. Porém, também temos focos em
                    serviços que possam ser de entrega presencial como: pintura, marcearia, construção de obras dentre outros também.
                </p>
                <br> <br> <br>
                <h5>
                    O importante é usar a criatividade divulgar seu trabalho e/ou contratar um trabalho de forma livre, segura e facil.
                    <br> <br> <br>
                    Use <span class="title-logo">Job Free</span>!!!
                </h5>
            </div>
            <div class="ladoB">
                <img class="img-landing" src="{{ asset('storage/landing1.webp') }}" >
            </div>
        </div>
    </main>
    <footer class="bg-dark text-center text-white footer-area">
        <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
            <span>
                Desenvolvido com <i class="fas fa-heart fa-fw"></i> por
                <a class="fst-italic" href="https://github.com/VitielloL">Lucas Vitiello</a> e
                <a class="fst-italic" href="https://github.com/RodrigoBCastro"> Rodrigo Castro </a>
                <br>
                © 2022 Copyright: <span class="title-logo">Job Free</span>, all rights reserved
            </span>
        </div>
    </footer>
</body>
</html>
