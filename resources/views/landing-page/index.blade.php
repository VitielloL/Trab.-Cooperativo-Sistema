
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Free</title>
        <!-- Favicons -->
        <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}" sizes="16x16" />
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
        <!-- CSS -->
        @vite([
                'resources/css/bootstrap/bootstrap.min.css',
                'resources/css/app.css',
                'resources/css/landing.css',
                'resources/js/app.js'
            ])
        <!-- JS -->
        <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>
    <body class="is-boxed has-animations">
        <div class="body-wrap">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <h1 class="m-0">
                                <a href="#">
                                    <img class="header-logo-image" src="../../../storage/logo.png" alt="Logo">
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
    
            <main>
                <section class="hero">
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-copy">
                                <h1 class="hero-title mt-0">Job Free - Sua plataforma de Jobs</h1>
                                <p class="hero-paragraph">Nossa plataforma ajuda tanto o empregado quanto o empregador, facilitando a sua oferta de serviços, assim como a contratação desses jobs.</p>
                                <div class="hero-cta"><a class="button button-primary" href="{{route('login')}}">Cadastre-se já</a><a class="button" href="#">Fale Conosco</a></div>
                            </div>
                            <div class="hero-figure anime-element">
                                <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                    <rect width="528" height="396" style="fill:transparent;" />
                                </svg>
                                <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                                <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                                <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                                <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                                <div class="hero-figure-box hero-figure-box-05"></div>
                                <div class="hero-figure-box hero-figure-box-06"></div>
                                <div class="hero-figure-box hero-figure-box-07"></div>
                                <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                                <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                                <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <section class="features section">
                    <div class="container">
                        <div class="features-inner section-inner has-bottom-divider">
                            <div class="features-wrap">
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-01.svg" alt="Feature 01">
                                        </div>
                                        <h4 class="feature-title mt-24">Descreva suas habilidades</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-02.svg" alt="Feature 02">
                                        </div>
                                        <h4 class="feature-title mt-24">Estipule o seu valor hora</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-03.svg" alt="Feature 03">
                                        </div>
                                        <h4 class="feature-title mt-24">Ache um prestador de serviço</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-04.svg" alt="Feature 04">
                                        </div>
                                        <h4 class="feature-title mt-24">Seja visto por um empregador</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-05.svg" alt="Feature 05">
                                        </div>
                                        <h4 class="feature-title mt-24">Be Productive</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="../../../storage/landing_page/feature-icon-06.svg" alt="Feature 06">
                                        </div>
                                        <h4 class="feature-title mt-24">Be Productive</h4>
                                        <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <section class="pricing section">
                    <div class="container-sm">
                        <div class="pricing-inner section-inner">
                            <div class="pricing-header text-center">
                                <h2 class="section-title mt-0">Premium</h2>
                                <p class="section-paragraph mb-0">Assinatura mensal do plano Premium, que garante benefícios tanto para usuários empregadores, quanto para usuários empregados. A ídeia é que com o Premium o usuário receba maiores benefícios da plataforma.</p>
                            </div>
                            <div class="pricing-tables-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-table-inner is-revealing">
                                        <div class="pricing-table-main">
                                            <div class="pricing-table-header pb-24">
                                                <div class="pricing-table-price"><span class="pricing-table-price-currency h2">R$</span><span class="pricing-table-price-amount h1">49,99</span><span class="text-xs">/mês</span></div>
                                            </div>
                                            <div class="pricing-table-features-title text-xs pt-24 pb-24">Quais são as vantagens?</div>
                                            <ul class="pricing-table-features list-reset text-xs">
                                                <li>
                                                    <span>Impulsionamento de perfil</span>
                                                </li>
                                                <li>
                                                    <span>Buscas personalizadas</span>
                                                </li>
                                                <li>
                                                    <span>Candidaturas ilimitadas</span>
                                                </li>
                                                <li>
                                                    <span>Sem propaganda</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-cta mb-8">
                                            <a class="button button-primary button-shadow button-block" href="#">Solicite agora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <section class="cta section">
                    <div class="container">
                        <div class="cta-inner section-inner">
                            <h3 class="section-title mt-0">Não está convencido da nossa atuação?</h3>
                            <div class="cta-cta">
                                <a class="button button-primary button-wide-mobile" href="#">Fale conosco</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
    
            <footer class="site-footer">
                <div class="container">
                    <div class="site-footer-inner">
                        <div class="brand footer-brand">
                            <a href="#">
                                <img class="header-logo-image" src="../../../storage/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="footer-links list-reset">
                            <li>
                                <a href="#">Contatos</a>
                            </li>
                            <li>
                                <a href="#">Sobre nós</a>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                            </li>
                            <li>
                                <a href="#">Suporte</a>
                            </li>
                        </ul>
                        <ul class="footer-social-links list-reset">
                            <li>
                                <a href="https://pt-br.facebook.com/">
                                    <span class="screen-reader-text">Facebook</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <span class="screen-reader-text">Twitter</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com.br/">
                                    <span class="screen-reader-text">Google</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-copyright">&copy; 2022 Job-free, all rights reserved</div>
                    </div>
                </div>
            </footer>
        </div>
    
        <script src="../js/landing.js"></script>
    </body>
</html>
