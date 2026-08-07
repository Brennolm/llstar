<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name') }} - Transportes e Logística</title>

    <meta name="description" content="Oferecemos um planejamento logístico adequado para cada necessidade.">
    <meta name="author" content="LL Star">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="LL Star, transporte, logística">

    <meta property="og:title" content="{{ config('app.name') }} - Transportes e Logística">
    <meta property="og:description" content="Oferecemos um planejamento logístico adequado para cada necessidade.">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('android-chrome-512x512.png') }}">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])
</head>
<body>

    <div id="preloader"></div>

    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="ti ti-mail"></i><a href="mailto:contato@llstar.com.br">contato@llstar.com.br</a>
                <i class="ti ti-phone"></i><a href="tel:+5521996610711">(21) 99661-0711</a>
                <i class="ti ti-phone"></i><a href="tel:+5521996341144">(21) 99634-1144</a>
            </div>

            <div class="social-links d-none d-md-block">
                <a href="https://twitter.com/LLStarTransport" target="_blank"><i class="ti ti-brand-x"></i></a>
                <a href="https://www.instagram.com/llstar_ll/" target="_blank"><i class="ti ti-brand-instagram"></i></a>
                <a href="https://www.linkedin.com/company/ll-star-transportes-e-logistica/" target="_blank"><i class="ti ti-brand-linkedin"></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ url('/') }}">LL Star</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#about">Sobre Nós</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#contact">Contate-nos</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}">Painel</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
                <i class="ti ti-menu-2 mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="200">
            <h1>Bem vindo a LL Star</h1>
            <h2>Oferecemos um planejamento logístico adequado para cada necessidade</h2>
            <a href="#about" class="btn-get-started">Saiba Mais Sobre LL Star</a>
        </div>
    </section>

    <main id="main">

        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <span>Sobre Nós</span>
                    <h2>Sobre Nós</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="{{ asset('assets/img/about.png') }}" class="img-fluid" alt="LL Star">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h3>Oferecemos um planejamento logístico adequado para cada necessidade.</h3>
                        <p class="fst-italic">
                            A Política da Qualidade da LL Star está estruturada para atender às necessidades da empresa
                            e se apoia em três compromissos:
                        </p>
                        <ul>
                            <li><i class="ti ti-circle-check"></i> Buscamos a melhoria contínua do nosso Sistema de Gestão da Qualidade (SGQ).</li>
                            <li><i class="ti ti-circle-check"></i> Atendemos às necessidades e aos requisitos dos nossos clientes e demais partes interessadas.</li>
                            <li><i class="ti ti-circle-check"></i> Orientamos nossa gestão pela definição clara de objetivos de qualidade.</li>
                        </ul>
                        <p>
                            Hoje a LL Star, especializada em transporte executivo de passageiros, atende a uma área
                            altamente competitiva e exigente. Nossa frota conta com veículos modernos, confortáveis e
                            seguros, conduzidos por motoristas experientes e preparados para cada rota. Nossos
                            colaboradores, sempre atenciosos, estão em aprimoramento constante e se dedicam ao máximo
                            para um atendimento de qualidade.
                        </p>
                        <p>
                            A empresa tem como foco o transporte Off Shore, com locação de veículos com motoristas,
                            logística de pessoal e todo o suporte necessário para uma troca de turma bem-sucedida.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="box">
                            <h4>Missão</h4>
                            <p>Garantir que cada troca de turma e cada deslocamento executivo aconteçam no horário certo, com segurança e conforto, para que nossos clientes foquem no que realmente importa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="box">
                            <h4>Visão</h4>
                            <p>Ser a referência em transporte executivo e logística de pessoal para o setor offshore no Rio de Janeiro.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h4>Valores</h4>
                            <p>
                                <strong>Pontualidade</strong> — uma troca de turma atrasada não é opção.<br>
                                <strong>Segurança</strong> — motoristas experientes e preparados para cada rota.<br>
                                <strong>Proximidade</strong> — atendimento próximo e humano, não uma frota terceirizada qualquer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ([
                            ['name' => 'Constellation', 'file' => 'constellation.png'],
                            ['name' => 'Drake', 'file' => 'drake.png'],
                            ['name' => 'Enauta', 'file' => 'enauta.png'],
                            ['name' => 'Faurgs', 'file' => 'faurgs.png'],
                            ['name' => 'Gestor', 'file' => 'gestor.png'],
                            ['name' => 'Presserv', 'file' => 'presserv.jpg'],
                            ['name' => 'Qualyta', 'file' => 'qualyta.png'],
                            ['name' => 'Sapiensia', 'file' => 'sapiensia.png'],
                            ['name' => 'Transit', 'file' => 'transit.png'],
                        ] as $client)
                            <div class="swiper-slide text-center">
                                <img src="{{ asset('assets/img/clients/' . $client['file']) }}" class="img-fluid" alt="{{ $client['name'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title">
                    <span>Portfólio</span>
                    <h2>Portfólio</h2>
                </div>
                <div class="row" data-aos="fade-up">
                    @foreach ([
                        ['file' => 'frota.png', 'alt' => 'Frota LL Star'],
                        ['file' => 'corola.png', 'alt' => 'Toyota Corolla'],
                        ['file' => 'interno_corola.png', 'alt' => 'Interior - Corolla'],
                        ['file' => 'renegade.png', 'alt' => 'Jeep Renegade'],
                        ['file' => 'interno_renegade.png', 'alt' => 'Interior - Renegade'],
                        ['file' => 'onix.png', 'alt' => 'Chevrolet Onix'],
                    ] as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <img src="{{ asset('assets/img/portfolio/' . $item['file']) }}" class="img-fluid" alt="{{ $item['alt'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <span>Contate-nos</span>
                    <h2>Contate-nos</h2>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="ti ti-map-pin"></i>
                            <h3>Endereço</h3>
                            <p>Rua Theodomiro Amorim, 71, Bairro São Geraldo, Saquarema/RJ, 28995205, BR</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="ti ti-mail"></i>
                            <h3>E-mail</h3>
                            <p>contato@llstar.com.br</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="ti ti-phone"></i>
                            <h3>Ligue para nós</h3>
                            <p>(21) 99661-0711 / (21) 99634-1144</p>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1837.8230808832207!2d-42.47742160693503!3d-22.8895258727183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9760aa022086f7%3A0xd1b7bd90a4e08cac!2sR.%20Theodomiro%20Amorim%20-%20S%C3%A3o%20Geraldo%20(Bacax%C3%A1)%2C%20Saquarema%20-%20RJ%2C%2028995-205!5e0!3m2!1spt-BR!2sbr!4v1694096585570!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-5">
                        <form class="contact-form info-box" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <h3 class="mb-3">Formulário de Contato</h3>
        
                            @if (session('contact_status'))
                                <div class="alert alert-success">{{ session('contact_status') }}</div>
                            @endif
        
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
        
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
        
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Assunto" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
        
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="Mensagem" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
        
                            <button type="submit" class="btn btn-dark w-100 mt-2">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>LL Star</h3>
                            <p>
                                Rua Theodomiro Amorim, 71<br>
                                Bairro São Geraldo<br>
                                Saquarema/RJ 28995205, BR<br><br>
                                <strong>Telefone:</strong> (21) 99661-0711 / (21) 99634-1144<br>
                                <strong>E-mail:</strong> contato@llstar.com.br<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/LLStarTransport" target="_blank"><i class="ti ti-brand-x"></i></a>
                                <a href="https://www.instagram.com/llstar_ll/" target="_blank"><i class="ti ti-brand-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/ll-star-transportes-e-logistica/" target="_blank"><i class="ti ti-brand-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Site</h4>
                        <ul>
                            <li><i class="ti ti-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
                            <li><i class="ti ti-chevron-right"></i> <a href="#portfolio">Portfólio</a></li>
                            <li><i class="ti ti-chevron-right"></i> <a href="#contact">Contate-nos</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Receba nossas novidades e fique por dentro das notícias</h4>
                        <p>Se inscreva no nosso boletim informativo</p>
                        <form method="POST" action="{{ route('newsletter.store') }}">
                            @csrf
                            <input type="email" name="newsletter_email" placeholder="Digite seu E-mail" value="{{ old('newsletter_email') }}" required>
                            <input type="submit" value="Inscrever-se">
                        </form>
                        @if (session('newsletter_status'))
                            <p class="text-white mt-2 mb-0">{{ session('newsletter_status') }}</p>
                        @endif
                        @error('newsletter_email')
                            <p class="text-danger mt-2 mb-0">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                Copyright &copy; <span>2008-{{ date('Y') }} <a href="{{ url('/') }}">LL Star</a> - Todos os Direitos Reservados</span>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="ti ti-arrow-up"></i></a>

</body>
</html>