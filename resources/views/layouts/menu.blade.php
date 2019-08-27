<div class="container-fluid">
    <style>
        * { margin: 0; padding: 0; }
        body {  margin: 10px; }
        #nav { margin: 0; padding: 0; float: left; }       
        #nav li a { display: block; padding: 8px;  text-decoration: none; box-shadow: 2px 2px 5px #ccc; color: #555; }
        #nav li a:hover {background: #f8f8f8; }
        #nav li ul { display: none; }
        #nav li:hover ul { display: block; }
        #nav li:hover ul li { background: #333; }
        #nav li:hover ul li a { color: #ccc; }
        #nav li:hover ul li a:hover { background: #cfcfcfcf; border-left: 4px solid #900; }
    </style>
    <div class="row">
        <nav id="nav" class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Cadastrar
                        </a>
                        <ul>
                            <li><a href="#">Contrato</a></li>
                            <li><a href="#">Fornecedor</a></li>
                            <li><a href="#">Usuario</a></li>
                            <li><a href="#">Severidades</a></li>
                            <li><a href="#">Prorrogação</a></li>
                            <li><a href="#">Usuario</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Consultar
                        </a>
                        <ul>
                            <li><a href="#">Regionais</a></li>
                            <li><a href="#">Fornecedor</a></li>
                            <li><a href="#">Check-List</a></li>
                         
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Relatórios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrações
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Relatórios salvos</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Neste mês
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Último trimestre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Engajamento social
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Vendas do final de ano
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
        </main>
