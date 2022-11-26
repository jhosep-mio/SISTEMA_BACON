<?php
require_once "../../conexionBD.php";
$sentencia = $bd->query("select COUNT(*) as TotalProductos from productos;");
$sentencia1 = $bd->query("select COUNT(*) as TotalUsuarios from usuarios;");
// $sentencia2 = $bd->query("select COUNT(*) as TotalCategorias from categorias;");
// $sentencia3 = $bd->query("select COUNT(*) as TotalVentas from ventas;");
$TotalProductos = $sentencia->fetch()['TotalProductos'];
$TotalUsuarios = $sentencia1->fetch()['TotalUsuarios'];
// $TotalCategorias = $sentencia3->fetch()['TotalCategorias'];
// $TotalVentas = $sentencia1->fetch()['TotalVentas'];

?>
<div class="home-content">
    <!-- RESUMEN -->
    <div class="row content-resumen">
        <div class="row sparkboxes mt-6">
            <div class="col-md-3">
                <div class="box box1">
                    <div class="details">
                        <h3>1213</h3>
                        <h4>VENTAS</h4>
                    </div>
                    <div id="spark1"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box2">
                    <div class="details">
                        <h3><?php echo $TotalProductos; ?></h3>
                        <h4>PRODUCTOS</h4>
                    </div>
                    <div id="spark2"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box3">
                    <div class="details">
                        <h3><?php echo $TotalUsuarios; ?></h3>
                        <h4>USUARIOS</h4>
                    </div>
                    <div id="spark3"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box4">
                    <div class="details">
                        <h3>22</h3>
                        <h4>CATEGORIAS</h4>
                    </div>
                    <div id="spark4"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- GRAFICOS -->
    <div class="content-graficos">
        <div class="col-lg-4">
            <div class="card grafico1">
                <div class="card-body">
                    <h4 class="header-title mb-1">Categorias</h4>
    
                    <!-- GRAFICO 1 -->
                    <div id="dash-campaigns-chart" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>
    
                    <!-- INDICADORES -->
    
                    <div class="row text-center mt-2">
                        <div class="col-md-4">
                            <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="fw-normal mt-3">
                                <span><?php echo $TotalProductos; ?></span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                        </div>
                        <div class="col-md-4">
                            <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="fw-normal mt-3">
                                <span>3,487</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                        </div>
                        <div class="col-md-4">
                            <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="fw-normal mt-3">
                                <span>1,568</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-->
        <div class="col-lg-7">
            <div class="card grafico2">
                <div class="card-body">
    
                    <!-- INDICADORES -->
    
                    <h4 class="header-title mb-3">Ventas</h4>
                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Current Month</p>
                                <h2 class="fw-normal mb-3">
                                    <span>$42,025</span>
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Previous Month</p>
                                <h2 class="fw-normal mb-3">
                                    <span>$74,651</span>
                                </h2>
                            </div>
                        </div>
                    </div>
    
                    <!-- GRAFICO 2 -->
    
                    <div id="dash-revenue-chart" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
    
                </div>
            </div>
        </div>
    </div>
</div>




