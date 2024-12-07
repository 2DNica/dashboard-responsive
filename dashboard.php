<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SIDEBAR </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>

    <section id="sidebar">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">

                            <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class=" fs-4 bi bi-person-check"></i> <span class="ms-1 d-none d-sm-inline">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-basket2-fill"></i> <span class="ms-1 d-none d-sm-inline">Ordini</span> </a>
                                <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Archivio
                                        Ventole</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Magazzino
                                        Dischi
                                        e anelle </span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Magazzino
                                        Mozzi
                                    </span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"></i> <span class="ms-1 d-none d-sm-inline">Magazzino
                                        altri
                                        componenti </span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Archivio
                                        Accessori </span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Costi
                                        Produzione
                                    </span></a>
                            </li>


                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class=" fs-4 bi bi-archive"> </i> <span class="ms-1 d-none d-sm-inline">Archivi</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            2</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-list-check"></i> <span class="ms-1 d-none d-sm-inline">Inventario</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class=" fs-4 bi bi-gear"></i>
                                    <span class="ms-1 d-none d-sm-inline">Impostazione</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/icon_user.png" width="30" height="30" class="rounded-circle">

                                <span class="d-none d-sm-inline mx-1">Utente</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">Nuovo progetto </a></li>
                                <li><a class="dropdown-item" href="#">Impostazione </a></li>
                                <li><a class="dropdown-item" href="#">Profilo </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Disconnetti</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col py-3 bg-secondary bg-gradient ">
                    <h3>Left Sidebar with Submenus</h3>
                    <p class="lead">
                        Barra laterale sinistra con sottomenu
                        Un esempio di barra laterale a 2 livelli con voci di menu comprimibili. Il menu funziona come una "fisarmonica" in cui è aperto un solo menu alla volta. Sebbene la barra laterale stessa non sia attivabile/disattivabile, si riduce in modo responsivo in larghezza sugli schermi più piccoli.
                        Reattivo si riduce in larghezza, nasconde le etichette di testo e si comprime in icone solo su dispositivi mobili</p>
                    <ul class="list-unstyled">
                        <li>
                            <h5>Responsive</h5> si riduce in larghezza, nasconde le etichette di testo e si comprime solo in icone
                            mobile
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>