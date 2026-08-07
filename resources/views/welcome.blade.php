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
                        <!-- TODO: trocar por asset('assets/img/about.png') quando tiver a imagem real -->
                        <img src="https://placehold.co/700x500?text=LL+Star" class="img-fluid" alt="LL Star">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h3>Oferecemos um planejamento logístico adequado para cada necessidade.</h3>
                        <p class="fst-italic">
                            A Política da Qualidade da LL Star está estruturada de forma a atender às estratégias
                            necessárias para a empresa e tem os seguintes compromissos:
                        </p>
                        <ul>
                            <li><i class="ti ti-circle-check"></i> Com a melhoria contínua do Sistema de Gestão da Qualidade (SGQ).</li>
                            <li><i class="ti ti-circle-check"></i> De atender às necessidades e requisitos dos clientes e das partes interessadas.</li>
                            <li><i class="ti ti-circle-check"></i> De ser estruturada de forma a orientar a definição de gestão dos objetivos da qualidade.</li>
                        </ul>
                        <p>
                            Hoje a LL Star, especializada em transportes executivo de passageiros, atende a uma área
                            altamente competitiva e exigente. Desta forma nossa frota conta com veículos modernos,
                            confortáveis e seguros. Nossos colaboradores, sempre atenciosos, estão em aprimoramento
                            constante e se dedicam ao máximo para um atendimento de qualidade.
                        </p>
                        <p>
                            A Empresa tem como foco os transportes Off Shore com Locação de veículos com Motoristas,
                            Logística de Pessoal e todo o suporte necessário para uma troca de turmas com sucesso.
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
                            <p>Fornecer soluções relacionados à serviços de transporte de pessoal, material e equipamentos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="box">
                            <h4>Visão</h4>
                            <p>Ser reconhecida pela qualidade e segurança de seus serviços.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h4>Valores</h4>
                            <p>Qualidade, Segurança, Confiabilidade, Compromisso, Honestidade, Respeito e Dedicação</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <!-- TODO: trocar pelos logos reais dos clientes -->
                        @foreach (['Constellation', 'Drake', 'Enauta', 'Faurgs', 'Gestor', 'Presserv', 'Qualyta', 'Sapiensia', 'Transit'] as $client)
                            <div class="swiper-slide text-center">
                                <img src="https://placehold.co/160x80?text={{ urlencode($client) }}" class="img-fluid" alt="{{ $client }}">
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
                    <!-- TODO: trocar pelas fotos reais da frota -->
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="https://placehold.co/600x400?text=Frota+LL+Star" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="https://placehold.co/600x400?text=Frota+LL+Star" class="img-fluid" alt="">
                    </div>
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
                        <!-- Formulário visual por enquanto, sem envio real -->
                        <form class="contact-form info-box">
                            <h3 class="mb-3">Formulário de Contato</h3>
                            <input type="text" name="name" class="form-control" placeholder="Nome" required>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
                            <textarea name="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
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
                        <!-- Formulário visual por enquanto, sem envio real -->
                        <form>
                            <input type="email" name="email" placeholder="Digite seu E-mail" required>
                            <input type="submit" value="Inscrever-se">
                        </form>
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