<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
</head>
<body>   
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{asset('sitioWeb/img/mision.jpg')}}" alt="Logo" width="50">
            </div>
            <ul class="nav-links">
                <li><a href="#Inicio">Inicio</a></li>
                <li><a href="#Sobre-Nosotros">Sobre Nosotros</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links-mobile">
                <li><a href="#Inicio">Inicio</a></li>
                <li><a href="#Sobre-Nosotros">Sobre Nosotros</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <!-- Tarjeta 1 -->
            <div class="card1">
                <img src="{{asset('sitioWeb/img/mision.jpg')}}" alt="Imagen 1">
                <h3>Título 1</h3>
                <p>Descripción breve del contenido 1.</p>
            </div>
            <!-- Tarjeta 2 -->
            <div class="card2 ">
                <img src="{{asset('sitioWeb/img/promo.png')}}" alt="Imagen 2">
                <h3>Título 2</h3>
                <p>Descripción breve del contenido 2.</p>
            </div>
            <!-- Tarjeta 3 -->
            <div class="card3">
                <img src="{{asset('sitioWeb/img/vision.jpg')}}" alt="Imagen 3">
                <h3>Título 3</h3>
                <p>Descripción breve del contenido 3.</p>
            </div>
        </section>  
        <section class="carousel-position">
            <div class="carousel">
                <!-- Contenedor de imágenes -->
                <div class="carousel-images">
                    <img src="{{asset('sitioWeb/img/mision.jpg')}}" alt="Imagen 1">
                    <img src="{{asset('sitioWeb/img/promo.png')}}" alt="Imagen 2">
                    <img src="{{asset('sitioWeb/img/vision.jpg')}}" alt="Imagen 3">
                </div>  
                <!-- Botones de navegación -->
                <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
                <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>   
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <div class="indicator" onclick="goToSlide(0)"></div>
                    <div class="indicator" onclick="goToSlide(1)"></div>
                    <div class="indicator" onclick="goToSlide(2)"></div>
                </div>
            </div>
        </section>
        <section> 
            <div class="container">
                <!-- Imagen a la izquierda -->
                <img src="{{asset('sitioWeb/img/mision.jpg')}}" alt="Nuestra misión">  
                <!-- Contenido a la derecha -->
                <div class="content">
                    @foreach($getInicio as $getInicios)
                    <p>{{$getInicios->mision}}</p>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <!-- Contenido a la izquierda -->
                <div class="content">
                    <p>Nuestra Visión <br>
                        Nuestra visión es ser líderes en la creación de un futuro sostenible, inspirando cambios positivos y transformando vidas 
                        a través de la innovación, la excelencia y el compromiso con nuestras comunidades.
                    </p>
                </div>  
                <!-- Imagen a la derecha -->
                <img src="{{asset('sitioWeb/img/vision.jpg')}}" alt="Nuestra visión">
            </div>
        </section>
    </main>
     
    <footer> 
        <div class="footer-container">
            <!-- Sección de redes sociales -->
            <div class="footer-section social-icons">
                <h3>Redes Sociales</h3>
                <a href="https://facebook.com" target="_blank">📘</a>
                <a href="https://twitter.com" target="_blank">🐦</a>
                <a href="https://instagram.com" target="_blank">📸</a>
            </div>
            <!-- Sección de números de contacto -->
            <div class="footer-section contact-numbers">
                <h3>Contacto</h3>
                <p>📞 +5 2x4 xxx 890</p>
                <p>📞 +5 98x xxx 321</p>
                <p>📞 +5 4xx xxx 012</p>
            </div>
            <!-- Sección del mapa -->
            <div class="footer-section map-container">
                <h3>Ubicación</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.824280544872!2d-78.51725082635879!3d-0.23473213537805673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5999951e1ab61%3A0xece4de9a65d32385!2sConquito!5e1!3m2!1ses!2sec!4v1733239056223!5m2!1ses!2sec" 
                width="200" 
                height="150">
                </iframe>
            </div>
        </div>
        <p>© 2024 Mi Sitio Web</p>
    </footer>   
    <script src="{{asset('sitioWeb/js/script.js')}}"></script>  
</body>
</html>