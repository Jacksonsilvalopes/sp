<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}" media="screen,projection" />

        <!--Let browser know website is optimized for mobile-->
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Gerir Contrataçãoes') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>
     
    </head>
    <body>
        <div id="app">
            <nav >
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="{{ url('/') }}" class="brand-logo">{{ config('app.logoSiste') }}</a>
                        <a class="button-collapse" data-activates="mobile-nav" href="#">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            @guest
                            @else
                            <li class="active">
                                <a href="/home">Home</a>
                            </li>
                            <li >
                                <a href="/admin">Admin</a>
                            </li>

                            <!-- DROPDOWN TRIGGER -->
                       

                            @endguest
                            <!-- BUTTON LINK -->
                            @guest <!-- não logado  -->
                            <li>
                                <a class="btn waves-effect waves-light"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li>
                                <a class="btn waves-effect waves-light"  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            <!-- ICON LINK PERSON -->
                            @else
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="my-person" href="#!"> {{ Auth::user()->name }}
                                    <i class="material-icons right">person</i>
                                </a>
                            </li>
                            @endguest
                        </ul>
                        @guest
                        @else
                        <ul class="side-nav" id="mobile-nav">
                            <li>
                                <a href="/home"><i class=" material-icons">home</i></a>
                            </li>

                        </ul>
                        @endguest
                    </div>
                </div>
            </nav>

            <!-- DROPDOWN MENU -->
            @guest
            @else
           
            <ul id="consultar" class="dropdown-content">
                <li>
                    <a href="{{route('usuarios.index')}}"><i class="material-icons">people</i> Usuários</a>
                </li>
                <li>
                    <a href="{{route('colaboradores.index')}}"><i class="material-icons">people_outline</i> Colaboradores</a>
                </li>
                <li>
                    <a href="#">Entidades</a>
                </li>
                <li>
                    <a href="#">Contratos</a>
                </li>
            </ul>
            <ul id="my-person" class="dropdown-content">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        {{ __('Logout')}} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li>
                 
                    <a class=" modal-trigger"  href="#modal1" >Meus Contratos</a>
                </li>
                
                @endguest
            </ul>

            <main >
                @yield('content')
            </main>
            <!-- MODAL MEUS CONTRATOS -->

            <div id="modal1" class="modal">
                <div class="modal-content bordered" >

                    <table class="highlight  striped responsive-table">
                        <thead>
                            <tr>
 
                                <th scope="col">RG</th>     
                                <th scope="col">Contratada</th>
                                <th scope="col">Vigência Contratual</th>                      
                                <th scope="col">Vigência Garantia</th>                      

                            </tr>
                        </thead>
                        <tbody>                          
                            @php $list = session('list1'); @endphp                            
                            @if(!empty($list ))
                            @foreach($list as $lists)
                            <tr>
                                <td><a href="{{route('contratos.show',$lists->id_contrato)}}">{{$lists->id_contrato}}</a> </td> 
                                <td>{{$lists->rg}}</td> 
                                <td> {{$lists->objeto}}</td>
                                <td> {{$lists->status}}</td>                                            
                                <td> {{$lists->n_siscor}}</td>                                            

                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a  class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
                </div>
            </div>

        </div>

        <script src="/js/app.js"></script>
          <script>
                           $(document).ready(function () {
                               $('.dropdown-button').dropdown({
                                   constrainWidth: false,
                                   hover: true,
                                   belowOrigin: true,
                                   alignment: 'left'
                               });
                               // JAVASCRIPT START HERE //
                               $('.button-collapse').sideNav();
                               // JAVASCRIPT CAROSEUL HERE //
                               //  $('.carousel-slider').carousel({padding: -250});
                               //   $('.carousel').carousel();
                               // $('.carousel-slider').carousel({fullWidth: true});
                               $('.carousel').carousel({
                               });
                               autoplay();
                               function autoplay() {
                                   $('.carousel').carousel('next');
                                   setTimeout(autoplay, 6500);
                               }
                               ;
                               $('.modal').modal({
                                   dismissible: false,
                                   inDuration: 1000,
                                   outDuration: 1000,
                               });
                           });
        </script>
    </body>
</html>
