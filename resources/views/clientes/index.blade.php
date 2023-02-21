<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,500&family=Press+Start+2P&family=Roboto+Mono:ital,wght@1,200;1,400&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <title>ronicierra15</title>
    {{-- <script src="js/app.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <section class="container container-fluid">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" disabled>
                    <span class="navbar-toggler-icon" style="background-color: white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#SobreMi">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Proyectos">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Skills">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Contactame">Contact me</a>
                        </li>
                    </ul>
                    {{-- <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="bt-ceck">
                        <label class="form-check-label" for="flexSwitchCheckDefault" id="bt-ceck">Español
                        </label>
                    </div> --}}
                </div>
            </div>
        </nav>

        <!-- INICIO -->
        <div class="presentacion">
            <div class="titulo">
                <h1>Ronny Sierra</h1>
                <p>Web-developer</p>
            </div>
            <div class="imagen">
                <ul>
                    <li>
                        <img src="{{ asset('img\cacao.png') }}" alt="" class="cacao" />
                    </li>
                </ul>
            </div>
        </div>

        <!-- SOBRE MI -->
        <div id="SobreMi"></div>
        <div class="sobre_mi">
            <div class="cajon_sobre_mi">
                <ul class="padding-decripcion">
                    <li>
                        <h2>About me</h2>
                    </li>
                    <li class="sobre_mi_texto">
                        <p>
                            I am a 28-year-old junior developer originally from Maracaibo, Venezuela with a passion for
                            the outdoors and freedom. I currently reside in Bogotá, Colombia. I am innovative in
                            creating disruptive solutions in the back-end world with a focus on efficiency and quality.
                            I am confident that I can make a significant contribution to any project I am involved in
                        </p>
                    </li>
                </ul>

                <div class="selfie">
                    <ul class="padding-decripcion">
                        <li>
                            <img class="foto_carnet" src="{{ asset('img\selfie.jpeg') }}" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- PROYECTOS -->
        <div id="Proyectos"></div>
        <div class="Proyectos">
            <h2>Projects</h2>
            <ul>
                <li>Hacer una pag web</li>
                <li>Bot para telegram</li>
                <li>API para consultar precios</li>
            </ul>
        </div>

        <!-- SKILL -->
        <div id="Skills"></div>
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>
                    <img src="{{ asset('/img/html5.png') }}" alt="" />
                    HTML5
                </li>
                <li>
                    <img src="{{ asset('/img/css3.png') }}" alt="" />
                    CSS3
                </li>
                <!-- <li>
            <img src="{{ asset('/img/sass.png') }}" alt="" />
            Sass
          </li> -->
                <li>
                    <img src="{{ asset('/img/js.png') }}" alt="" />
                    JavaScript
                </li>
                <li>
                    <img src="{{ asset('/img/php.png') }}" alt="" />
                    PHP
                </li>
                <li>
                    <img src="{{ asset('/img/laravel.png') }}" alt="" />
                    Laravel
                </li>
                <li>
                    <img src="{{ asset('/img/json.png') }}" alt="" />
                    Json
                </li>
                <li>
                    <img src="{{ asset('/img/sql.png') }}" alt="" />
                    MySql
                </li>
                <li class="mongodb">
                    <img src="{{ asset('/img/mongo.png') }}" alt="" />
                    MongoDB
                </li>
                <li>
                    <img src="{{ asset('/img/git.png') }}" alt="" />
                    Git
                </li>
                <!-- <li>
            <img src="{{ asset('/img/github.png') }}" alt="" />
            GitHub
          </li> -->
            </ul>
        </div>

        <!-- CONTACTAME -->
        <div class="contacto-form" id="Contactame">
            <form action="{{ url('/clientes') }}" class="container-form-sin-send" method='POST'>
                @csrf
                <h2>Contact</h2>
                <div class="container-mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="correo" id="exampleFormControlInput1"
                            placeholder="email@example.com" required />
                    </div>
                </div>
                <div class="container-mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">How can we work together?</label>
                        <textarea class="form-control" name="textaria" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="boton-de-enviar">
                    <input type="submit" class="boton-send" style="color: transparent">
                </div>
            </form>
        </div>

        <div class="container-contact">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <a href="https://wa.link/a97c62" target="_blank">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </a>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <a href="https://www.linkedin.com/in/ronny-sierra-b1a34b266/" target="_blank" disabled>
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>
            <a class="bi bi-gmail" id="conacto"
                href="https://mail.google.com/mail/u/0/#inbox?compose=to=ronicierra15@gmail.com" target="_blank">
                <img src="{{ asset('/img/gmail.png') }}" alt="" />
            </a>
            <a class="bi bi-gmail" id="conacto" href="https://github.com/ronicierra15?tab=repositories"
                target="_blank">
                <img src="{{ asset('/img/github.png') }}" alt="" />
            </a>
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="container-fluid bg-light text-center p-3">
                <p class="small">Ronny Sierra &copy; 2023</p>
            </div>
        </footer>
    </section>
    {{-- <script src="js/app.js"></script> --}}

</body>

</html>
