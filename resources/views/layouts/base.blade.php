<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Фотомир</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Playfair+Display&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-3.6.0.min.js') }}" rel="stylesheet">
    <link href="{{ asset('js/main.js') }}" rel="stylesheet">
    @stack('styles')

</head>

<body>

    <!-- Navigation -->
    
<div id="header">
   <a class="navbar-brand" href="#">Фотомир {{ $_SERVER['REQUEST_URI'] }}
    <img src="img/longo.png" id="logo" />
    <h1 id="logotext">ФОТОМИР {{ $_SERVER['REQUEST_URI'] }}</h1></a>
  </div>
  <div id="nav">
    <a href="#" data-src="index.png" data-name="Главная" data-body="Добро пожаловать на сайт ФОТОМИР!">Главная</a>
    <a href="{{ asset('about') }}" data-src="about.png" data-name="О магазине"
      data-body="На сайте представлены новейшая техника, а также ретрофотоаппараты и коллекционные фотокамеры сделанные в СССР, эксклюзивная фототехника из Японии, Германии и США">О
      магазине</a>
    <a href="{{ asset('service') }}">Услуги</a>
    <a href="{{ asset('product') }}">Товары</a>
    <a href="{{ asset('portfolio') }}">Галерея</a>
    <a href="{{ asset('contact') }}">Контакты</a>
  
    
    
    @IF($_SERVER['REQUEST_URI'] == '/')
        <!-- Header -->
        <header class="bg-primary py-5 mb-5">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">Business Name or Tagline</h1>
                        <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
        </header>
    @ENDIF

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div id="contacts"></div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark text-light">
        <div class="container">

            <div class="copygight text-center">
                <div itemscope="" itemtype="https://schema.org/Organization">
                    &copy; <a href="https://co-work.tk" target="_blank">Открытое акционерное общество "ФОТОМИР"</a>

                    <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                        Юридический адрес:
                        <span itemprop="postalCode">220118</span>,
                        <span itemprop="addressLocality">Республика Беларусь, г.Минск</span>,
                        <span itemprop="streetAddress">ул.Немига, 10</span>
                    </div>
                    телефон: <span itemprop="telephone"><a href="+375(33) 444-55-66">+375(33) 444-55-66</a></span>,
                    факс: <span itemprop="faxNumber"><a href="+375 (17) 221-55-66">+375 (17) 221-55-66</a></span>,
                    e-mail: <span itemprop="email"><a href="fotomir@gmai.com">fotomir@gmai.com</a></span>

                </div>
            </div>

              </footer>

   
</body>

</html>
