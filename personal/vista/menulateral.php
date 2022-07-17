<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link" href="../vista/indexadministrador.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    INICIO
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="fas fa-user-lock"><i class="fas fa-user-lock"></i></div>
                    USUARIO
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
            
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="fas fa-mobile-alt"><i class="fas fa-book-open"></i></div>
                    DISPOSITIVO
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav>
                        <a class="nav-link" href="../vista/categoriadispositivo.php">AGREGAR GATEGORIA DE
                            DISPOSITIVO</a>
                        <a class="nav-link" href="../vista/marca.php">VISUALIZAR MARCA DE DISPOSITIVO Y REPUESTO</a>
                        <a class="nav-link" href="../vista/dispositivo.php">REGISTRAR DISPOSITIVO DE CLIENTE</a>
                        <a class="nav-link" href="../vista/cliente.php">REGISTRAR CLIENTE</a>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
                    aria-expanded="false" aria-controls="pagesCollapseError">
                    <div class="fas fa-file-invoice-dollar"><i class="fas fa-book-open"></i></div>
                    SERVICIO
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="categoriaservicio.php">VISUALIZAR CATEGORIA DE SERVICIOS</a>
                        <a class="nav-link" href="servicios.php">AGREGAR SERVICIOS</a>
                        <a class="nav-link" href="serviciorepuesto.php">AGERGAR SERVICIO CON REPUESTO</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false" aria-controls="pagesCollapseAuth">
                    <div class="fas fa-cart-arrow-down"><i class="fas fa-book-open"></i></div>
                    NOTA DE COMPRA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../vista/notacompra.php">GESTIONAR NOTA DE COMPRA</a>
                        <a class="nav-link" href="categoriarepuesto.php">VISUALIZAR CATEGORIA DE REPUESTO</a>
                        <a class="nav-link" href="repuestos.php">REGISTRAR REPUESTO</a>
                        <a class="nav-link" href="inventario.php">VISUALIZAR INVENTARIO</a>
                        <a class="nav-link" href="proveedor.php">REGISTRAR PROVEEDORES</a>

                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseBien"
                    aria-expanded="false" aria-controls="pagesCollapseBien">
                    <div class="fas fa-address-book"><i class="fas fa-book-open"></i></div>
                    RECEPCION
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseBien" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../vista/notarecepcion.php">REGISTRAR NOTA DE RECEPCION</a>
                        <a class="nav-link" href="../vista/accesorios.php"> REGISTRAR ACCESORIOS</a>
                        <a class="nav-link" href="notaservicio.php">REGISTRAR NOTA DE SERVICIO</a>
                        <a class="nav-link" href="notausorepuesto.php">NOTA DE USO DE REPUESTO</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapsemal"
                    aria-expanded="false" aria-controls="pagesCollapsemal">
                    <div class="fas fa-file-alt"><i class="fas fa-book-open"></i></div>
                    NOTA DE ENTREGA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapsemal" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="notaentrega.php">REGISTRAR NOTA DE ENTREGA</a>
                        <a class="nav-link" href="pago.php">GESTIONAR TIPO DE PAGO</a>
                        <a class="nav-link" href="factura.php">REGISTRAR FACTURA</a>

                    </nav>
                </div>

            </div>
    </nav>
</div>