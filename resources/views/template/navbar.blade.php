<!-- Page Header-->

<!-- RD Navbar-->
<header class="section page-header">
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div style="margin-right: 1cm">
                    <a class="navbar-brand" href="{!! asset('/') !!}" style="font-size: 200%">Proyecto Progra web</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{!! asset('/') !!}">Inicio</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Acción</a></li>
                                <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
<br><br>
<br><br>
