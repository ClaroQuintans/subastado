<nav class="navbar navbar-expand-md navbar-light shadow-sm">

    <div class="container-fluid">

        <div class="hamburger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>            
        </div>



        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-acebron-oscuro.png') }}" alt="{{ config('app.name', 'Acebron') }}"/>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->


                    <div class="top-buttons">
                        <a href="#" class="btn btn-secondary btn-acebron-2">{{ __('Ocup Máquinas') }}</a>
                        <a href="#" class="btn btn-secondary btn-acebron-2">{{ __('Disp Operarios') }}</a>
                    </div>                    

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            { Auth::user()->name } <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <?php /*
                            <a class="dropdown-item" href="#">
                                {{ __('Perfil') }}
                            </a>
                            */ ?>

                           

                           
                        </div>
                    </li>

 
                
            </ul>

        </div>

    </div>

</nav>