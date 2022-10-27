<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <title>{{ __('home.El-Tavi Studio') }}</title>
    <link rel="stylesheet" type="text/css" href="css/home-style.css">
  </head>
  <body>
    
    <div class="container">
        <div class="pattern"></div>
        <div class="nav">
            <div class="menu">
                <ul>
                    <li><a href="#">{{ __('home.home') }}</a></li>
                    <li><a href="schedule">{{ __('home.schedule') }}</a></li>
                    <li><a href="profile">{{ __('home.profile') }}</a></li>
                    <li><a href="login">{{ __('home.login') }}</a></li>
                    <li>
                        {{-- <div class="collapse navbar-collapse" id="navbarToggler"> --}}
                        <ul class="navbar-nav ml-auto">
                            @php $locale = session()->get('locale'); @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       @switch($locale)
                                        @case('en')
                                        English
                                        @break
                                        @case('id')
                                        Indonesia
                                        @break
                                        @default
                                        English
                                    @endswitch    
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/form/en"> English</a>
                                    <a class="dropdown-item" href="/form/id"> Indonesia</a>
                                </div>
                            </li>
                        </ul>
                    {{-- </div> --}}
                </li>
                    
                
                </ul>
            </div>
        </div>


        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>

        <div class="title-1">El-Tavi</div>
        <div class="title-2">Studio</div>

        {{-- <div class="player">
            <img src="img/football.png" alt="">
        </div> --}}

        <div class="content">
            <p>{{ __('home.opening') }}</p>
            <button>{{ __('home.call') }}</button>
        </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/js/home-script.js"></script>
</body>
</html>
