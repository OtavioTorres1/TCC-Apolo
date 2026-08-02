<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apolo Tecnologia</title>
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <div class="nav-logo">
            <img src="{{ asset('images/logo-apolo.png') }}" alt="Apolo" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
   
        </div>
        <div class="nav-links">
            <a href="#inicio">Início</a>
            <a href="#QuemSomos">Quem somos</a>
            <a href="#Parceiros">Parceiros</a>
            <a href="#Tecnologias">Tecnologias</a>
            <a href="#Devs">Nossa equipe</a>
            <a href="#FaleConosco" class="nav-cta">Fale Conosco</a>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
    <a href="#inicio" class="mobile-link">Início</a>
    <a href="#QuemSomos" class="mobile-link">Quem somos</a>
    <a href="#Parceiros" class="mobile-link">Parceiros</a>
    <a href="#Devs" class="mobile-link">Nossa equipe</a>
    <a href="#FaleConosco" class="mobile-link mobile-cta">Fale Conosco</a>
</div>

<header id="inicio">
    <div class="hero-bg">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{ asset('images/video-fundo-header.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-grain"></div>
        <div class="hero-glow"></div>
    </div>
    <div class="hero-content">
        <h1 class="hero-title reveal-up">
            <span class="hero-brand">Apolo</span>
            <span class="hero-sub">O céu não é o limite</span>
        </h1>
        <p class="hero-desc reveal-up delay-1">
            Desenvolvemos soluções tecnológicas acessíveis que transformam a realidade das comunidades periféricas de São Paulo.
        </p>
        <div class="hero-actions reveal-up delay-2">
            <a href="#QuemSomos" class="btn-primary">Conheça a Apolo</a>
            <a href="#FaleConosco" class="btn-ghost">Entre em contato</a>
        </div>
    </div>
</header>

<div class="separador-hero">
    <div class="linha-amarela"></div>
</div>

<main>

    <section id="QuemSomos" class="reveal-up">
        <div class="Text-Section">
            <h1 class="Titulos">Quem somos?</h1>
            <p>A Apolo é uma empresa de tecnologia que se dedica a resolver os problemas sociais da população usando a tecnologia de forma acessível</p>
        </div>

        <div class="conteudoAbaixo-Section">
            <div class="Card-Azul reveal-left">
                <div>
                    <img src="{{ asset('images/notebook.png') }}" alt="imagem ilustrativa notebook" height="170px" width="170px">
                </div>
                <h1>Nosso Objetivo</h1>
                <p>
                    Nosso objetivo é garantir que pessoas da periferia tenham acesso às mesmas oportunidades e recursos disponíveis para toda a sociedade.
                </p>
            </div>

            <div class="Surgimento reveal-right">
                <h1>Surgimento</h1>
                <p>
                    A Apolo nasceu na ETEC Guaianazes como parte do Trabalho de Conclusão de Curso (TCC) da turma do 3º Desenvolvimento de Sistemas de 2026. O projeto surgiu a partir da ideia de utilizar o conhecimento adquirido ao longo do curso para desenvolver soluções tecnológicas com impacto real.
                </p>
            </div>
        </div>
    </section>

    <div class="linha-amarela"></div>

    <section id="Parceiros" class="reveal-up">
        <div class="Text-Section">
            <h1 class="Titulos">Nossos Parceiros</h1>
            <p>Aqui temos as nossas empresas parceiras, que nos apoiaram durante a nossa trajetória por esse projeto</p>
        </div>

        <div class="conteudoAbaixo-Section">
            <!-- CARD LIRIUM -->
            <div class="Card-Azul-Parceiros reveal-left">
                <div class="white-square-inner">
                    <img src="{{ asset('images/Lirium.jpeg') }}" alt="Lirium" class="partner-logo">
                </div>
                <h3 class="partner-name">Lírium</h3>
            </div>
            <!-- CARD RAVEN -->
            <div class="Card-Azul-Parceiros reveal-right">
                <div class="white-square-inner">
                    <img src="{{ asset('images/Raven.jpeg') }}" alt="Raven" class="partner-logo">
                </div>
                <h3 class="partner-name">Raven</h3>
            </div>
        </div>
    </section>

    <div class="linha-amarela"></div>

    <section id="Devs" class="reveal-up">
        <div class="Text-Section-Devs">
            <h1 class="Titulos-Devs">Nossos Desenvolvedores</h1>
            <p>Conheça a nossa equipe especializada da Apolo. Mais do que uma equipe, somos uma rede de talentos movida por propósito, dedicada a construir um futuro melhor para todo o estado de São Paulo.</p>
        </div>

        <div class="conteudoAbaixo-Section-Devs">
            <div class="carrossel-container">
                <button class="carrossel-btn" id="prevBtn" aria-label="Anterior">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <div class="carrossel-viewport">
                    <div class="carrossel">
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/leonnihd.jpeg') }}" alt="leonni">
                            <div><h1>Leonni Cruz</h1><p>DBA</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/danilohd.jpeg') }}" alt="Danilo">
                            <div><h1>Danilo Morilia</h1><p>Analista e DBA</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/guizohd.jpeg') }}" alt="Guilherme">
                            <div><h1>Guilherme Tavares</h1><p>Designer e Full-Stack</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/mariahd.jpeg') }}" alt="Maria">
                            <div><h1>Maria Albuquerque</h1><p>Gerente e Full-Stack</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/otavio.jpeg') }}" alt="Otavio">
                            <div><h1>Otavio Ribeiro Torres</h1><p>Front-End</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/enzo.jpeg') }}" alt="Henzo">
                            <div><h1>Henzo William</h1><p>Tester</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/vinicius.jpeg') }}" alt="Vinicius">
                            <div><h1>Vinicius Jesus</h1><p>Back-End</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/bruno.jpeg') }}" alt="Bruno">
                            <div><h1>Bruno Oliveira</h1><p>Back-End e DBA</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/elias.jpeg') }}" alt="Elias">
                            <div><h1>Elias Camacho</h1><p>Front-End</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/nicolas.jpeg') }}" alt="Nicolas">
                            <div><h1>Nicolas B.</h1><p>Back-End</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/raul.jpeg') }}" alt="Raul">
                            <div><h1>Raul Cerqueira</h1><p>Designer e DBA</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                        <div class="Card-Azul-Devs">
                            <img src="{{ asset('images/livia.jpeg') }}" alt="Livia">
                            <div><h1>Lívia Oliveira</h1><p>Full-Stack</p></div>
                            <div class="imagensRedesDevs">
                                <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('images/Instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}"></a>
                                <a href="https://github.com/" target="_blank"><img src="{{ asset('images/github.png') }}" class="github"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carrossel-btn" id="nextBtn" aria-label="Próximo">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- TECNOLOGIAS -->
    <section id="Tecnologias" class="reveal-up">
        <div class="Text-Section">
            <h1 class="Titulos">Nossas Tecnologias</h1>
            <p>Conheça as ferramentas e linguagens que nossa equipe utiliza</p>
        </div>

        <div class="tech-grid-solto reveal-up">
              <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                <span>HTML</span>
            </div>
            <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
                <span>CSS</span>
            </div>
             <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                <span>JavaScript</span>
            </div>
             <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native">
                <span>React Native</span>
            </div>
             <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                <span>PHP</span>
            </div>
            <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                <span>Laravel</span>
            </div>
           <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" style="width: 80px; height: 80px;">
                <span style="margin-top: -17px">MySQL</span>
            </div>
            <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma">
                <span>Figma</span>
            </div>
            <div class="tech-item">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" style="filter: invert(1);">
                <span>GitHub</span>
            </div>
        </div>
    </section>

    <div class="linha-amarela"></div>

    <section id="FaleConosco" class="section-contato reveal-up">
        <div class="contato-grid">
            <div class="contato-info reveal-left">
                <h2 class="section-title">Fale Conosco</h2>
                
                <img src="{{ asset('images/contato.jpg') }}" alt="Atendimento Apolo" class="contato-image-left">
                
                <div class="contato-itens">
                    <div class="contato-item">
                        <div class="contato-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 .84h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div>
                            <span class="contato-label">Telefone</span>
                            <span class="contato-value">0800 123 4567</span>
                        </div>
                    </div>
                    <div class="contato-item">
                        <div class="contato-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <span class="contato-label">Horário de atendimento</span>
                            <span class="contato-value">Seg–Sex, 08:00–18:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-card reveal-right">
                <form class="form-conteudo" method="POST" action="{{ route('contato.store') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-field">
                            <label for="nome">Nome *</label>
                            <input type="text" id="nome" name="nome" placeholder="Maria" required>
                            <span class="error-message" id="error-nome"></span>
                        </div>
                        <div class="form-field">
                            <label for="sobrenome">Sobrenome *</label>
                            <input type="text" id="sobrenome" name="sobrenome" placeholder="Albuquerque" required>
                            <span class="error-message" id="error-sobrenome"></span>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" placeholder="maria@email.com" required>
                        <span class="error-message" id="error-email"></span>
                    </div>
                    <div class="form-field">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                        <span class="error-message" id="error-telefone"></span>
                    </div>
                    <div class="form-field">
                        <label for="assunto">Mensagem *</label>
                        <textarea id="assunto" name="assunto" placeholder="Como podemos ajudar?" required></textarea>
                        <span class="error-message" id="error-assunto"></span>
                    </div>
                    <button type="submit" class="form-submit">
                        <span>Enviar Mensagem</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

</main>

<footer>
    <div class="footer-top reveal-up">
        <div class="footer-brand">
            <div class="footer-logo-wrap">
                <img src="{{ asset('images/logo-apolo.png') }}" alt="Apolo" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div class="footer-logo-fallback">A</div>
            </div>

        </div>
        <p class="footer-desc">Tecnologia com propósito — construindo soluções digitais acessíveis para transformar realidades nas comunidades periféricas de São Paulo.</p>
        <div class="footer-contact-info">
            <span class="footer-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                apoloempresacontato@gmail.com
            </span>
            <span class="footer-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                ETEC Guaianazes, São Paulo – SP
            </span>
        </div>
        <div class="footer-social">
            <a href="https://wa.me/5508001234567" class="footer-social-btn" aria-label="WhatsApp">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="footer-social-btn" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
            <a href="https://www.linkedin.com/" target="_blank" class="footer-social-btn" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://github.com/" target="_blank" class="footer-social-btn" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
            <a href="https://x.com/" target="_blank" class="footer-social-btn" aria-label="X / Twitter">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.747l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
        </div>
    </div>

    <div class="footer-middle">
        <div class="footer-col">
            <h4>Empresa</h4>
            <a href="#QuemSomos">Quem somos</a>
            <a href="#Devs">Nossa equipe</a>
            <a href="#Parceiros">Parceiros</a>
            <a href="#FaleConosco">Contato</a>
        </div>
        <div class="footer-col">
            <h4>Projetos</h4>
            <a href="#">Portfólio</a>
            <a href="#">Cases de Sucesso</a>
            <a href="#">Tecnologias</a>
            <a href="#">Open Source</a>
        </div>
        <div class="footer-col">
            <h4>Jurídico</h4>
            <a href="#">Termos e Condições</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Proteção de Dados (LGPD)</a>
        </div>
        <div class="footer-col">
            <h4>Suporte</h4>
            <a href="#FaleConosco">Fale Conosco</a>
            <span class="footer-badge">0800 123 4567</span>
            <span class="footer-horario">Seg–Sex, 08:00–18:00</span>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-divider"></div>
        <div class="footer-bottom-row">
            <p>© 2026 Apolo Tecnologia. Todos os direitos reservados.</p>
            <p class="footer-etec">Desenvolvido na ETEC Guaianazes — TCC 2026</p>
        </div>
    </div>
</footer>

<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
    });

    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });
    document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => {
        revealObserver.observe(el);
    });

    // Carrossel
    let carIndex = 0;
    const carrossel   = document.querySelector('.carrossel');
    const allCards    = document.querySelectorAll('.Card-Azul-Devs');
    const totalCards  = allCards.length;
    const cardsPorPag = 4;
    const maxIndex    = Math.ceil(totalCards / cardsPorPag) - 1;

    function moverCarrossel() {
        if (allCards.length === 0) return;
        const card = allCards[0];
        const gap  = 22; 
        const passo = (card.offsetWidth + gap) * cardsPorPag;
        carrossel.style.transform = `translateX(-${carIndex * passo}px)`;
    }

    document.getElementById('nextBtn')?.addEventListener('click', (e) => {
        e.preventDefault();
        if (carIndex < maxIndex) { carIndex++; moverCarrossel(); }
    });
    document.getElementById('prevBtn')?.addEventListener('click', (e) => {
        e.preventDefault();
        if (carIndex > 0) { carIndex--; moverCarrossel(); }
    });
    window.addEventListener('resize', moverCarrossel);
    setTimeout(moverCarrossel, 100);

    // --- MÁSCARA DE TELEFONE (INDENTAÇÃO DO INPUT) ---
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\D/g, ''); // Remove tudo que não é dígito
            if (value.length > 11) value = value.slice(0, 11); // Limita a 11 dígitos (celular com 9)

            let formattedValue = '';
            if (value.length > 0) {
                formattedValue = '(' + value.substring(0, 2);
            }
            if (value.length >= 3) {
                formattedValue += ') ' + value.substring(2, 7);
            }
            if (value.length >= 8) {
                formattedValue += '-' + value.substring(7, 11);
            }
            
            this.value = formattedValue;
        });
    }

    // Validações inline
    function validarEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    function validarTelefone(telefone) {
        if (telefone === '') return true;
        return /^\([1-9]{2}\) [9]?[0-9]{4}-[0-9]{4}$/.test(telefone);
    }

    function limparErros() {
        document.querySelectorAll('.error-message').forEach(el => el.innerText = '');
        document.querySelectorAll('.form-field input, .form-field textarea').forEach(el => el.classList.remove('error'));
    }

    function mostrarErro(campoId, mensagem) {
        const errorSpan = document.getElementById(`error-${campoId}`);
        if (errorSpan) errorSpan.innerText = mensagem;
        const input = document.getElementById(campoId);
        if (input) input.classList.add('error');
    }

    function validarFormulario() {
        let valido = true;
        limparErros();

        const nome = document.getElementById('nome').value.trim();
        if (nome.length < 2) {
            mostrarErro('nome', 'Nome deve ter pelo menos 2 caracteres.');
            valido = false;
        }
        const sobrenome = document.getElementById('sobrenome').value.trim();
        if (sobrenome === '') {
            mostrarErro('sobrenome', 'Sobrenome é obrigatório.');
            valido = false;
        }
        const email = document.getElementById('email').value.trim();
        if (!validarEmail(email)) {
            mostrarErro('email', 'Digite um e-mail válido (ex: nome@dominio.com).');
            valido = false;
        }
        const telefone = document.getElementById('telefone').value.trim();
        if (!validarTelefone(telefone)) {
            mostrarErro('telefone', 'Telefone inválido. Use (11) 99999-9999');
            valido = false;
        }
        const assunto = document.getElementById('assunto').value.trim();
        if (assunto.length < 10) {
            mostrarErro('assunto', 'Mensagem deve ter pelo menos 10 caracteres.');
            valido = false;
        }
        return valido;
    }

    const form = document.querySelector('#FaleConosco form');
    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (!validarFormulario()) return;

            const submitBtn = form.querySelector('.form-submit');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Enviando...</span>';

            const formData = new FormData(form);
            try {
                const response = await fetch('{{ route("contato.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                });
                const data = await response.json();
                if (response.ok && data.success) {
                    submitBtn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
                    submitBtn.style.boxShadow = '0 4px 20px #22c55e';
                    submitBtn.innerHTML = '<span>Mensagem enviada!</span>';
                    form.reset();
                    
                    setTimeout(() => {
                        submitBtn.disabled = false;
                        submitBtn.style.background = '';
                        submitBtn.style.boxShadow = '';
                        submitBtn.innerHTML = originalText;
                    }, 3000);
                } else {
                    throw new Error(data.message || 'Erro ao enviar');
                }
            } catch (error) {
                submitBtn.style.background = 'linear-gradient(135deg, #ef4444, #dc2626)';
                submitBtn.style.boxShadow = '0 4px 20px #ef4444';
                submitBtn.innerHTML = '<span> Erro! Tente novamente</span>';
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.style.background = '';
                    submitBtn.style.boxShadow = '';
                    submitBtn.innerHTML = originalText;
                }, 3000);
            }
        });
    }
</script>

</body>
</html>
