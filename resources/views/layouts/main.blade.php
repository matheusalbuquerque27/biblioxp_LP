<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="images/bxp_logo.ico" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Static CSS -->
        <link rel="stylesheet" href="css/styles02.css">
        <link rel="stylesheet" href="css/pages03.css">

        <!--SEO Config-->
        <title> @yield('title') </title>
        <meta name="description" content="Plataforma com uma gama de roteiros para aulas inesquecíveis para sua igreja, escola e família. 
        Biblioxp é uma metodologia utilizando experiências físicas e gamificadas com temas culturais e socioemocionais">
        <meta name="keywords" content="escola dominical infantil, biblioxp, gamificação,
        professora ebd infantil, professora kids, coordenadora pedagógica, atividade escolar">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="BiblioXP - Te ajudando a criar aulas incríveis">
        <meta property="og:description" content="Uma metodologia que utiliza experiências físicas e gamificadas com temas culturais e socioemocionais">
        <meta property="og:image" content="images/logo.png">

    </head>
    <body>
        <header>
            <div class="menu-mobile">
                <ul class="navbar">
                    <a class="a-mob" href="/igrejas"><li>Igrejas</li></a>
                    <a class="a-mob" href="/escolas"><li>Escolas</li></a>
                    <a class="a-mob" href="/familias"><li>Famílias</li></a>
                    <a class="a-mob" href="/sobre"><li>Nós</li></a>
                </ul>
            </div>
    
            @if (session('msg'))
                <div class="msg">
                    {{ session('msg') }}
                </div>
            @endif

            <nav class="header-desktop">
                <div class="logo">
                    <a href="/"><img src="images/logo.png" alt=""></a>
                </div>
                <ul class="navbar">
                    <a href="/igrejas"><li>Igrejas</li></a>
                    <a href="/escolas"><li>Escolas</li></a>
                    <a href="/familias"><li>Famílias</li></a>
                    <a href="/sobre"><li>Nós</li></a>
                </ul>
                <div class="login">
                    <button class="btn register-btn">Cadastre-se</button>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="container">
                <h1>Comece hoje ser o herói da nova geração</h1>
            </div>
            <div class="container">
                <div class="box">
                    <div class="card">
                        <a href="/"><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="card">
                        <a href="https://www.instagram.com/biblioxp"><img src="images/instagram.png" alt=""></a>
                        <a href="https://www.youtube.com/@BiblioKidso"><img src="images/youtube.png" alt=""></a>
                    </div>
                </div>
                <div class="box">
                    <p>Criamos uma metodologia para Ajudar educadores e Pais a se Conectarem com a próxima geração, com aulas inesquecíveis.</p>
                </div>
                <div class="box">
                    <nav class="card">
                        <ul class="navbar">
                            <a href="/igrejas"><li>Igrejas</li></a>
                            <a href="/escolas"><li>Escolas</li></a>
                            <a href="/familias"><li>Famílias</li></a>
                            <a href="/sobre"><li>Nós</li></a>
                        </ul>
                    </nav>
                    <div class="card-info">
                        <div class="title">
                            <h2>Contatos</h2>
                        </div>
                        <div class="item">
                            <img src="images/info1.png" alt="">
                            <p>fale@biblioxp.com</p>
                        </div>
                        <div class="item">
                            <img src="images/info2.png" alt="">
                            <p>+55 11 98301-5096</p>
                        </div>
                        <div class="item">
                            <img src="images/info3.png" alt="">
                            <p>Alameda Rio Negro 503, Sala 2020, Alphaville, Barueri/SP <br>CEP 06454-000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slip">
                <p>2024 - Todos os direitos reservados</p>
            </div>
            <div class="clear"></div>
        </footer>
        
        @include('whatsapp')

        {{-- Jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        @stack('scripts')
        
        <script>
            
            $(document).ready(function() {
                /*Direciona para o formulário*/
                $('.register-btn').click(function() {
                    const position = $('#form').offset().top;
                    $('html, body').animate({ scrollTop: position }, 'slow');
                });

                /*Máscara do telefone*/
                $('#telefone').mask('(00) 00000-0000');

                /*Direciona para o Whatsapp*/
                $('.wa-btn').click(function() {
                    window.open('https://wa.me/5511989317209?text=Ol%C3%A1%2C%20gostaria%20de%20obter%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20servi%C3%A7o%20da%20BiblioXP."', '_blank');
                });

                /*Direciona para o instagram*/
                $('#insta-link').click(function() {
                    window.open('https://www.instagram.com/biblioxp', '_blank');
                });

                
            });
        </script>

    </body>
</html>
