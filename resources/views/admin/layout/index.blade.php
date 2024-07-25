<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    {{--<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />--}}
    <link href="{{ asset('css/styles.css') }} " rel="stylesheet" />
    {{--<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>--}}
    <script src="{{asset('js/fontawesome.js')}}"></script>
    <style>
        .barralateral .nav-link {
            color: rgba(255, 255, 255, 0.774) !important;
        }
        .barralateral .nav-link:hover {
            color: rgb(255, 255, 255) !important;
        }
    </style>
</head>

<body class="sb-nav-fixed " style="background-color: #ebecee">
    <nav class="sb-topnav navbar navbar-expand "navbar-dark bg-dark style="background-color: #04222e;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-light" href=" {{route('site.index')}}">Bom Perfil</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-light" id="sidebarToggle"
            href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        {{--
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            --}}
        <!-- Navbar-->
        <ul class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></ul>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"> {{ auth()->user()->name }} <i
                        class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>

                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li>
                            <button type="submit" class="btn">Sair</button>
                        </li>
                    </form>

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #04222e;">
                <div class="sb-sidenav-menu">
                    <div class="nav barralateral">
                        <div class="sb-sidenav-menu-heading"> </div>
                        <a class="nav-link" href="{{route('pedidos.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                            Pedidos
                        </a>
                        @if (auth()->user()->tipo == 'superadmin')
                        <a class="nav-link" href="{{route('users.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Usuários
                        </a>    
                        @endif
                        
                        <a class="nav-link" href="{{ route('produtos.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Produtos
                        </a>
                        <a class="nav-link" href="{{ route('servicos.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                            Serviços
                        </a>
                        <a class="nav-link" href="{{route('mensagens.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                            Mensagens
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('conteudo')
            </main>
        </div>
    </div>
    
    </script>
    <script src="{{ asset('js/scripts.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }} "></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>--}}
    {{--<script src="assets/demo/chart-area-demo.js"></script>--}}
    {{--<script src="assets/demo/chart-bar-demo.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>--}}
    {{--<script src="js/datatables-simple-demo.js"></script>--}}
</body>

</html>
